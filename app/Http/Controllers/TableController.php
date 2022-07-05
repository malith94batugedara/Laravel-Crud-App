<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TableController extends Controller
{

    public function index(){
        return view('table');
    }
    public function store(Request $request) {
    
        
   
             //dd($request->all());
             $task=new Task;
             $task->name=$request->name;
             $task->age=$request->age;
             $task->city=$request->city;

             $task->save();
             $data=Task::all();

             return view('table')->with('tasks',$data);
             //return redirect()->back();
    }
    public function delete($id) {
    
        
   
        //dd($request->all());
        $task=Task::find($id);
        $task->delete();
        return redirect()->back();
       

         
}
public function update($id){
    $task=Task::find($id);
      return view('updatetask')->with('taskdata',$task);
     

}
public function newupdate(Request $request){
  $id=$request->id;
  $name1=$request->name1;
  $age1=$request->age1;
  $city1=$request->city1;

     $data=Task::find($id);
     $data->name=$name1;
     $data->age=$age1;
     $data->city=$city1;

     $data->save();
     $data=Task::all();

     return view('table')->with('tasks',$data);

}

}
