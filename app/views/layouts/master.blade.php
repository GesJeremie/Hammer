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


  <title>Hammer</title>

</head>
<body>

  <div class="container">
      @yield('content')
  </div>
</body>
</html>
