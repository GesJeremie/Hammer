@section('content')
  <h1>Table</h1>

  <div class="example__section">

    <h2>Default</h2>
    <div class="parent">
      <div class="grid-12">
        <div class="table">
          <table>
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
              </tr>
            </thead>
            <tbody>
              @foreach (['Jeremie', 'Frank', 'Mickey', 'Jojo', 'Alexia', 'Peter', 'Vincent'] as $index => $value)
                <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>{{ $value }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="https://gist.github.com/GesJeremie/9659e6b38c740c3e6095.js"></script>

  </div>

  <div class="example__section">

    <h2>Option compact</h2>
    <div class="parent">
      <div class="grid-12">
        <div class="table --compact">
          <table>
            <thead>
              <tr>
                <th>Id</th>
                <th>Name</th>
              </tr>
            </thead>
            <tbody>
              @foreach (['Jeremie', 'Frank', 'Mickey', 'Jojo', 'Alexia', 'Peter', 'Vincent'] as $index => $value)
                <tr>
                  <td>{{ $index + 1 }}</td>
                  <td>{{ $value }}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script src="https://gist.github.com/GesJeremie/92bb4c277c42cf394efe.js"></script>

  </div>
@endsection
