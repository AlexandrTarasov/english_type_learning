@extends('admin.layouts.app_admin')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="jumbotron">
				<p>
					<span class="label label-primary">Cat 1</span>
				</p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p>
					<span class="label label-primary">Cat 2</span>
				</p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p>
					<span class="label label-primary">Cat 3</span>
				</p>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="jumbotron">
				<p>
					<span class="label label-primary">Cat 4</span>
				</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-6">
			<a class="btn btn-block btn-default" href="{{route('admin.category.create')}}">Create category</a> 
			<a class="list-group-item" href="#">
				<h4 class="list-group-item-heading">Категория первая</h4>
				<p class="list-group-item-text">
					Amount of categories
				</p>
			</a> 
		</div>
		<div class="col-sm-6">
			<a class="btn btn-block btn-default" href="#">Create material</a> 
			<a class="list-group-item" href="#">
				<h4 class="list-group-item-heading">First material</h4>
				<p class="list-group-item-text">
					Amount of matetials
				</p>
			</a> 
		</div>
	</div>
</div>
@endsection


