<?php
namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User;
use App\Role;
use View;

class UserController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){

        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        $users = User::with('hospital')->with('roles')->get();

        return View::make('user.index', compact('users'));
    }

    public function create(Request $request){

        return View::make('user.create');
    }

    public function store(Request $request){

        // validate input by user
        $this->validate($request, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'hospital_id' => 'required|exists:hospitals,id'
            ]);

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        
        // validate if the selected hospital is already exist
        if (User::where('hospital_id', '=', $input['hospital_id'])->exists()) {
            
            $messages = 'User for selected hospital already exist';

            \Session::flash('error_message', $messages);

            return redirect('user/create');
        
        } else {
            
            $user = User::create($input);

            $role = Role::where('id', $request->roles)->first();

            $user->attachRole($role);

            return redirect('user')->with('success','User created successfully');

        }
    }

    public function delete($id){

        User::find($id)->delete();

        return redirect('user')->with('success','User deleted successfully');

    }
}
