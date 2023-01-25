<?php

namespace App\Http\Controllers;

use App\WorkActivity;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
class WorkActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = WorkActivity::all();
//         $data = WorkActivity::latest();
// $pagination  = new Paginator($data, 5);
    return view('index', compact('data'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
        'user_id'          =>  'required'
        ]);

      $workactivity = new WorkActivity;
      $workactivity->user_id = $request->user_id;
      $workactivity->schedule_started_at = $request->schedule_started_at;
      $workactivity->schedule_ended_at = $request->schedule_ended_at;
      $workactivity->started_at = $request->started_at;
      $workactivity->ended_at = $request->ended_at;
      $workactivity->note = $request->note;

      $workactivity->save();

      return redirect('/')->with('success', 'Acitivity Added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WorkActivity  $workActivity
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $workActivity = WorkActivity::find($id);

    //  dd($workActivity);
        return view('show', compact('workActivity'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WorkActivity  $workActivity
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workActivity = WorkActivity::find($id);
        return view('edit', compact('workActivity'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WorkActivity  $workActivity
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request)
    {
      $request->validate([
           'user_id'      =>  'required'
   ]);


    $workactivity = WorkActivity::find($id);

   $workactivity->schedule_started_at = $request->schedule_started_at;
   $workactivity->schedule_ended_at = $request->schedule_ended_at;
   $workactivity->started_at = $request->started_at;
   $workactivity->ended_at = $request->ended_at;
   $workactivity->note = $request->note ;


       $workactivity->save();

       return redirect('/')->with('success', 'Activity Data has been updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WorkActivity  $workActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

      WorkActivity::where('id',$id)->delete();

    return redirect('/')->with('success', 'Activity Data deleted successfully');

    }
}
