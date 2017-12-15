<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Application;
use App\ApplicationData;
use Illuminate\Support\Facades\Auth;


class ApplicationDataController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function index($app_id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $app_id]) -> first();
    if ($app) {
      return view('application_data/index', ['application' => $app, 'application_data' => $app -> application_data]);
    }
    return response() -> view('static/not_found', [], 404);
  }

  public function view($app_id, $id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $app_id]) -> first();
    if ($app) {
      $app_data = ApplicationData::where(['application_id' => $app -> id, 'id' => $id]) -> first();
      if ($app_data) {
        return view('application_data/view', ['application' => $app, 'application_data' => $app_data]);
      }
    }
    return response() -> view('static/not_found', [], 404);
  }

  public function new($app_id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $app_id]) -> first();
    if ($app) {
      return view('application_data/new');
    }
    return response() -> view('static/not_found', [], 404);
  }

  public function create(Request $request, $app_id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $app_id]) -> first();
    if ($app) {
      $app_data = new ApplicationData($request -> all());
      $app_data -> application_id = $app -> id;
      if ($app_data -> save()) {
        return redirect() -> route('application_data_view', ['app_id' => $app -> id, 'id' => $app_data -> id]);
      }
    }
    return response() -> view('static/not_found', [], 404);
  }

  public function edit($app_id, $id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $app_id]) -> first();
    if ($app) {
      $app_data = ApplicationData::where(['application_id' => $app -> id, 'id' => $id]) -> first();
      if ($app_data) {
        return view('application_data/edit', ['application' => $app, 'application_data' => $app_data]);
      }
    }
    return response() -> view('static/not_found', [], 404);
  }

  public function update(Request $request, $app_id, $id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $app_id]) -> first();
    if ($app) {
      $app_data = ApplicationData::where(['application_id' => $app -> id, 'id' => $id]) -> first();
      if ($app_data) {
        if ($app_data -> update($request -> all())) {
          return redirect() -> route('application_data_view', ['app_id' => $app -> id, 'id' => $app_data -> id]);
        }
        else return response() -> view('static/internal_error', [], 500);
      }
    }
    return response() -> view('static/not_found', [], 404);
  }

  public function delete($app_id, $id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $app_id]) -> first();
    if ($app) {
      $app_data = ApplicationData::where(['application_id' => $app -> id, 'id' => $id]) -> first();
      if ($app_data) {
        return view('application_data/delete', ['application' => $app, 'application_data' => $app_data]);
      }
    }
    return response() -> view('static/not_found', [], 404);
  }

  public function destroy($app_id, $id) {
    $app = Application::where(['owner_id' => Auth::user() -> id, 'id' => $app_id]) -> first();
    if ($app) {
      $app_data = ApplicationData::where(['application_id' => $app -> id, 'id' => $id]) -> first();
      if ($app_data) {
        if ($app_data -> delete()) {
          return redirect() -> route('application_data_index', ['application' => $app]);
        }
        else return response() -> view('static/internal_error', [], 500);
      }
    }
    return response() -> view('static/not_found', [], 404);
  }
}
