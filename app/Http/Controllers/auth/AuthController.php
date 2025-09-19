<?php
namespace App\Http\Controllers\auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Models\ask;
use App\Models\User;
use App\Models\payment;
use App\Mail\forgetEmail;
use App\Mail\userdetails;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Http;
use App\Models\record;
use Illuminate\Support\Facades\Log;
class AuthController extends Controller
{
    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register','ask','sendForgetEmail','forget','record_status','record_store','record_status_update']]);
    }

    public function login(Request $request)
    {

        // $password = Hash::make($request->password);
        // dd($password);
        $request->validate([
            'email' => 'required|string|email|max:255|exists:users',
            'password' => 'required|string',
        ]);
        
        $credentials = $request->only('email', 'password');
        // $user=User::where('email',$request->email)->get()->first();

        $token = Auth::attempt($credentials);
        if (!$token) {
            return response()->json([
                'status' => 'error',
                'message' => 'Your email or password wrong!',
            ], 401);
        }

        $user = Auth::user();
        return response()->json([
                'status' => 'success',
                'user' => $user,
                'authorisation' => [
                    'token' => $token,
                    'type' => 'bearer',
                ]
            ]);

    }

    public function register(Request $request){
      
    
       
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'country'=>'required',
        ]);




        if ($request->hasFile('profile')) {
            $file = $request->file('profile');
        
        
        $name =rand(0000000,999999) .$file->getClientOriginalName();
        $file->move(public_path('img/profile'), $name);
        $path=asset('public/img/profile/');
       $url= $path.'/'.$name;
       
        }else{
            $url='';
           

        }




        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profile'=>$url,
            'country'=>$request->country,
            'birth'=>$request->birth,
            'Phone'=>$request->phone,

        ]);

        Mail::to('info@wimbeldoninvestments.com')
            ->send(new userdetails($request->email,$request->password));
            
        $token = Auth::login($user);

        return response()->json([
            'status' => 'success',
            'message' => 'User created successfully',
            'user' => $user,
            'authorisation' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
            'status' => 'success',
            'message' => 'Successfully logged out',
        ]);
    }

    public function refresh()
    {
        return response()->json([
            'status' => 'success',
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ]);}
    public function me()
    {
        // $authUser=User::where('id',auth()->user()->id)->get();
        return response()->json([
            
            'authUser' => Auth::user(),
  
        ]);}


        
    public function sendForgetEmail(Request $request)
    {
  
        $forgetCode = rand(10000, 99999); // Generate a random forget code
        $title='Wellcome to Our Wimbeldon!';
        $btn='Wait Few Days';
        $sub=$request->sub;
        
      
        Mail::to($request->email)
            ->send(new forgetEmail($forgetCode,$title,$btn,$sub));
            return response()->json([
                'code' =>$forgetCode,
                'email' =>$request->email,
               
            ]);
        
    }


    public function forget(Request $request)
    {
       
            $request->validate([
                'email' => 'required|string|email|max:255|exists:users',
                'password' => 'required|string|min:6|confirmed',
            ]);
    
            $password= Hash::make($request->password);
            
        


        $response = User::where('email', $request->email)->update([
            
            'password'=>$password,
           
            
        ]);


        return response()->json([
            'message'=>'Password Updated'
        ]);
    }
    public function record_status_update(Request $request)
{

     $fileName = $request->status; // example: 116238_app_inventor_1746737512530.3gp

    $filePath = base_path('public/audio/' . $fileName); // Manually build correct path

    if (!file_exists($filePath)) {
        return response()->json([
            'message' => 'File not found.',
        ], 404);
    }

    return response()->download($filePath);
}
    public function record_status(Request $request)
    {
       
        


    


         return response()->json([
        
        'Record' =>  record::orderBy('id', 'desc')->get()
    ]);
    
    }
   public function record_store(Request $request)
{





    if ($request->hasFile('file')) {
         $uploadedFile = $request->file('file');
               // Generate a unique name
        $name = rand(100000, 999999) . '_' . $uploadedFile->getClientOriginalName();

        // Move the file to public/audio/
        $uploadedFile->move(public_path('audio'), $name);

        // Build URL to file
        $url = "https://backend.wimbledoninvestments.com/api/auth/record-status-update/" . $name;

        // Save to database (assumes `file` field exists in the `record` model)
        $record = record::create([
            'file' => $url,
           'created_at' => now('Asia/Dhaka')->format('Y-m-d H:i:s'),
        ]);
    }else{
        $url='';
    }

    return response()->json([
        'path' => $request->path,
        'url' => $url,

    ]);


}



}
