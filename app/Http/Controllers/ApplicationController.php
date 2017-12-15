<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Application;
use Illuminate\Support\Facades\Auth;

class ApplicationController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function index() {
    $apps = Application::where('owner_id', Auth::user() -> id) -> get();
    return view('application/index', ['applications' => $apps]);
  }

  public function new() {
    return view('application/new');
  }

  public function create(Request $request) {
    $app = new Application($request -> all());
    $app -> owner_id = Auth::user() -> id;
    $eui_string = "000000000". bin2hex(openssl_random_pseudo_bytes(7));
    $app -> application_eui = $eui_string;
    if ($app -> save()) {
      return redirect() -> route('application_view', ['id' => $app -> id]);
    }
  }

  public function view($id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $id]) -> first();
    if ($app) {
      return view('application/view', ['application' => $app]);
    }
    else return response() -> view('static/not_found', [], 404);
  }

  public function edit($id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $id]) -> first();
    if ($app) {
      return view('application/edit', ['application' => $app]);
    }
    else return response() -> view('static/not_found', [], 404);
  }

  public function update(Request $request, $id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $id]) -> first();
    if ($app) {
      if ($app -> update($request -> all())) {
        return redirect() -> route('application_view', ['id' => $app -> id]);
      }
      else return response() -> view('static/internal_error', [], 500);
    }
    else return response() -> view('static/not_found', [], 404);
  }
}
