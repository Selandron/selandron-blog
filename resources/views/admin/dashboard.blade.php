@extends('layouts.admin')

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
					@foreach ($lastComments as $comment)
					<hr>
					<div class="row-comment">
						<a href=""><p class="row-begin-comment">{{ substr($comment->content, 0, 27) . "..." }}</p><p class="row-date">{{ $comment->created_at }}</p><p class="row-title">{{ $comment->article->title }}</p></a>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-6 cardbox" id="article-box">
			<div>
				<h1>Last Articles</h1>
				@foreach ($lastArticles as $article)
					<hr>
					<p class="row-title">{{ $article->title }}</p> <p class="row-date">{{ $article->created_at }}</p>
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