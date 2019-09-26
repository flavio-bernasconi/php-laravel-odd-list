<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class appController extends Controller
{
  public function getOddNum(){

    $oddNum = [];
    $evenNum = [];

    for ($i=10; $i <= 100 ; $i++) {

      if ($i % 2 != 0) {
        $oddNum[] = $i;
      }
      else {
        $evenNum[] = $i;
      }
    }

    return view('odd', compact('oddNum' , 'evenNum'));

  }
}
