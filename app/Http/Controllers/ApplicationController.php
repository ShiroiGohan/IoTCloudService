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
    $apps = Application::where('owner', Auth::user());
    return view('application/index', ['applications' => $apps]);
  }

  public function new() {
    return view('application/new');
  }

  public function create(Request $request) {
    $app = new Application($request -> all());
    if ($app -> save()) {
      return redirect() -> route('application_show', ['id' => $app -> id()]);
    }
  }

  public function view($id) {
    $app = Application::where(['owner' => Auth::user(), 'id' => $id]) -> first();
    if ($app) {
      return view('application/view', ['application' => $app]);
    }
    else return response() -> view('static/not_found', [], 404);
  }
}
