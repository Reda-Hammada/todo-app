<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Taskmodel;



class Task extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {   

        $this->middleware('auth');

     }
    public function index()
    {
        //


        $user_id = Auth::id();
        $task = new Taskmodel();
        $tasks  = $task->All()->where('user_id', $user_id);
        $count = count($tasks);
        return view('task.dashboard', ['tasks' => $tasks , 'count' => $count]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
     
        $taskModel = new Taskmodel();
        
        $user_id = Auth::id();

        $taskModel->task_name = $request->task;
        $taskModel->user_id = $user_id;
        $taskModel->save();

        return redirect()->route('task.index');

    }   



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     public function show($id){
        
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
        $taskModel =  Taskmodel::findOrFail($id);

        $taskModel->delete();
        return redirect()->route('task.index');
    }
}
