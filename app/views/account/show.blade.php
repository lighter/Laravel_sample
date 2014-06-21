@extends('layouts.base')

@section('content')
  <h1>Show Account</h1>
  {{ Form::open(['class' => 'form-horizontal', 'role' => 'form']) }}
    <div class="form-group">
      <label class="col-sm-2 control-label" for="inputEmail3">Email</label>
      <div class="col-sm-10">
        <input id="inputEmail3" class="form-control" type="email" value="{{ $account->email }}" disabled>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="inputUsername">Username</label>
      <div class="col-sm-10">
        <input id="inputUsername" class="form-control" type="text" value="{{ $account->username }}" disabled>
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="inputname">name</label>
      <div class="col-sm-10">
        <input id="inputname" class="form-control" type="text" value="{{ $account->name }}" disabled>
      </div>
    </div>
  {{ Form::close() }}
@stop