@section('content')
  <h1>Form</h1>

  <div class="example__section">
    <h2>Simple Form</h2>

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
@endsection
