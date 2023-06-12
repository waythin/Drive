<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


// 1. show all the list index
// 2. registration page
// 3. registration post/ store
// 4. edit profile page
// 5. update profile page

class DriverController extends Controller
{
    
    public function index(Request $request)
    {

        
        $drivers = Driver::all(); 
        return view('/list_index', compact('drivers'));
        
        //postman
        // return response()->json($drivers, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('registration');
    }

    
    public function store(Request $request)
    {
        $request->validate(

            [   'name' => 'required|min:3|max:25',
                'email' => 'required|email:rfc,dns',
                'phone' => 'required|digits:11',
                'password' => 'required|min:6',
                'tikmark' =>'required'
            ],
    
            [
                'name.min'=>'Name must include at least 3 characters',
                'name.max'=>'Name cannot exceed 25 characters',
                'phone.digits'=>'Enter a valid phone number',
                'password.max'=>'Password must include at least 6 characters',
                'tikmark.required' =>'Required'
            ]);
    
            $driver = new Driver;
    
            $driver->name = $request->name;
            $driver->email = $request->email;
            $driver->phone = $request->phone;
            $driver->password = $request->password;
            $driver->save();
    
            return "successful";
            
            
            // postman!!!!!
            // if($driver){
            //     return response()->json([
            //    'driver' => $driver,
            //    'message'=> 'created successfully'
            // ], 200);
            // }

            // else{
            //     return response()->json([
                    
            //         'message'=> 'something went wrong'
            //      ], 200);
            // }
           
    }

    


    public function show(Driver $driver)
    {
        
    }

    

    public function edit($id)
    {
        $driver = Driver::where("id_driver", $id)->first();
        return view('/update', compact('driver'));

        // return response()->json($driver,200);
    }

    

    public function update(Request $request, $id)
    {
        $request->validate(

            [   'name' => 'required|min:3|max:25',
                'email' => 'required',
                'phone' => 'required',
                'password' => 'required',
            ],
    
            [
                // 'name.required'=>'Name is requried!',
                // 'name.min'=>'Name must be more than 2 characters!',
                // 'name.max'=>'Name must be less than 16 characters!',
            ]);
    
            $driver = Driver::find($id); 
    
            $driver->name = $request->name;
            $driver->email = $request->email;
            $driver->phone = $request->phone;
            $driver->password = $request->password;
            $driver->save();
            

            return redirect()->route('index');

            // if($driver){
            //     return response()->json([
            //    'driver' => $driver,
            //    'message'=> 'edited successfully!!!'
            // ], 200);
            // }

            // else{
            //     return response()->json([
                     
            //         'message'=> 'not found'
            //      ], 200);
            // }
            
    }

   
    public function delete($id)
    {

        // $driver = Driver::find($id)->delete();
        // return redirect('/index');

        $drive =  Driver::find($id);
        if($drive){

           $drive->delete();
              
            return response()->json([
            'massege' => "deleted"
        ],200);
        }
      
        else{
            return response()->json([
            'massege' => "id not found"
        ],404);
        }
    }


    public function login(){

        return view('/login');

    }

    public function loginCheck(Request $request){

        $driver= Driver::all();
       

        
        $email = $request->email;
        $password = $request->password;

        $request->validate(

            [   'email' => 'required',
                'password' => 'required',
            ],
    
            [
                // 'password.string'=>'Please enter a correct username and password.'
            ]);

        $driver = Driver::where('email', $email)->first();
        // $flag = false;

        if($driver->password == $password && $driver->email == $email){

            // $flag = true;
            $request->session()->put('id',$driver->id_driver);
            $request->session()->put('name',$driver->name);
            return view('/dope');
        }
       
        return back()->withErrors([
            'password' => 'Incorrect email or pasaword',
        ]);
            
        



        //============================================
        
        // 
        //     $credentials = $request->validate([
        //         'email' => ['required'],
        //         'password' => ['required'],
        //     ]);
    
        //     if (Auth::attempt($credentials)) {
        //         $request->session()->regenerate();
    
        //         return redirect()->intended('dashboard');
        //     }
    
        //     return back()->withErrors([
        //         'email' => 'The provided credentials do not match our records.',
        //     ])->onlyInput('email');
        // }
        
        
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('login');
    }
}
