@section('content')
  <h1>Grid System</h1>
  <p>
    The Grid System is based on <a href="http://gridle.org/">Gridle</a>.
  </p>

  <h2>Example</h2>

  <div class="example__spacer"></div>

  <div class="grid-12 example__grid">
    .grid-12
  </div>

  <div class="example__spacer"></div>

  <div class="grid-12 parent">
    <div class="grid-6 example__grid">
      .grid-6
    </div>
    <div class="grid-6 example__grid">
      .grid-6
    </div>
  </div>

  <div class="example__spacer"></div>

  <div class="grid-12 parent">
    <div class="grid-3 example__grid">
      .grid-3
    </div>
    <div class="grid-2 example__grid">
      .grid-2
    </div>
    <div class="grid-1 example__grid">
      .grid-1
    </div>
    <div class="grid-1 example__grid">
      .grid-1
    </div>
    <div class="grid-5 example__grid">
      .grid-5
    </div>
  </div>

  <div class="example__spacer"></div>

  <div class="parent">
    <div class="grid-6 float-right example__grid">
      .grid-6.float-right
    </div>
  </div>

  <div class="example__spacer"></div>

  <div class="parent">
    <div class="grid-6 float-left example__grid">
      .grid-6.float-left
    </div>
  </div>

  <div class="example__spacer"></div>

  <div class="parent">
    <div class="grid-2 push-1 example__grid">
      .grid-2.push-1
    </div>
    <div class="grid-2 push-4 example__grid">
      .grid-2.push-4
    </div>
  </div>

  <div class="example__spacer"></div>

  <script src="https://gist.github.com/GesJeremie/09c75dae6f8c2e7db9da.js"></script>

  <div class="example__spacer --md"></div>

  <h2>Debug the grid</h2>

  <p>
    If you want to debug your layout when you are using the grid system, you can
    use the class `.gridle-debug`.
  </p>

  <div class="grid-12 gridle-debug">
    .grid-12.gridle-debug
  </div>

  <div class="example__spacer"></div>

  <script src="https://gist.github.com/GesJeremie/a14aa246de81c668dd22.js"></script>



@endsection
