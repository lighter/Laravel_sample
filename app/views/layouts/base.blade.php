<!DOCTYPE html>
<html>
<head>
  <title>Show</title>
  {{ HTML::script('public/js/jquery-1.11.0.min.js') }}
  {{ HTML::style('public/bootstrap-3.1.1-dist/css/bootstrap.min.css') }}
  {{ HTML::style('public/bootstrap-3.1.1-dist/css/bootstrap-theme.min.css') }}
  <style>
    body {
      padding-top: 50px;
    }
    .starter-template {
      padding: 40px 15px;
      text-align: center;
    }
  </style>
</head>
<body>
  <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Show</a>
      </div>
      <div class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
          <li><a href="{{ URL::to('logout') }}">Logout</a></li>
        </ul>
      </div><!--/.nav-collapse -->

    </div>
  </div>

  <div class="container">
    <div class="starter-template" style="position: relative;">
      @yield('content')
    </div>
  </div>

</body>
</html>