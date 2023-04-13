<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use Illuminate\Http\Request;


class DriverController extends Controller
{
    
    public function index(Request $request)
    {

        
        $drivers = Driver::all(); 
        return view('/list_index', compact('drivers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
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
    
            $driver = new Driver;
    
            $driver->name = $request->name;
            $driver->email = $request->email;
            $driver->phone = $request->phone;
            $driver->password = $request->password;
            $driver->save();
    
            return "successful";
    }

    /**
     * Display the specified resource.
     */
    public function show(Driver $driver)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $driver = Driver::where("id_driver", $id)->first();
        return view('/update', compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     */
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
            
    }

   
    public function delete($id)
    {
        // $driver = Driver::where('id_driver', $id)->delete();
        // return view();

        Driver::find($id)->delete();
            return redirect('/index');
    }


    public function login(){

        return view('/login');

    }

    public function loginCheck(Request $request){

        // $driver= Driver::all();
       
        $name = $request->name;
        $password = $request->password;

        $request->validate(

            [   'name' => 'required|min:3|max:25',
                'password' => 'required',
            ],
    
            [
                // 'name.required'=>'Name is requried!',
                // 'name.min'=>'Name must be more than 2 characters!',
                // 'name.max'=>'Name must be less than 16 characters!',
            ]);

        $driver = Driver::where('name', $name)->first();
        $flag = false;

        if($driver->password == $password && $driver->name == $name){

            $flag = true;
            $request->session()->put('id',$driver->id_driver);
            $request->session()->put('name',$driver->name);
            return view('/dope');
        }
        else{
            return ('wrong gg');
        }

        
        
    }

    public function logout(Request $request){
        $request->session()->flush();
        return redirect()->route('login');
    }
}
