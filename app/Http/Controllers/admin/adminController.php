<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\payment;
use App\Models\transaction;
use App\Models\kyc;
use App\Models\contact;
use App\Models\work;
use App\Models\lead;
use App\Models\platform;
use App\Models\bank_detail;

use Illuminate\Support\Facades\Mail;
use App\Mail\transection;
use PhpParser\Node\Stmt\Return_;


class adminController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
    }

    public function contact_us(Request $request)
    {


        $contact = contact::orderBy('id', 'desc')->get();



        return response()->json([

            'contact' => $contact

        ]);
    }
    public function platform_create(Request $request)
    {





        $payment = platform::create([

            'name' => $request->name,




        ]);


        return response()->json([
            'status' => 'success',
            'message' => 'Platform created successfully',
            'data' => $payment

        ]);
    }
    public function platform_delete(Request $request)
    {





        $id = $request->id;
        $user = platform::find($id)->get();
        $res = platform::find($id)->delete();

        return response()->json([
            'message' => 'Platform Delete done!',


        ]);
    }
    public function platform(Request $request)
    {




        $platform = platform::with('network')->get();
        $bank = bank_detail::get();
        return response()->json([
            'platform' => $platform,
            'bank' => $bank,


        ]);
    }
    public function payment_delete(Request $request)
    {






        $id = $request->id;
        $user = payment::find($id)->get();
        $res = payment::find($id)->delete();

        return response()->json([
            'message' => 'Network Delete done!',


        ]);
    }
    public function payment_method_create(Request $request)
    {




        if ($request->hasFile('qr')) {
            $file = $request->file('qr');


            $name = rand(0000000, 999999) . $file->getClientOriginalName();
            $file->move(public_path('img/method'), $name);
            $path = asset('public/img/method/');
            $qrurl = $path . '/' . $name;
        } else {
            $qrurl = '';
        }
        if ($request->hasFile('doc')) {
            $file = $request->file('doc');


            $name = rand(0000000, 999999) . $file->getClientOriginalName();
            $file->move(public_path('img/method'), $name);
            $path = asset('public/img/method/');
            $docurl = $path . '/' . $name;
        } else {
            $docurl = '';
        }
        $payment = payment::create([

            'user_id' => $request->platform_id,
            'method' => $request->method,
            'qr' => $qrurl,
            'doc' => $docurl,



            'wallet_address' => $request->wallet_address,
            'bank_address' => $request->bank_address,
            'tag' => $request->tag,

            'holder' => $request->holder,
            'bank_name' => $request->bank_name,
            'ifsc' => $request->ifsc,


        ]);


        return response()->json([
            'status' => 'success',
            'message' => 'Method created successfully',
            'network' => $payment

        ]);
    }
    public function network(Request $request)
    {


        $network = payment::orderBy('id', 'desc')->get();


        return response()->json($network);
    }


    public function work_store(Request $request)
    {





        $user = User::find(auth()->user()->id);
        $work = work::create([


            'user_id' => auth()->user()->id,
            'employ' => $request->employ,
            'industry' => $request->industry,
            'source_of_income' => $request->source_of_income,
            'est_annual_income' => $request->est_annual_income,

            'est_net_worth' => $request->est_net_worth,
            'ever_traded' => $request->ever_traded,
            'previous_work_exp' => $request->previous_work_exp,
            'are_you_us_citizen' => $request->are_you_us_citizen,



        ]);
        $user->update(
            [

                'ec_kyc' => 'pending',


            ]
        );


        return response()->json([
            'status' => 'success',
            'economic' => $work,
            'message' => 'economic created successfully',

        ]);
    }

    public function admin_deposit(Request $request)
    {
        $request->validate([

            'amount' => 'required',


        ]);



        $user = User::where('id', $request->id)->get()->first();
        $allbank = bank_detail::where('method_name',$request->method)->get();



        if ($request->type == 'withdraw' || $request->type == 'Withdraw') {




            $user->update(
                [
                    'main_balance' => $user->main_balance - $request->amount,


                ]
            );
        } else {



            $user->update(
                [
                    'main_balance' => $user->main_balance + $request->amount,


                ]
            );
        }

        $transection = transaction::create([
            'status' => 'success',
            'user_id' => $request->id,
            'method' => $request->method,
            'type' => $request->type,

            'amount' => $request->amount,
            'trx_id' => $request->trxid,
            'address' => $retVal = $allbank->count() > 0 ? $allbank->first()->ac_num : $request->address,
            'created_at' => now(),


        ]);


        return response()->json([
            'message' => 'Your transection done.',
            'status' => 'success',
            'user' => $user,
            'transection' => $transection,
        ]);
    }
    public function all_user()
    {
        $alluser =  User::orderBy('id', 'desc')->where('email', '<>', 'developer@gmail.com')->get();
        return response()->json([
            'alluser' => $alluser,

        ]);
    }

    public function user_details(Request $request)
    {
        $economic = work::where('user_id', $request->id)->get()->first();
        $kyc = kyc::where('user_id', $request->id)->get()->first();
        $payment = payment::where('user_id', $request->id)->get()->first();


        return response()->json([
            'economic' => $economic,
            'kyc' => $kyc,
            'payment' => $payment,

        ]);
    }

    public function user_delete(Request $request)
    {
        $id = $request->id;
        $user = User::find($id)->get();
        $res = User::find($id)->delete();

        return response()->json([
            'user' => $user,
            'message' => 'Delete done!',


        ]);
    }



    public function work_edit(Request $request)
    {


        $work = work::where('user_id', auth()->user()->id)->get()->first();
        // dd($user);





        $work->Update([


            'employ' => $request->employ,
            'industry' => $request->industry,
            'source_of_income' => $request->source_of_income,
            'est_annual_income' => $request->est_annual_income,

            'est_net_worth' => $request->est_net_worth,
            'ever_traded' => $request->ever_traded,
            'previous_work_exp' => $request->previous_work_exp,
            'are_you_us_citizen' => $request->are_you_us_citizen,



        ]);



        return response()->json([
            'status' => 'success',
            'economic' => $work,
            'message' => 'economic Update successfully',

        ]);
    }
    public function bank_add(Request $request)
    {
        $request->validate([
            'beneficiary' => 'required',
            'method_name' => 'required',
            'ac_num' => 'required',
            'ac_type' => 'required',
            'branch' => 'required',
            'ifsc_code' => 'required',
            'ex_rate' => 'required',
        ]);

        $bank = bank_detail::create($request->all());

        return response()->json([
            'status' => 'success',
            'bank' => $bank,
            'message' => 'Bank added successfully',
        ]);
    }

    public function bank_edit(Request $request)
    {


        $bank = bank_detail::where('id', $request->id)->get()->first();






        $bank->Update($request->all());
        $getDatat = bank_detail::get();


        return response()->json([
            'status' => 'success',
            'bank' => $getDatat,
            'message' => 'Bank Update successfully',

        ]);
        // return response()->json([
        //     'id' => $request->id,
        //     'bank'=> $bank,
        //     'message' => 'Bank Update successfully',

        // ]);


    }
    public function bank_delete(Request $request)
    {
        $id = $request->id;
        $bank = bank_detail::find($id)->delete();

        return response()->json([

            'message' => 'Delete done!',


        ]);
    }

    public function kyc_edit(Request $request)
    {


        $user = User::where('id', $request->id)->get()->first();
        // dd($user);

        $user->update(
            [
                $request->type => 'success',



            ]
        );

        return response()->json([
            'message' => 'KYC update done!',
            'user' => $user

        ]);
    }

    public function payment_edit(Request $request)
    {


        $payment = payment::where('user_id', auth()->user()->id)->get()->first();





        if ($request->hasFile('qr')) {
            $file = $request->file('qr');


            $name = rand(0000000, 999999) . $file->getClientOriginalName();
            $file->move(public_path('img/method'), $name);
            $path = asset('public/img/method/');
            $qrurl = $path . '/' . $name;
        } else {
            $qrurl = $payment->qr;
        }
        if ($request->hasFile('doc')) {
            $file = $request->file('doc');


            $name = rand(0000000, 999999) . $file->getClientOriginalName();
            $file->move(public_path('img/method'), $name);
            $path = asset('public/img/method/');
            $docurl = $path . '/' . $name;
        } else {
            $docurl = $payment->doc;
        }
        $payment->update([

            'user_id' => auth()->user()->id,
            'method' => $request->method,
            'qr' => $qrurl,
            'doc' => $docurl,



            'wallet_address' => $request->wallet_address,
            'bank_address' => $request->bank_address,
            'tag' => $request->tag,

            'holder' => $request->holder,
            'bank_name' => $request->bank_name,
            'ifsc' => $request->ifsc,


        ]);


        return response()->json([
            'status' => 'success',
            'message' => 'Method Update successfully',
            'payment' => $payment

        ]);

        return response()->json([
            'message' => 'Payment update done!',
            'payment' => $payment

        ]);
    }
    public function transaction_edit(Request $request)
    {
        $id = $request->id;

        $transaction = transaction::find($id);
        $user = User::where('id', $transaction->user_id)->get()->first();


        if ($request->status == 'success') {

            if ($transaction->type == 'deposit') {

                $user->update(
                    [
                        'main_balance' => $user->main_balance + $transaction->amount,


                    ]
                );
            }

            $status = $transaction->update(
                [
                    'status' => 'success',


                ]
            );
        } else {

            if ($transaction->type == 'deposit') {

                $status = $transaction->update(
                    [
                        'status' => 'rejected',


                    ]

                );
            } else {

                $status = $transaction->update(
                    [
                        'status' => 'rejected',


                    ]
                );

                $user->update(
                    [
                        'main_balance' => $user->main_balance + $transaction->amount,


                    ]
                );
            }
        }

        if ($request->status == 'success') {

            Mail::to($user->email)
                ->send(new transection($transaction->amount, $transaction->type));
        }

        return response()->json([
            'message' => 'Transaction update done!',
            'status' => $status

        ]);
    }
    public function transfer(Request $request)
    {

        $user = User::where('id', $request->id)->get()->first();


        $user->update(
            [
                'main_balance' => $user->main_balance + $request->amount,



            ]
        );




        return response()->json([
            'message' => 'Balance Deposit done!',
            'user' => $user

        ]);
    }


    public function leads(Request $request)
    {


        $lead = lead::orderBy('id', 'desc')->get();



        return response()->json([

            'lead' => $lead

        ]);
    }
}
