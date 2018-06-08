@extends('admin.layouts.app_admin')

@section('content')

<div class="container">

@component('admin.components.breadcrumb')
	@slot('title') List of articles @endslot
	@slot('parent') Main @endslot
	@slot('active') Articles @endslot

@endcomponent

<hr>

<a href="{{route('admin.article.create')}}" class="btn btn-primary pull-right"><i class="far fa-plus-square"></i> Create article</a>

<table class="table table-striped">
	<thead>
		<th>Names</th>
		<th>Publications</th>
		<th class="text-right">Action</th>
	</thead>
	<tbody>
		@forelse($articles as $article)
		<tr>
			<td>{{$article->title}}</td>
			<td>{{$article->published}}</td>
			<td class="text-right">
				<form onsubmit="if(confirm('Del?')){ return true; }else{ return false; }" action="{{route('admin.category.destroy', $article)}}" method="post">
					<input type="hidden" name="_method" value="DELETE">
					{{ csrf_field() }}
					
					<a class="btn btn-default" href="{{route('admin.article.edit', $article)}}"><i class="far fa-edit"></i></a>
					<button type="submit" class="btn"><i class="far fa-trash-alt"></i></button>
				</form>
			</td>
		</tr>
		@empty
			<tr>
				<td colspan="3" class="text-center"><h1>NO data</h1></td>
			</tr>
		@endforelse
	</tbody>
	<tbody>
		<tr>
                    <td colspan="3">
                        <ul class="pagination pull-right">
                            {{$articles->links()}}
                        </ul>
                    </td>
		</tr>
	</tbody>
</table>


</div>
@endsection

