<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Car;
use Illuminate\Http\Request;
use stdClass;

class PageController extends Controller
{
  public function index()
  {
    $data = new stdClass();

    $data->banners = Banner::get();
    $data->testDrives = Car::where('test_drive', true)->get();

    return view('pages.index', compact('data'));
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
