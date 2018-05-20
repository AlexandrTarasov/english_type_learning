@extends('admin.layouts.app_admin')

@section('content')

<div class="conteiner">
	@component('admin.components.breadcrumb')
		@slot('title') Add category @endslot
		@slot('parent') Main @endslot
		@slot('active') Categories @endslot
	@endcomponent	
	
	<hr />
	
	<form  class="form-horizontal" action="{{route('admin.category.store')}}" method="post">
		{{csrf_field()}}
	</form>
		
</div>
@endsection


