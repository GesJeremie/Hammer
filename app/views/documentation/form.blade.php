@section('content')
  <h1>Form</h1>

  <div class="example__spacer --md"></div>

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
@endsection
