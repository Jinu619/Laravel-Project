<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //take now date and time and logged user
        $today= now();
        $user = auth()->user()->id;

        //change status in expired task
        $exp = Task::where('status',1)->where('todate','<',$today)->get();
        $expcount = $exp->count();
        // dd($expcount);
        if($expcount > 0){
            foreach($exp as $tsk){
                $exptk = Task::where('id',$tsk->id)->first();
                $exptk->status = 2;
                $exptk->save();
            }
        }
        


        //for front end
        $pendtask = Task::where('status', '=', 1)->where('user_id',$user)->get();
        $pendingtask = $pendtask->count();
        
        
        $tasks = Task::select('tasks.*','users.fullname')
                        ->leftjoin('users','users.id','=','tasks.user_id')
                        ->where('todate','>=',$today)
                        ->where('tasks.deleted_at',null)
                        ->where('tasks.status',1)
                        ->where('tasks.user_id',$user)
                        ->orderBy('tasks.todate','ASC')->get();
        return view('tasks',['tasks'=>$tasks,'pendingtask'=>$pendingtask]);
    }

    public function viewall(){
        $user = auth()->user()->id;
        $pendingtasks=Task::where('status',1)->where('user_id',$user)->where('deleted_at',null)->get();
        $expiredtasks=Task::where('status',2)->where('user_id',$user)->where('deleted_at',null)->get();
        $completedtasks=Task::where('status',3)->where('user_id',$user)->where('deleted_at',null)->get();
        return view('alltasks',['pendingtasks'=>$pendingtasks,'expiredtasks'=>$expiredtasks,'completedtasks'=>$completedtasks]);
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
        $newtask =  new Task;
        $newtask->user_id=auth()->user()->id;
        $newtask->fromdate=$request->fromdate;
        $newtask->todate=$request->due_date;
        $newtask->taskname=$request->title;
        $newtask->details=$request->details;
        $newtask->save();
        flash('Sucessfully created new task')->success();
        return redirect('/tasks');
    }
    public function changestatus(Request $request){
        $chn = Task::where('id',$request->id)->first();
        if($request->newstatus == 'Completed'){
            $chn->status=3;
            $chn->save();
            $msg ="Sucessfully completed";
            return $msg;
        }
        else if($request->newstatus == 'Edit'){
            //
        }
        else if($request->newstatus == 'Delete'){
            $delete_task = Task::find($request->id);
            $delete_task->delete();
            $msg = "Deleted";
            return  $msg;
        }
        else if($request->newstatus == 'Rejected'){
          //  
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
