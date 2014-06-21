<?php

class AccountController extends \BaseController {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    $accounts = User::all();
    $view = View::make('account.list')
      ->with('accounts', $accounts);
    return $view;
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    $view = View::make('account.create');
    return $view;
  }


  /**:
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    $rules = array(
      'email' => 'required|email',
      'password' => 'required|alphaNum|min:3',
      'name' => 'required',
      'username' => 'required'
    );

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {
      return Redirect::to('account/create')
        ->withErrors($validator)
        ->withInput(Input::except('password'));
    }
    else {
      $account = new User;
      $account->email = Input::get('email');
      $account->password = Hash::make(Input::get('password'));
      $account->name = Input::get('name');
      $account->username = Input::get('username');
      $account->save();

      Session::flash('message', 'Created success');
      return Redirect::to('account');
    }
  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    $account = User::find($id);
    $view = View::make('account.show')
      ->with('account', $account);
    return $view;
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    $account = User::find($id);

    $view = View::make('account.edit')
      ->with('account', $account);
    return $view;
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    $rules = array(
      'email' => 'required|email',
      'username' => 'required',
      'name' => 'required'
    );

    $validator =  Validator::make(Input::all(), $rules);

    if($validator->fails()) {
      return Redirect::to('account/' . $id . '/edit')
        ->withErrors($validator)
        ->withInput(Input::all());
    }
    else {
      $account = User::find($id);
      $account->email = Input::get('email');
      $account->username = Input::get('username');
      $account->name = Input::get('name');
      $account->save();

      Session::flash('message', '修改成功');
      return Redirect::to('account');
    }
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    $account = User::find($id);
    $account->delete();

    Session::flash('message', '刪除成功');
    return Redirect::to('account');
  }


}
