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


	<title>Laravel PHP Framework</title>

</head>
<body>

	<div class="hello">
		<div class="container">
			<br/><br/>
			<div class="nav --reverse">
				<div class="container-fluid">
					<div class="grid-2">
						<div class="nav__brand">
							Invoicify
						</div>
					</div>
					<div class="grid-5">
						<a href="#" class="nav__link --active">About</a>
						<a href="#" class="nav__link">Screencasts</a>
						<a href="#" class="nav__link">Documentation</a>
						<a href="#" class="nav__link">Github</a>
					</div>
					<div class="grid-3">
						<span class="nav__message">Welcome back, <strong>Jeremie</strong></span>
					</div>
					<div class="grid-2 push-right">
						<a href="#" class="nav__link"><i class="fa fa-user"></i></a>
					</div>
				</div>
			</div>


			<br/><br/>
			<div class="alert --danger">J'ai n'ai actuellement pas de disponibilité pour un nouveau projet !</div>
			<br/><br/><br/>
			<div class="table">
				<table>
					<thead>
						<tr>
							<th>Id</th>
							<th>Javascript Framework</th>
							<th>Active</th>
							<th>Note</th>
						</tr>
					</thead>
					<tbody>
						<?php
							$datas = [

								[
									'id' => 1,
									'name' => 'GothamJS',
									'active' => 'no',
									'note' => '14/20'
								],

								[
									'id' => 2,
									'name' => 'Knockout',
									'active' => 'no',
									'note' => '12/20'
								],

								[
									'id' => 3,
									'name' => 'Angular',
									'active' => 'no',
									'note' => '20/20'
								],

								[
									'id' => 4,
									'name' => 'Ember',
									'active' => 'yes',
									'note' => '14/20'
								],

								[
									'id' => 5,
									'name' => 'SpineJS',
									'active' => 'yes',
									'note' => '14/20'
								],

								[
									'id' => 6,
									'name' => 'Yat',
									'active' => 'yes',
									'note' => '2/20'
								]

							];
						?>
						@foreach($datas as $data)
							<tr>
								<td>{{ $data['id'] }}</td>
								<td>{{ $data['name'] }}</td>
								<td>{{ $data['active'] }}</td>
								<td>{{ $data['note'] }}</td>
							</tr>
						@endforeach
					</tbody>
					<tfooter>
					</tfooter>
				</table>
			</div>
		</div>
	</div>

</body>
</html>
