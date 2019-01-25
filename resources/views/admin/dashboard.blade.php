@extends('admin.layouts.app_admin')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="display-">Կատեգորիաներ {{$count_categories}}</span></p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="label label-primary">Նյութեր {{$count_articles}}</span></p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="label label-primary">Այցելուներ 0</span></p>
				</div>
			</div>
			<div class="col-sm-3">
				<div class="jumbotron">
					<p><span class="label label-primary">այսօր 0</span></p>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-sm-6">
				<a class="btn btn-block btn-default" href="{{route('admin.category.create')}}">Ստեղծել կատեգորիա</a>
				@foreach ($categories as $category)
				<a class="list-group-item" href="{{route('admin.category.edit',$category)}}">
					<h4 class="list-group-item-heading">{{$category->title}}</h4>
					<p class="list-group-item-text">
							{{$category->articles()->count()}}
					</p>
				</a>
				@endforeach

			</div>
			<div class="col-sm-6">
				<a class="btn btn-block btn-default" href="{{route('admin.article.create')}}">Ստեղծել նյութ</a>
				@foreach ($articles as $article)
				<a class="list-group-item" href="{{route('admin.category.edit',$article)}}">
					<h4 class="list-group-item-heading">{{$article->title}}</h4>
					<p class="list-group-item-text">
							{{$article->categories()->pluck('title')->implode(',')}}
					</p>
				</a>
				@endforeach
			</div>
		</div>

	</div>
@endsection
