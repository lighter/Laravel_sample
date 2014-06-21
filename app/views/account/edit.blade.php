@extends('layouts.base')

@section('content')
  <h1>Edit Account</h1>
  {{ HTML::ul($errors->all()) }}
  <!-- 1 -->
  {{ Form::model($account, array('route' => array('account.update', $account->id), 'method' => 'PUT', 'class' => 'form-horizontal', 'role' => 'form')) }}
    <div class="form-group">
      {{ Form::label('email', 'Email', ['class' => 'col-sm-2 control-label']) }}
      <div class="col-sm-10">
        {{ Form::text('email', $account->email, ['class' => 'form-control']) }}
      </div>
    </div>
     <div class="form-group">
      {{ Form::label('username', 'Username', ['class' => 'col-sm-2 control-label']) }}
      <div class="col-sm-10">
        {{ Form::text('username', $account->username, ['class' => 'form-control']) }}
      </div>
    </div>
     <div class="form-group">
      {{ Form::label('name', 'Name', ['class' => 'col-sm-2 control-label']) }}
      <div class="col-sm-10">
        {{ Form::text('name', $account->name, ['class' => 'form-control']) }}
      </div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        {{ Form::submit('Edit the Account!', array('class' => 'btn btn-primary')) }}
      </div>
    </div>

  {{ Form::close() }}
@stop