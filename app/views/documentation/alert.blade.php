@section('content')
  <h1>Alert</h1>

  <p>
    Hammer provides some alerts to catch the attention of the user.
  </p>

  <div class="example__section">
    <h2>Basic Alert</h2>

    <div class="parent">
      <div class="grid-12">
        <div class="alert">Default Alert! Welcome back on Hammer.</div>
        <br/>
        <div class="alert --danger">Danger! You can't <strong>delete</strong> an administrator.</div>
        <br/>
        <div class="alert --warning">Warning! You <strong>forgot to back-up</strong> your datas.</div>
        <br/>
        <div class="alert --success">Success! You just purchased a cool toy.</div>
        <br/>
        <div class="alert --info">Info! All crimes now are legals.</div>
      </div>
    </div>

    <script src="https://gist.github.com/GesJeremie/89c240b9508fb98f166d.js"></script>

  </div>

  <div class="example__section">

    <h2>Option Square</h2>

    <p>
      If you don't want a border radius, you can use the option <strong>`--square`</strong>
    </p>

    <div class="alert --info --square">I'm an info alert but without border radius.</div>


    <script src="https://gist.github.com/GesJeremie/b378a7f079efdd6b01d4.js"></script>

  </div>

  <div class="example__section">
    <h2>Option Fit Text</h2>

    <p>
      If you want to fit the text given, you can use the option <strong>`--fit-text`</strong>
    </p>

    <div class="alert --success --fit-text">I'm really awesome because I fit the text !</div>

    <script src="https://gist.github.com/GesJeremie/92ec2396ece6aad7d04e.js"></script>

  </div>

  <div class="example__section">

    <h2>Remove an alert</h2>

    <p>
      Hammer provides a tiny jQuery plugin to remove the alerts.
    </p>

    <div class="alert --with-close" data-toggle="alert-close">I'm an alert and you can remove me ! <span><i class="fa fa-times"></i></span></div>

    <br/>

    <div class="alert --success --with-close" data-toggle="alert-close">I'm an alert and you can remove me ! <span><i class="fa fa-times"></i></span></div>


    <script src="https://gist.github.com/GesJeremie/3d6b9a5e9ed69b4e731d.js"></script>

  </div>


@endsection
