<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">

  <!-- Font awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="{{ url('stylesheets/vendor.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ url('stylesheets/app.css') }}">

  <script src="{{ url('javascripts/vendor.js') }}"></script>

  <script src="{{ url('javascripts/app.js') }}"></script>

  <!-- Will run Gotham -->
  <script>require('initialize');</script>


  <title>Hammer Documentation</title>

</head>
<body>

  <div class="container-fluid">
    <div class="example__spacer --md"></div>
    <div class="grid-2">
      <div class="sidebar">
        <ul>
          <li><a href="#">Sass Structure</a></li>
          <li><a href="{{ url('documentation/grid') }}">Grid System</a></li>
          <li><a href="{{ url('documentation/typography') }}">Typography</a></li>
          <li><a href="{{ url('documentation/sidebar') }}">Sidebar</a></li>
          <li><a href="{{ url('documentation/alert') }}">Alerts</a></li>
        </ul>
      </div>
    </div>
    <div class="grid-9 push-1">
      @yield('content')
      <div class="example__spacer --md"></div>

    </div>
  </div>
</body>
</html>
