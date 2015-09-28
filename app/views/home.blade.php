@extends('layouts.master')

@section('content')

  <div class="container">
    <div class="example__home">
      <h1>Hammer</h1>
      <h3>v0.0.2</h3>
      <p>Copy / Paste the folder <strong>`hammer`</strong> in your project and kick ass your front-end development.</p>
      <a class="button --info --xl" href="{{ url('documentation') }}">Documentation</a>
    </div>
  </div>
@endsection
