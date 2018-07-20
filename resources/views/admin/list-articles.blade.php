@extends('layouts.admin')

@section('links')
<link href="{{ asset('css/admin/lists.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid" id="content-list-article">
	<div class="row">
		<div class="col-xs-12">
			<h1>Articles</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12">
			<div style="overflow-x:auto;">
			<table>
				<tr class="row-head">
					<th>ID</th>
					<th>Title</th>
					<th>Author</th>
					<th>Public</th>
					<th>Prioritary</th>
					<th>Created</th>
					<th>Updated</th>
					<th>Edit</th>
				</tr>
				@foreach ($articles as $article)
				<tr>
					<th class="id">{{ $article->id }}</th>
					<th>{{ $article->title }}</th>
					<th>{{ $article->author->pseudo }}</th>
					<th>{{ ($article->public) ? 'public' : 'private' }}</th>
					<th>{{ ($article->prioritary) ? 'prioritary' : 'normal' }}</th>
					<th>{{ $article->created_at->format("d-m-y G:i:s") }}</th>
					<th>{{ $article->updated_at->format("d-m-y G:i:s") }}</th>
					<th><a href=""><i class="fas fa-pencil-alt fa-2x"></i></a></th>
				</tr>
				@endforeach
			</table>
			{{ $articles->links() }}
		</div>
	</div>
</div>
@endsection