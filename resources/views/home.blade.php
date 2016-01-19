@extends('layouts.app')

@section('htmlheader_title')
	Home
@endsection


@section('main-content')
	<div class="container spark-screen">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">Welcome</div>

					<div class="panel-body">
						This app is used to manage all aspects of a vCloudOne project.<br><br>
						<ul>
							<li><a href="/project/create">Create a new project</a></li>
							<li><a href="/company/">View all companies</a></li>
							<li><a href="/product/">View all products</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
