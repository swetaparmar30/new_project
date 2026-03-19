<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Category;
use App\Models\User;
use App\Mail\NotifyMail;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon; 
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Mail;


class RegisterController extends Controller
{
    // public function index() {
    //     $user = User::where('role','!=','admin')->get();
    //     return view('user.add',compact('user'));
    // }
    // public function generate(Request $request)
    // {
    //     $password = Str::random(12);
    //     return response()->json(['password' => $password]);
    // }

    public function save(Request $request) {
        // dd($request->all());
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'phone' => 'nullable|max:255',
            'website' => 'nullable|url|max:255',
            'role' => 'required|string|max:255',
            'password' => 'required|min:6',
        ];
        $validatedData = $request->validate($rules);

        $user = User::create($validatedData);
        return redirect()->intended('add')
                ->withSuccess('User Added Successfully');
    }

    // public function delete($id) {
    //     if ($id !== "" && $id !== null) {
    //        User::where('id', $id)->delete();
    //        return redirect()->intended('users')
    //        ->withSuccess('User Deleted');
    //     }
    // }

    // public function edit(Request $request) {
    //     $id = $request->id;
    //     if ($id) {
    //         $data = User::where('id', $id)->first();
    //         return json_encode($data);
    //     }
    // }


}
