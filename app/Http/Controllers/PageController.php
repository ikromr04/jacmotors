<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Car;
use App\Models\Category;
use Illuminate\Http\Request;
use stdClass;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestDriveEmail;

class PageController extends Controller
{
  public function index()
  {
    $data = new stdClass();
    $data->banners = Banner::get();
    $data->testDrives = Car::where('test_drive', true)->get();
    $data->categories = Category::get();
    $data->models = Car::get();

    return view('pages.index', compact('data'));
  }

  public function models()
  {
    $data = new stdClass();
    $data->categories = Category::get();
    $data->models = Car::get();

    return view('pages.models', compact('data'));
  }

  public function modelsShow($name)
  {
    $data = new stdClass();
    $data->model = Car::where('name', $name)->first();

    return view('pages.models-show', compact('data'));
  }

  public function service()
  {
    return view('pages.service');
  }

  public function testDriveShow($name)
  {
    $data = new stdClass();
    $data->model = Car::where('name', $name)->first();
    $data->models = Car::where('test_drive', true)->get();

    return view('pages.test-drive-show', compact('data'));
  }

  public function testDrive()
  {
    $data = new stdClass();
    $data->model = Car::where('test_drive', true)->first();
    $data->models = Car::where('test_drive', true)->get();

    return view('pages.test-drive', compact('data'));
  }

  public function admin()
  {
    return view('pages.admin');
  }

  public function apply(Request $request)
  {
    $data = [
      'model' => $request->model,
      'name' => $request->name,
      'phone' => $request->phone,
      'email' => $request->email,
    ];

    Mail::to('ikromr04@gmail.com')->send(new TestDriveEmail($data));

    return 'success';
  }
}
