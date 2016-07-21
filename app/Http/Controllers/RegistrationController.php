<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class RegistrationController extends Controller
{
  public function store(Request $request)
  {
    $this->validate($request, [
      'first-name' => 'required|alpha',
      'last-name' => 'required|alpha',
      'email' => 'required|email'
    ]);

    return view('success', ['success' => 1]);
  }
}
