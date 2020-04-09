<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RetoController extends Controller
{
  public function abrirreto()
  {
      return view('reto');
  }//
}
