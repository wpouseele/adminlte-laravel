@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection

@section('contentheader_title','Home')

@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-heading">Welcome</div>

					<div class="panel-body">
						This app is used to manage all aspects of a vCloudOne project.<br><br>
						Use the left navigation to view/create/update a project.
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
