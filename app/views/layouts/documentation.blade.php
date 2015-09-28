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
    <div class="example__logo">
      <h3>Hammer</h3>
    </div>

    <div class="grid-2">
      <div class="sidebar">
        <ul>
          <li class="@if ($page == 'grid') --active @endif"><a href="{{ url('documentation/grid') }}">Grid System</a></li>
          <li class="@if ($page == 'typography') --active @endif"><a href="{{ url('documentation/typography') }}">Typography</a></li>
          <li class="@if ($page == 'sidebar') --active @endif"><a href="{{ url('documentation/sidebar') }}">Sidebar</a></li>
          <li class="@if ($page == 'alert') --active @endif"><a href="{{ url('documentation/alert') }}">Alert</a></li>
          <li class="@if ($page == 'button') --active @endif"><a href="{{ url('documentation/button') }}">Button</a></li>
          <li class="@if ($page == 'form') --active @endif"><a href="{{ url('documentation/form') }}">Form</a></li>
          <li class="@if ($page == 'hero') --active @endif"><a href="{{ url('documentation/hero') }}">Hero</a></li>
          <li class="@if ($page == 'navbar') --active @endif"><a href="{{ url('documentation/navbar') }}">Navbar</a></li>
          <li class="@if ($page == 'tooltip') --active @endif"><a href="{{ url('documentation/tooltip') }}">Tooltip</a></li>
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
