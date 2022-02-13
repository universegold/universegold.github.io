<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Middleware\Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function showUser()

    {
        $data=User::all();
        return view ('listUser',['users'=>$data]);
    }


    
    public function deleteUser($id)
    
    {
        User::where('id',$id)->delete();
        return redirect('listUser');
    }

    public function editUser($id)
    
    {
        $user = User::find($id);
      
        return view('modif-user',compact('user'));
    }

    public function editUserPass($id)
    
    {
        $user = User::find($id);
      
        return view('modif-pass',compact('user'));
    }
    
    
    public function updateUser(Request $request)
    
    { 
        
        $user = User::find($request->id);
        if($user->email!=$request->email)
        {
        $users=User::all();
        foreach($users as $data)
        { 
            if($request->email==$data->email)
            {
                $user->name=$request->name;
                return view('email-invalide',compact('user'));
            }
        }
        }
       
      
       $user->name = $request->name;
     
       $user->email = $request->email;
       
       $user->save();

      

        return redirect('home');
    }


    public function updateUserPass(Request $request)
    
    {
     
        $user = User::find($request->id);
      
      
      
      
       if (! isset($request->current_password) || ! Hash::check($request->current_password, $user->password)) {
           
      
           return view('password-failed',compact('user'));
        }

        if (strlen($request->new_password)<8 ) {
           
      
            return view('password-invalide',compact('user'));
         }
        
        if ($request->new_password != $request->confirm_password) {
           
      
            return view('password-confirmed',compact('user'));
         }

      
        $user ->password = Hash::make($request->new_password);
        $user->save();
       

 
       return view('home',compact('user'));

    }

 

}

