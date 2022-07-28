<?php
namespace App\Http\Controllers\Api;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Auth\Events\Registered;

class UserController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('role:user|superadministrator');
    // }
    public function index()
    {
        return view('user.index');
    }
    public function show(){
    return User::latest()->paginate(10);
    }
}