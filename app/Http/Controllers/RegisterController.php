<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->check()){
            return redirect('/dashboard');
        }
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //validate
        $request->validate([
            'fname'=>'required',
            'email'=>'required',
            'phone'=>'required',
            'uname'=>'required',
            'password'=>'required'
        ],[
            'fname.required'=>' Full name is required',
            'email.required'=>' Email is required',
            'phone.required'=>' Phone number is required',
            'uname.required'=>' User name is required',
            'password.required'=>' Password is required',
        ]);

        //check mobile number
        $check_number = User::where('phone',$request->phone)->first();
        if($check_number != null){
            return redirect('/register')->with('error','Phone number is exists');
        }

        //check email
        $check_number = User::where('email',$request->email)->first();
        if($check_number != null){
            return redirect('/register')->with('error','Email is exists');
        }

        //otp generation
        $otp = random_int(100000, 999999);

        $user = new User;
        $user->username = $request->uname;
        $user->fullname = $request->fname;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->otp = $otp;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
