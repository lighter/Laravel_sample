<!DOCTYPE html>
<html>
  <head>
    <title>Look at me Login</title>
    {{ HTML::script('public/js/jquery-1.11.0.min.js') }}
    {{ HTML::style('public/bootstrap-3.1.1-dist/css/bootstrap.min.css') }}
    {{ HTML::style('public/bootstrap-3.1.1-dist/css/bootstrap-theme.min.css') }}
  </head>
  <body>

    <div class="row">
    <div class="col-md-2 col-md-offset-5">
    {{ Form::open(array('url' => 'login', 'class' => 'clearfix', 'role' => 'form' )) }}

      <h1>Login</h1>

      <p>
        {{ $errors->first('email') }}
        {{ $errors->first('password') }}
      </p>

      <div class="form-group">
        <label for="exampleInputEmail"> {{ Form::label('email', 'Email Address') }} </label>
        {{ Form::text('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com', 'class' => 'form-control', 'id' => 'exampleInputEamil')) }}
      </div>

      <div class="form-group">
        <label for="exampleInputPasword"> {{ Form::label('password', 'Password') }} </label>
        {{ Form::password('password', ['class' => 'form-control', 'id' => 'exampleInputPassword'])  }}
      </div>

      <p>
        {{ Form::submit('Submit!', ['class' => 'btn btn-default'])  }}
      </p>

    {{ Form::close() }}

    <a href="{{ URL::to('logout') }}">Logout</a>
    </div></div>
  </body>
</html>