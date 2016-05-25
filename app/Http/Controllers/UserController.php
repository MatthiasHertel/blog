<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use Image;

class UserController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function profile() {

    return view('user.profile',array('user' => Auth::user()));
  }

  public function update_avatar(Request $request) {

    // handle fileupload with intervention image
    if($request->hasFile('avatar')){
      $avatar = $request->file('avatar');
      $filename = time() . '.' . $avatar->getClientOriginalExtension();
      Image::make($avatar)->widen(400)->crop(400, 400)->save(public_path('/uploads/avatars/' . $filename));
      $user = Auth::user();
      $user->avatar = $filename;
      $user->save();
    }

    return view('user.profile',array('user' => Auth::user()));
  }

}
