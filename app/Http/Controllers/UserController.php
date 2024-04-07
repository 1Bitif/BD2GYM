<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = User::paginate(4);
        return view("dashboard.user", compact("users"));
    }
    
    public function destroy(User $user){
        $user->delete();
        return redirect()->route("dashboard.user");
    }
}
