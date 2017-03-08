<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width-device-width, initial-scale=1.0">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <title>Appron</title>
  <meta name="description" content="Cara memasak masa kini">
  <meta name="author" description="Just Team Appron">
  <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

  <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/css/style.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets')}}/css/bootstrap.css">

  <link rel="stylesheet" href="{{ asset('assets' )}}/css/demo.css">
  <link href="http://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{ asset('assets' )}}/css/adaptive-menu.default.css">
  <script src="https://code.jquery.com/jquery-3.0.0.slim.min.js"></script>
    <script src="{{ asset('assets' )}}/js/jquery.adaptive-menu.js"></script>
    <script>
    $(function () {
      $('.wrapmenus').adaptiveMenu();
    });
  </script>

  <!-- Bootstrap -->
  <script src="{{ asset('assets') }}/js/bootstrap.min.js"></script>
  <link href="{{ asset('assets') }}/css/bootstrap.min.css" rel="stylesheet">


</head>
<body>
  <div class="logo">
    <img src="{{ asset('assets') }}/img/logo.png" width="60px">
  </div>
  <header>
      <div class="layout-centers">
        <div class="wrapmenus">
          <nav>
            <ul class="navs menus topmenu">
              <li><a href="#">Home</a></li>
              <li><a href="#">Category</a></li>
              <li><a href="#">Browse</a></li>
              <li><a href="#">About Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

  <div class="content-wrapper">
      @yield('content')
  </div>
