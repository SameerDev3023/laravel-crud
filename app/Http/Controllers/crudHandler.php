<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\formHandler; 

class crudHandler extends Controller
{
    public function index(){

        return view('layouts/home');
    }
    public function add_data(){
        $url = url('/add-data/insert');
        $title= 'Please Add Your Data';
        $data = compact('url','title');
        return view('layouts/add-data')->with($data);
    }
  
    public function insert_data(Request $request){
        $databaseColumn  = new formHandler;
        $databaseColumn->first_name = $request['first_name'];
        $databaseColumn->last_name = $request['last_name'];
        $databaseColumn->course_name = $request['course_name'];
        $databaseColumn->number = $request['number'];
        $databaseColumn->city = $request['city'];
        $databaseColumn->address = $request['address'];
        $databaseColumn->save();
        return redirect('/show-data');
    }
    public function show_data(){
            $usersData = formHandler::all();
            $data = compact('usersData');
        return view('layouts/show-data')->with($data);
    }
    public function delete_user($id){
    $deleteUser = formHandler::find($id);
        if($deleteUser!==""){
            $deleteUser->delete();
        }else{
            echo'not found';
        }
        return redirect('show-data');
     }

     public function edit_user($id){
        $userData = formHandler::find($id);
        $url = url('/update')."/".$id;
        $title ="Please Edit Your Data";
        $data= compact('url','title','userData');
       return view('layouts/add-data')->with($data);
     }
     public function  update_data($id,Request $request){
        $usersData = formHandler::find($id);
        $usersData->first_name = $request['first_name'];
        $usersData->last_name = $request['last_name'];
        $usersData->course_name = $request['course_name'];
        $usersData->number = $request['number'];
        $usersData->city = $request['city'];
        $usersData->address = $request['address'];
        $usersData->save();
        return redirect('show-data');
     }
}
