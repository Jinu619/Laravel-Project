<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\NoteCategory;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= NoteCategory::all();
        $notes = Note::select('notes.*','note_categories.category')->leftjoin('note_categories','note_categories.id','=','notes.category_id')->get();
        return view('notes',['notes'=> $notes,'categories'=> $categories]);
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
            $request->file('file')->move(public_path('files'), $fileNameToStore);
            // dd($fileNameToStore);
        }

        $note = new Note;
        $note->category_id = $request->category_id;
        $note->title = $request->title;
        $note->details = $request->details;

        if(isset($fileNameToStore)){
            $note->upload = $fileNameToStore;
        }
        $note->save();
        return redirect('/notes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //delete
        $notes= Note::find($id);
        $notes->delete();
        
        flash('Note deleted sucessfully')->success();
        return redirect('/notes');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd("hi");
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
        dd("hi");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        dd($id);
    }
}
