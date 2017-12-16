<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Application;
use App\ApplicationKey;
use Illuminate\Support\Facades\Auth;

class ApplicationKeyController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function index($app_id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $app_id]) -> first();
    if($app) {
      return view('application_key/index', ['application' => $app, 'application_keys' => $app -> application_keys]);
    }
    else return response() -> view('static/not_found', [], 404);
  }

  public function view($app_id, $id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $app_id]) -> first();
    if ($app) {
      $app_key = ApplicationKey::where(['application_id' => $app -> id, 'id' => $id]) -> first();
      if ($app_key) {
        return view('application_key/view', ['application' => $app, 'application_key' => $app_key]);
      }
    }
    return response() -> view('static/not_found', [], 404);
  }

  public function new($app_id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $app_id]) -> first();
    if($app) {
      return view('application_key/new', ['application' => $app]);
    }
    else return response() -> view('static/not_found', [], 404);
  }

  public function create(Request $request, $app_id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $app_id]) -> first();
    if($app) {
      $app_key = new ApplicationKey($request -> all());
      $app_key -> application_id = $app -> id;
      $app_key -> key = bin2hex(openssl_random_pseudo_bytes(16));

      if ($app_key -> save()) {
        return redirect() -> route('application_key_view', ['app_id' => $app -> id, 'id' => $app_key -> id]);
      }
      else return response() -> view('static/internal_error', [], 500);
    }
    else return response() -> view('static/not_found', [], 404);
  }

  public function edit($app_id, $id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $app_id]) -> first();
    if ($app) {
      $app_key = ApplicationKey::where(['application_id' => $app -> id, 'id' => $id]) -> first();
      if ($app_key) {
        return view('application_key/edit', ['application' => $app, 'application_key' => $app_key]);
      }
    }
    return response() -> view('static/not_found', [], 404);
  }

  public function update(Request $request, $app_id, $id) {

  }
}
