<?php

namespace App\Http\Controllers;
use App\BsUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BsUsersController extends Controller
{
    public function index()
    {

        $present = BsUsers::all();
        //$present = User::where([['role','!=',0],['role','!=',1]])->get();

        return view('users.index')->with('user',$present);


    }

    public function add(Request $request)
    {
      /*  dd($request);*/
        $present = BsUsers::where('email','=',$request->email)->first();

        if(!empty($present)){
        	$response = array(
                    'status' => 'Error',
                    'message' => 'User is exist!',
                    'error' => '1',
                    
                );
            
        }
else{
	

        $user = new BsUsers;
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=bcrypt($request->password) ;
       
        $user->role_id=$request->role;
        if($user->save())
        {
        	 $response = array(
                    'status' => 'success',
                    'message' => 'New User Add  ',
                     'error' => '0',
                    
                );
           
        }
	}
        return \Response::json($response);
    }

    public function edit_view($id)
    {

        $present = BsUsers::find($id);
        return view('users.edit_view')->with('user',$present);

    }

    public function edit(Request $request)
    {

        $user = BsUsers::find($request->id);

        $user->name=$request->name;
        $user->email=$request->email;
        $user->gender=$request->gender;
        $user->role=$request->role;

        if($user->save())
        {
            session()->flash('success','User is updated!');
            return redirect()->route('admin_users_list');
        }


    }

    public function edit_staus($id,$status){
        $user = BsUsers::find($id);

        $user->status = $status;

        if($user->save()){
            session()->flash('success','User is updated!');
            return redirect()->route('admin_users_list');
        }
    }
public function logout(){
    auth()->logout();

    session()->flash('message', 'Some goodbye message');

    return redirect('/login');
  }
    public function login(Request $request)
    {
         if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
         {
             session()->flash('success','Wel come!');
             return redirect()->route('invoice_create');
         }
         else{
             session()->flash('danger','Innceorect user name and Password');
             return redirect()->route('login');
         }

    }
}
