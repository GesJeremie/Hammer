@section('content')
  <h1>Form</h1>

  <div class="example__section">
    <h2>Simple Form</h2>

    <div class="parent">
      <div class="grid-12">
        <form class="form">
          <label>Email</label>
          <input type="text" name="email" />

          <label>Name</label>
          <input type="text" name="name" placeholder="Put your real name" />

          <label>Description</label>
          <textarea></textarea>

          <a class="button">Create User</a>
        </form>
      </div>

    </div>

    <script src="https://gist.github.com/GesJeremie/ff72107d64e25b36f855.js"></script>
  </div>

  <div class="example__section">
    <h2>File Input</h2>

    <p>The default <strong>`input type="text"`</strong> is not really pretty, Hammer by default change the style.</p>

    <div class="parent">
      <div class="grid-12">
        <form class="form">
          <input type="file" />
        </form>
      </div>
    </div>

    <script src="https://gist.github.com/GesJeremie/042207ad25a153b27321.js"></script>

    <h3>Options</h3>

    <p>You can change the default label and the class used via the <strong>`data-*`</strong> attributes.</p>

    <div class="parent">
      <div class="grid-12">
        <form class="form">
          <input type="file" data-label="Upload Avatar" data-class="button --success" />
        </form>
      </div>
    </div>

    <script src="https://gist.github.com/GesJeremie/ddf170d7320d856703d8.js"></script>
  </div>

  <div class="example__section">
    <h2>Checkboxes and Radios</h2>

    <p>Hammer uses the jQuery plugin <a href="https://github.com/fntneves/jquery-labelauty">Labelauty</a> with a custom UI css.</p>

    <div class="parent">
      <div class="grid-12">
        <form class="form">
          <label>Cloud</label>
          <input type="checkbox" data-labelauty="Don't synchronize files|Synchronize my files"/>

          <label>Gender</label>
          <input type="radio" name="sex" value="male" data-labelauty="Male">
          <input type="radio" name="sex" value="female" data-labelauty="Female">
        </form>
      </div>
    </div>

    <script src="https://gist.github.com/GesJeremie/296a7805604ee83955a9.js"></script>

  </div>

@endsection
