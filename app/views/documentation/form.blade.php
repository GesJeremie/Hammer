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
@endsection
