<?php

class HomeController extends BaseController {

  /*
  |--------------------------------------------------------------------------
  | Default Home Controller
  |--------------------------------------------------------------------------
  |
  | You may wish to use controllers instead of, or in addition to, Closure
  | based routes. That's great! Here is an example controller method to
  | get you started. To route to this controller, just add the route:
  |
  | Route::get('/', 'HomeController@showWelcome');
  |
  */

  public function showWelcome()
  {
    return View::make('hello');
  }

  // 登入
  public function doLogin()
  {
    // 驗證規則
    $rules = array(
      'email'    => 'required|email', // 必填欄位，email格式
      'password' => 'required|alphaNum|min:3' // 必填欄位，必須是字母或數字，不得小於3位
    );

    // 驗證
    $validator = Validator::make(Input::all(), $rules);

    // 規則驗證失敗
    if ($validator->fails()) {

      // 回到首頁，並回傳錯誤訊息，與所有輸入的欄位，除了密碼
      return Redirect::to('/')
        ->withErrors($validator)
        ->withInput(Input::except('password'));
    }
    else {
      $userdata = array(
          'email'    => Input::get('email'),
          'password' => Input::get('password')
        );

      // 與資料庫驗證
      if (Auth::attempt($userdata)) {

        // 驗證成功，並增加一個session key value值
        Session::put('login_success', 1);

        // 導向show/index.blade.php
        return Redirect::to('/show');
      }
      else {
        return Redirect::to('/');
      }
    }
  }

  public function doLogout()
  {
    Auth::logout();

    // 刪除登入成功的key 值
    Session::forget('login_seuccess');
    return Redirect::to('/');
  }

  public function show()
  {
    // 取得所有session的資料
    $all_session_data = Session::all();
    $data['all_session_data'] = $all_session_data;

    if ( Session::has('login_success') && Auth::check() ) {
      $data['login_status'] = 'success';
    }
    else {
      $data['login_status'] = 'failure';
    }

    // 這邊可以注意$data的login_status這個key值
    // 跟 show/index.blade.php 使用的變數做對應
    $view = View::make('show.index', $data);
    return $view;
  }

}
