<?php

namespace App\Http\Controllers;
use App\Models\usertable;
use Illuminate\Http\Request;
//add this
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function Displaydata(){

         $data = usertable::all();
       
        return view('home',['Userdatas' => $data]);

    }
    

    public function Create(Request $request){


        // return $request->input();

        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email|unique:usertables'
        ]);


        $query = DB::table('usertables')->insert([
            'fullname'=>$request->input('fullname'),
            'email'=>$request->input('email')
        ]);

         return redirect('home');
    }  


    public function Delete($id){

            $data=usertable::find($id);
            $data->Delete();
            return redirect('home');
   
       }
    
    public function DisplayEdit($id){

          $data=usertable::find($id);
        return view('updateform',['Updatedata' => $data]);

    }


    public function Update(Request $request){

        $request->validate([
            'fullname' => 'required',
            'email' => 'required|email'
        ]);
        
        $update = DB::table('usertables')
        ->where('id', $request->input('id'))
        ->update([
            'fullname' => $request->input('fullname'),
            'email' =>  $request->input('email'),
        ]);
        return redirect('home');
    }


    public function Search(Request $request){
         
        // $search = $_GET['search'];
        $search = $request->get('search');
        $result = usertable::where('fullname','LIKE', '%'.$search.'%')
        ->get();
       
        return view('search',compact('result'));
        
    }

}
