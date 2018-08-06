<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;


class ProfileController extends Controller
{
    public function index($slug)
    {
        return view('profile.index');
    }

    public function changeAvatar()
    {
        return view('profile.changeavatar');
    }

    public function updateAvatar(Request $request)
    {
//        dd($request->all());
        $file = $request->file('avatar');
        $filename = $file->getClientOriginalName();
        $path = 'avatar/';
        $file->move($path, $filename);
        $userid = Auth::user()->id;
        User::where('id', $userid)->update(['avatar' => $filename]);
        return redirect()->back();
    }
}
