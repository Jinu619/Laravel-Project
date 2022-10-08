<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Project;
use App\Models\Task;
use App\Models\todos;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user()->id;

        //total task count
        $ttask = Task::where('deleted_at',null)->where('user_id',$user)->get();
        $totaltask = $ttask->count();

        //pending task
        $pendtask = Task::where('status', '=', 1)->where('deleted_at',null)->where('user_id',$user)->get();
        $pendingtasks = $pendtask->count();

        //task percentage
        $cmplt = Task::where('status', '=', 3)->where('deleted_at',null)->where('user_id',$user)->get();
        $cmplt = $cmplt->count();
        if($totaltask != 0){
            $per = $cmplt/$totaltask*100;
        }else{
            $per = 0; 
        }
        
        $percentage = number_format($per,2);


        //count of notes
        $notecount = Note::where('deleted_at',null)->get();
        $notecount=$notecount->count();

        //month tasks
        $thismonth = date('m');
        $dateObj   = DateTime::createFromFormat('!m', $thismonth);
        $monthName = $dateObj->format('F');

        $first_day_this_month = date('m-01-Y 00:00:00'); 
        $last_day_this_month  = date('m-t-Y 12:59:59');
        $mnthtask = Task::where('fromdate','>=',$first_day_this_month)->where('fromdate','>=',$last_day_this_month)->where('deleted_at',null)->where('user_id',$user)->get();
        $mnthtaskcmplt = Task::where('status','=',3)->where('fromdate','>=',$first_day_this_month)->where('fromdate','>=',$last_day_this_month)->where('deleted_at',null)->where('user_id',$user)->get();
        $mnthtaskpend = Task::where('status','=',1)->where('fromdate','>=',$first_day_this_month)->where('fromdate','>=',$last_day_this_month)->where('deleted_at',null)->where('user_id',$user)->get();
        $mnthtaskexp = Task::where('status','=',2)->where('fromdate','>=',$first_day_this_month)->where('fromdate','>=',$last_day_this_month)->where('deleted_at',null)->where('user_id',$user)->get();
        $mnthtask=$mnthtask->count();
        $mnthtaskpend=$mnthtaskpend->count();
        $mnthtaskexp=$mnthtaskexp->count();
        $mnthtaskcmplt=$mnthtaskcmplt->count();


        if($mnthtask != 0){
            $perc = $mnthtaskcmplt/$mnthtask*100;
        }else{
            $perc = 0; 
        }
        $perce = number_format($perc,2);

        $endDate = Carbon::now()->addDays(7);
        $startday = now();
        $seventhday=date('Y-m-d H:m:s',strtotime($endDate));
        $today=date('Y-m-d H:m:s',strtotime($startday));
        $lasttimetasks = Task::where('status','=',1)
                        ->where('todate','>=',$today)
                        ->where('todate','<=',$seventhday)
                        ->where('deleted_at',null)
                        ->where('user_id',$user)
                        ->orderBy('todate','ASC')
                        ->get();

        $from_day = date('Y-m-d 00:00:00');
        $to_day = date('Y-m-d 23:59:59');
        //new tasks 
        $newtasks= todos::where('deleted_at',null)->where('created_at','>=',$from_day)->where('created_at','<=',$to_day)->orderBy('created_at','DESC')->get();

        //projects
        $projects = Project::where('user_id',auth()->user()->id)->orderBy('id', 'DESC')->take(5)->get();

        return view('dashboard',[
            'pendingtasks'=>$pendingtasks,
            'totaltask'=>$totaltask,
            'percentage'=>$percentage,
            'notecount'=>$notecount,
            'monthName'=>$monthName,
            'mnthtask'=>$mnthtask,
            'perce'=>$perce,
            'perce'=>$perce,
            'mnthtaskcmplt'=>$mnthtaskcmplt,
            'mnthtaskpend'=>$mnthtaskpend,
            'mnthtaskexp'=>$mnthtaskexp,
            'lasttimetasks'=>$lasttimetasks,
            'newtasks'=>$newtasks,
            'projects'=>$projects,
        ]);
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
        //
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
