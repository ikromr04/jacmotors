<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
  public function index()
  {
    return view('pages.index');
  }

  public function models()
  {
    return view('pages.models');
  }

  public function service()
  {
    return view('pages.service');
  }

  public function admin()
  {
    return view('pages.admin');
  }
}
