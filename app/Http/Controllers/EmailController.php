<?php

namespace App\Http\Controllers;

use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMe;

class EmailController extends Controller
{

  public function store() 
  {
    request()->validate(['email' => 'required|email']);

    // Mail::raw('Here I am!', function ($message) {
    //   $message->to(request('email'))
    //     ->subject('Hello again');
    // });

    Mail::to(request('email'))
      ->send(new ContactMe());

    return redirect('/email')
      ->with('message', 'Email sent!'); // A flash message, good for only one request
  }

}
