<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('setting');
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
        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore=date("d_m_y_H_i_s_").'_'.$filename.'.'.$extension;
            // $path = $request->file('asset_file')->storeAs('public/uploads', $fileNameToStore);
            $request->file('file')->move(public_path('images'), $fileNameToStore);
            // dd($fileNameToStore);
        }

        $userupdate = User::where('id',auth()->user()->id)->first();
        $userupdate->fullname = $request->fname;
        $userupdate->phone = $request->phone;
        $userupdate->profile_webiste = $request->website;
        $userupdate->country = $request->country;
        $userupdate->language = $request->language;
        $userupdate->time_zone = $request->timezone;
        if (isset($fileNameToStore)) {
            $userupdate->profile_photo = $fileNameToStore;
        }        
        $userupdate->save();
        return redirect('/setting');
    }
    public function changeemail(Request $request){

        if($request->emailaddress == null){
            flash('Email is required')->error();
            return redirect('/setting');
        }
        $userupdate = User::where('id',auth()->user()->id)->first();
        $userupdate->email = $request->emailaddress;
        $userupdate->save();
        flash('Successfully changed your email')->success();
        return redirect('/setting');
    }
    public function changepassword(Request $request){
        if($request->currentpassword == null){
            flash('Your current password is null')->error();
            return redirect('/setting');
        }
        if($request->newpassword == null){
            flash('Your new password is null')->error();
            return redirect('/setting');
        }
        $currentpassword = Hash::make($request->currentpassword);
        $newpassword = Hash::make($request->newpassword);
        $dbpassword= auth()->user()->password;
        if(Hash::check($request->currentpassword,$dbpassword)){
            $userupdate = User::where('id',auth()->user()->id)->first();
            $userupdate->password = $newpassword;
            $userupdate->save();
            flash('Successfully changed your password')->success();
            return redirect('/setting');
        }else{
            flash('Your old password is incorrect')->error();
            return redirect('/setting');
        }
        
    }

    /** changepassword
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
