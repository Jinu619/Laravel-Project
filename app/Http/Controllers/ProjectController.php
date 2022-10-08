<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $user = auth()->user()->id;
        
        
        $projects = Project::where('user_id',$user)->get();
        return view('projects',['projects'=>$projects]);
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
        $user = auth()->user()->id;

        //if has file
        if($request->hasFile('file')){
            $filenameWithExt = $request->file('file')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('file')->getClientOriginalExtension();
            $fileNameToStore=date("d_m_y_H_i_s_").'_'.$filename.'.'.$extension;
            // $path = $request->file('asset_file')->storeAs('public/uploads', $fileNameToStore);
            $request->file('file')->move(public_path('images'), $fileNameToStore);
            // dd($fileNameToStore);
        }


        if($request->p_id == null){
            $prj = new Project;
            $prj->project_name = $request->project_name;
            $prj->user_id = $user;
            $prj->progress = $request->progress;
            $prj->status = $request->status;
            if(isset($fileNameToStore)){
                $prj->upload = $fileNameToStore;
            }
            $prj->save();
            flash('Project Created Successfully')->success();
            return redirect('/projects');
        }
        if($request->p_id != null){
            $prj = Project::where('id',$request->p_id)->first();
            $prj->project_name = $request->project_name;
            $prj->user_id = $user;
            $prj->progress = $request->progress;
            $prj->status = $request->status;
            if(isset($fileNameToStore)){
                $prj->upload = $fileNameToStore;
            }
            
            $prj->save();
            flash('Project Updated Successfully')->success();
            return redirect('/projects');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Project::where('id',$id)->first();
        return $data;
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
