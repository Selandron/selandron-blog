@extends('layouts.admin')

@section('links')
<link href="{{ asset('css/admin/dashboard.css') }}" rel="stylesheet">
@endsection

@section('content')
<div class="container-fluid" id="content-dashboard">
	<div class="row">
		<div class="col-xs-6 cardbox">
			<div>
				<h1>Stats</h1>
			</div>
		</div>
		<div class="col-xs-6 cardbox" id="comment-box">
			<div>
				<h1>Last Comments</h1>
				<div id="list-comment">
					<hr>
					<div class="row-head">
						<div class="column-head">
							<h2>Comment</h2>
						</div>
						<div class="column-head">
							<h2>Article</h2>
						</div>
						<div class="column-head">
							<h2>Published</h2>
						</div>
					</div>
					@foreach ($lastComments as $comment)
					<hr>
					<div class="row-comment">
						<div class="column-comment">
							<a href=""><p class="row-begin-comment">{{ substr($comment->content, 0, 27) . "..." }}</p></a>
						</div>
						<div class="column-comment">
							<a href=""><p class="row-title">{{ $comment->article->title }}</p></a>
						</div>
						<div class="column-comment">
							<p class="row-date">{{ $comment->created_at->format("d-m-y G:i:s") }}</p>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 cardbox" id="article-box">
			<div id="list-article">
				<h1>Last Articles</h1>
				<hr>
				<div class="row-head">
					<div class="column-head">
						<h2>Article</h2>
					</div>
					<div class="column-head">
						<h2>Author</h2>
					</div>
					<div class="column-head">
						<h2>Published</h2>
					</div>
				</div>
				@foreach ($lastArticles as $article)
					<hr>
					<div class="row-article">
						<div class="column-article">
							<a href=""><p class="row-title">{{ $article->title }}</p></a>
						</div>
						<div class="column-article">
							<a href=""><p class="row-author">{{ $article->author->pseudo }}</p></a>
						</div>
						<div class="column-article">
							<a href=""><p class="row-date">{{ $article->created_at->format("d-m-y G:i:s") }}</p></a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
		<div class="col-xs-6 cardbox">
			<div>
				
			</div>
		</div>
	</div>
</div>
@endsection