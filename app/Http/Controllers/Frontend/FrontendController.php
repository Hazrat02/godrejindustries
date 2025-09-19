<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\payment;
use App\Models\transaction;

use App\Models\kyc;

use Illuminate\Support\Facades\Mail;
use App\Mail\trx_request;
use App\Mail\bank;
use App\Models\bank_detail;





use Illuminate\Support\Facades\Http;

class FrontendController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register', 'ask', 'vip', 'createPayment', 'paymentCancel', 'paymentSuccess', 'handleWebhook']]);
    }
    public function payment_method()
    {
        $payment = payment::where('user_id', auth()->user()->id);
        $paymentarray = payment::where('user_id', auth()->user()->id)->get()->first();
        if ($payment->count() > '0') {
            return response()->json([

                'payment' => $paymentarray,

            ]);
        } else {
            return response()->json([

                'payment' => '',

            ]);
        }
    }

    public function deposit(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'trxid' => 'required',
            'method' => 'required',
            // 'address' => 'required',
        ]);

        $user = User::find(auth()->user()->id);
        $bank = bank_detail::where('method_name',$request->method)->get();
        $bankUser = is_string($user->bank) ? json_decode($user->bank) : (object) $user->bank;
        $isWithdraw = Str::lower($request->type) === 'withdraw';

        $bankAddress = $isWithdraw ? optional($bankUser)->ac_num : optional($bank->first())->ac_num;
        $address = $bank->count() > 0 ? $bankAddress : $request->address;


        $transaction = transaction::create([
            'status' => 'pending',
            'user_id' => $user->id,
            'method' => $request->method,
            'type' => $request->type,
            'trx_id' => $request->trxid,
            'amount' => $request->amount,
            'address' => $address,
            'created_at' => now(),
        ]);





        if ($bank->count() > 0  ) {
           
        $other = ([
            'ex_rate' => $bank->first()->ex_rate,
            'method' => $request->method,
            'type' => Str::lower($request->type),
        ]);

        } 
      

        if ($isWithdraw) {




            $user->update(
                [
                    'main_balance' => $user->main_balance - $request->amount,


                ]
            );





            if ($bank->count() > 0) {
                Mail::to('support@wimbledoninvestments.com')
                    ->send(new bank($bankUser, $request->amount, $other));
                Mail::to($user->email)
                    ->send(new bank($bankUser, $request->amount, $other));
            } else {
                $mail = new trx_request(
                    $request->amount,
                    $request->type,
                    $request->method,
                    $request->address,
                    $request->dep_address,
                    $user->role
                );

                Mail::to($user->email)->send($mail);
                Mail::to('support@wimbledoninvestments.com')->send($mail);
            }
        } else {
            if ($bank->count() > 0) {
                Mail::to($user->email)->send(new bank($bank->first(), $request->amount, $other));
            } else {
                Mail::to($user->email)->send(new trx_request(
                    $request->amount,
                    $request->type,
                    $request->method,
                    $request->address,
                    $request->dep_address,
                    $user->role
                ));
            }
        }

        return response()->json([
            'message' => 'Your ' . ($request->type === 'deposit' ? 'deposit' : 'withdrawal') . ' request has been initiated. A secure and unique transaction key has been generated and sent to your registered mail ID.',
            'status' => 'pending',
            'user_id' => $user->id,
            'method' => $request->method,
            'type' => $request->type,
            'trx_id' => $request->trxid,
            'amount' => $request->amount,
            'address' => $address,
            'created_at' => now(),

        ]);
    }

    public function transaction(Request $request)
    {
        if (auth()->user()->role === '0') {
            $allTransaction = transaction::orderBy('id', 'desc')->get();
            $authTransaction = transaction::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();
            return response()->json([
                'allTransaction' => $allTransaction,
                'authTransaction' => $authTransaction

            ]);
        } else {
            $allTransaction = '';
            $authTransaction = transaction::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();
            return response()->json([
                'allTransaction' => $allTransaction,
                'authTransaction' => $authTransaction

            ]);
        }
    }



    public function user_edit(Request $request)
    {
        $user = User::find(auth()->user()->id);
        if ($request->hasFile('profile')) {
            $file = $request->file('profile');


            $name = rand(0000000, 999999) . $file->getClientOriginalName();
            $file->move(public_path('img/profile'), $name);
            $path = asset('public/img/profile/');
            $url = $path . '/' . $name;
        } else {
            $url = $user->profile;
        }


        if ($request->password) {
            $request->validate([

                'password' => 'required|string|min:6|confirmed',


            ]);


            $password = Hash::make($request->password);
        } else {
            $password = $user->password;
        }


        $user->update(
            [

                'password' => $password,
                'profile' => $url,
                'name' => $request->name,
                'birth' => $request->birth,
                'Phone' => $request->phone,

            ]
        );

        return response()->json([
            'user' => $user,
            'message' => 'User update done!'

        ]);
    }
    public function address_edit(Request $request)
    {

        $request->validate([

            'platform' => 'required',

        ]);



        $user = User::find(auth()->user()->id);
        $allbank = bank_detail::where('method_name',$request->platform)->get();

        $data = [
            'platform' => $request->platform,
        ];
        $bank = json_decode($request->bank, true);

        if ($allbank->count() > 0) {
            $data['wallet'] = null; // or any default value
            $data['network'] = null;
            $data['bank'] = $bank; // assuming $request->bank is an array and `bank` column is JSON
        } else {
            $data['wallet'] = $request->address;
            $data['network'] = $request->network;
            $data['bank'] = null; // if you're using a JSON column for bank data
        }

        $user->update($data);


        // $user->update(
        //     [




        //         'wallet' => $request->address,
        //         'network' => $request->network,
        //         'platform' => $request->platform,

        //     ]
        // );

        return response()->json([
            'user' => $user,
            'message' => 'Withdrawal address Added!'

        ]);
    }
    public function kyc(Request $request)
    {










        if ($request->hasFile('front')) {
            $file = $request->file('front');


            $name = rand(0000000, 999999) . $file->getClientOriginalName();
            $file->move(public_path('img/kyc'), $name);
            $path = asset('public/img/kyc/');
            $font_url = $path . '/' . $name;
        } else {
            $font_url = '';
        }
        if ($request->hasFile('back')) {
            $file = $request->file('back');


            $name = rand(0000000, 999999) . $file->getClientOriginalName();
            $file->move(public_path('img/kyc'), $name);
            $path = asset('public/img/kyc/');
            $back_url = $path . '/' . $name;
        } else {
            $back_url = '';
        }
        if ($request->hasFile('file')) {
            $file = $request->file('file');


            $name = rand(0000000, 999999) . $file->getClientOriginalName();
            $file->move(public_path('img/kyc'), $name);
            $path = asset('public/img/kyc/');
            $file_url = $path . '/' . $name;
        } else {
            $file_url = '';
        }

        $existUser = User::find(auth()->user()->id);

        $existkyc = kyc::where('user_id', auth()->user()->id);






        if ($existkyc->count() > 0) {

            if ($request->type == 'id') {


                $user = $existkyc->update([
                    'user_id' => auth()->user()->id,
                    'id_front' => $font_url,
                    'id_back' => $back_url,
                    'id_file' => $file_url,

                ]);

                $existUser->update(
                    [

                        'id_kyc' => 'pending',


                    ]
                );
            }
            if ($request->type == 'address') {


                $user = $existkyc->update([
                    'user_id' => auth()->user()->id,
                    'ad_front' => $font_url,
                    'ad_back' => $back_url,
                    'ad_file' => $file_url,
                    'country' => $request->country,
                    'city' => $request->city,
                    'address' => $request->address,
                    'postel' => $request->postel,

                ]);
                $existUser->update(
                    [

                        'ad_kyc' => 'pending',


                    ]
                );
            }
            if ($request->type == 'selfie') {


                $user = $existkyc->update([
                    'user_id' => auth()->user()->id,

                    'se_file' => $file_url,

                ]);

                $existUser->update(
                    [

                        'id_kyc' => 'pending',


                    ]
                );
            }
            if ($request->type == 'other') {


                $user = $existkyc->update([
                    'user_id' => auth()->user()->id,

                    'ot_file' => $file_url,

                ]);
                $existUser->update(
                    [

                        'id_kyc' => 'pending',


                    ]
                );
            }
        } else {

            if ($request->type == 'id') {


                $user = kyc::create([
                    'user_id' => auth()->user()->id,
                    'id_front' => $font_url,
                    'id_back' => $back_url,
                    'id_file' => $file_url,

                ]);

                $existUser->update(
                    [

                        'id_kyc' => 'pending',


                    ]
                );
            }
            if ($request->type == 'address') {


                $user = kyc::create([
                    'user_id' => auth()->user()->id,
                    'ad_front' => $font_url,
                    'ad_back' => $back_url,
                    'ad_file' => $file_url,
                    'country' => $request->country,
                    'city' => $request->city,
                    'address' => $request->address,
                    'postel' => $request->postel,

                ]);
                $existUser->update(
                    [

                        'ad_kyc' => 'pending',


                    ]
                );
            }
            if ($request->type == 'selfie') {


                $user = kyc::create([
                    'user_id' => auth()->user()->id,

                    'se_file' => $file_url,

                ]);

                $existUser->update(
                    [

                        'id_kyc' => 'pending',


                    ]
                );
            }
            if ($request->type == 'other') {


                $user = kyc::create([
                    'user_id' => auth()->user()->id,

                    'ot_file' => $file_url,

                ]);
                $existUser->update(
                    [

                        'id_kyc' => 'pending',


                    ]
                );
            }
        }








        return response()->json([
            'user' => $user,
            'message' => 'kyc Submited!'

        ]);
    }

    public function createPayment()
    {
        $baseURL = 'https://hazrat.paymently.io/';
        $apiKEY = '55GpsCHEKwjtezrJi9tO9mhSnD8GIKB45WmMc2t9';

        $fields = [
            'full_name'    => 'John Doe',
            'email'        => 'hazrat@gmail.com',
            'amount'       => '100',
            'metadata'     => [
                'user_id'  => '10',
                'order_id' => '50',
            ],
            'redirect_url' => url('/success'),
            'return_type'  => 'GET',
            'cancel_url'   => url('/cancel'),
            'webhook_url'  => url('/webhook'),
        ];

        try {
            $response = Http::withHeaders([
                'RT-UDDOKTAPAY-API-KEY' => $apiKEY,
                'Accept'                => 'application/json',
                'Content-Type'          => 'application/json',
            ])->post($baseURL . 'api/checkout-v2', $fields);

            if ($response->successful()) {

                if ($response->successful()) {
                    $data = $response->json();

                    // Assuming the response looks like: ['payment_url' => 'https://...']
                    if (isset($data['payment_url'])) {
                        return redirect()->to($data['payment_url']);
                    } else {
                        return response()->json(['error' => 'payment_url not found in response'], 400);
                    }
                }
            } else {
                return response()->json(['error' => $response->body()], $response->status());
            }
        } catch (\Exception $e) {
            return response()->json(['error' => 'Request failed: ' . $e->getMessage()], 500);
        }
    }


    public function paymentSuccess(Request $request)
    {
        $invoiceId = $request->query('invoice_id');
        $status = $request->query('status');



        return response()->json([
            'invoice_id' => $invoiceId,
            'status' => $status,
            'all_data' => $request->all(), // includes everything from query string

        ]);
    }
    public function paymentCancel(Request $request)
    {




        return response()->json([
            'status' => 'paymentCancel',

        ]);
    }

    public function handleWebhook(Request $request)
    {


        // Example: Save to database
        $data = $request->all();

        // You can use $data['metadata']['user_id'] etc.
        // Update payment status, send email, etc.

        // return response()->json(['data' =>  $data], 200);
        return response()->json(['message' => 'Received'], 200);
    }
}
