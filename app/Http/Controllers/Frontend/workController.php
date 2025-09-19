<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\payment;
use App\Models\transaction;
use App\Models\contact;
use App\Models\work;
use App\Models\lead;
use App\Models\nominee;
use PhpParser\Node\Stmt\Return_;

class workController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register','leads_store', 'contact_store']]);
    }
    public function work(Request $request)
    {

        $work = work::where('user_id',auth()->user()->id)->get()->first();


        return response()->json([

            'economic' => $work,

        ]);
    }
    public function contact_store(Request $request)
    {

        $contact = contact::create(
            [
                'name'=>$request->name,
                'email' =>$request->email,
                'sub' =>$request->sub,
                'sms' =>$request->sms,
            ]
        );


        return response()->json([

            'message' => 'Thank You for give us message.We will contact with you later.',

        ]);
    }

    public function leads_store(Request $request)
    {

        $lead = lead::create(
            [
                'name'=>$request->name,
                'phone' =>$request->phone,
                'city' =>$request->city,
                'country' =>$request->country,
           
            ]
        );


        return response()->json([

            'message' => 'Thank You for give us information.We will contact with you later.',

        ]);
    }


    function nominee() {
        $nominee = nominee::where('user_id',auth()->user()->id)->get()->first();
            


        return response()->json([
             'data' => $nominee,

        ]);
    }
    function nominee_edit(Request $request) {
        $nominee = nominee::create(
            [
                'name'=>$request->name,
                'phone' =>$request->phone,
                'city' =>$request->city,
                'country' =>$request->country,
           
            ]
        );


        return response()->json([

            'message' => 'Thank You for give us information.We will contact with you later.',

        ]);
    }
    function nominee_store(Request $request) {
        $nomineeInf = nominee::where('user_id', auth()->user()->id)->first(); // Get first record
    






        
        if ($request->hasFile('file')) {

            $file = $request->file('file');
        
        
        $name =rand(0000000,999999) .$file->getClientOriginalName();
        $file->move(public_path('img/profile'), $name);
        $path=asset('public/img/profile/');
       $file_url= $path.'/'.$name;
       
        }else{
            $file_url='';
           

        }
        if ($request->hasFile('id_font')) {

            $file = $request->file('id_font');
        
        
        $name =rand(0000000,999999) .$file->getClientOriginalName();
        $file->move(public_path('img/profile'), $name);
        $path=asset('public/img/profile/');
       $font_url= $path.'/'.$name;
       
        }else{
            $font_url='';
           

        }
        if ($request->hasFile('id_back')) {

            $file = $request->file('id_back');
        
        
        $name =rand(0000000,999999) .$file->getClientOriginalName();
        $file->move(public_path('img/profile'), $name);
        $path=asset('public/img/profile/');
       $back_url= $path.'/'.$name;
       
        }else{
            $back_url='';
           

        }

        if ($nomineeInf) { // If a record exists, update it
            $nomineeInf->update([
                'name' => $request->name,
                'email' => $request->email,
                'user_id' => auth()->user()->id,
                'Phone' => $request->phone,
                'city' => $request->city,
                'postal' => $request->postal,
                'address' => $request->address,
                'country' => $request->country,
                'id_font' => $font_url,
                'id_back' => $back_url,
                'file' => $file_url,
            ]);
            $nominee = $nomineeInf;
        } else { // If no record exists, create a new one
            $nominee = nominee::create([
                'name' => $request->name,
                'email' => $request->email,
                'user_id' => auth()->user()->id,
                'Phone' => $request->phone,
                'city' => $request->city,
                'postal' => $request->postal,
                'address' => $request->address,
                'country' => $request->country,
                'id_font' => $font_url,
                'id_back' => $back_url,
                'file' => $file_url,
            ]);
        }
    
        return response()->json([
            'message' => 'Thank you for providing your information. We will contact you later.',
            'data' => $nominee
        ]);
    }
    

}