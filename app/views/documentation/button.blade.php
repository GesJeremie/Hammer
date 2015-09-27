@section('content')
  <h1>Button</h1>

  <div class="example__section">
    <h2>Core</h2>

    <p>
      You can use the class <strong>`.button`</strong> for your <strong>`a`</strong>, <strong>`button`</strong>, <strong>`input`</strong> tags.
    </p>

    <div>
      <a class="button" href="#">Default Button</a>
      <a class="button --primary">Primary Button</a>
      <a class="button --danger">Danger Button</a>
      <a class="button --warning">Warning Button</a>
      <a class="button --info">Info Button</a>
      <a class="button --stroke">Stroke Button</a>
    </div>


    <script src="https://gist.github.com/GesJeremie/8816806d448b1a703258.js"></script>

  </div>

  <div class="example__section">

    <h2>Sizes</h2>

    <p>You can change the size of your buttons, just add the right class.</p>

    <div>
      <a class="button --sm">Small Button</a>
      <a class="button --lg">Large Button</a>
      <a class="button --xl">Extra-Large Button</a>
    </div>

    <script src="https://gist.github.com/GesJeremie/56c7aa897806bcbcc127.js"></script>

  </div>

  <div class="example__section">

    <h2>Block</h2>

    <p>Sometimes your button must fit the whole space.</p>

    <div>
      <a class="button --xl --block">I take the whole space</a>
    </div>

    <script src="https://gist.github.com/GesJeremie/e7b3097f9ae650f0de47.js"></script>

  </div>

  <div class="example__section">

    <h2>Disabled</h2>

    <p>Sometimes you need to <strong>mute</strong> a button.</p>

    <div>
      <a class="button --disabled" href="#">Default Button</a>
      <a class="button --primary --disabled">Primary Button</a>
      <a class="button --danger --disabled">Danger Button</a>
      <a class="button --warning --disabled">Warning Button</a>
      <a class="button --info --disabled">Info Button</a>
      <a class="button --stroke --disabled">Stroke Button</a>
    </div>

    <script src="https://gist.github.com/GesJeremie/e4ebe834d0ebc378409a.js"></script>

  </div>

@endsection
