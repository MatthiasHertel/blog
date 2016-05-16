<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

  public function getIndex() {
    # what a controller do ...
    # process variable data or params
    # talk to the model
    # recieve from the model
    # compile or process data from the model if needed
    # pass that data to the correct view
    return view('pages.welcome');
  }

  public function getAbout() {
    $first = 'Charlie';
    $last = 'Sheen';

    $full = $first . " " . $last;
    $email = 'charlie@sheen.com';

    $data = [];
    $data['email'] = $email;
    $data['full'] = $full;

    // return view('pages.about')->with("fullname", $full);
    // return view('pages.about')->withFullname($full)->withEmail($email);
    return view('pages.about')->withData($data);
  }

  public function getContact() {
    return view('pages.contact');
  }


}
