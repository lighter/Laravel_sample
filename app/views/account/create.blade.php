@extends('layouts.base')

@section('content')
  <h1>Create Account</h1>
  <div class="row">
    <div class="col-md-6 col-md-offset-3" style="text-align: left;">

      {{ HTML::ul($errors->all()) }}

      {{ Form::open(['url' => 'account']) }}
      <div class="form-group">
        {{ Form::label('name','Name') }}
        {{ Form::text('name', Input::old('name'), ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('username','Username') }}
        {{ Form::text('username', Input::old('username'), ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('email','Email') }}
        {{ Form::text('email', Input::old('email'), ['class' => 'form-control']) }}
      </div>

      <div class="form-group">
        {{ Form::label('password','Password') }}
        {{ Form::password('password', ['class' => 'form-control']) }}
      </div>

      {{ Form::submit('Create Account', ['class' => 'btn btn-primary']) }}

      {{ Form::close() }}
    </div>
  </div>
@stop