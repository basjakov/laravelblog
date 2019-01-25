@extends('layouts.app')
@section('title',$article->meta_title)
@section('meta_keyword',$article->meta_keyword)
@section('meta_description',$article->meta_description)

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>{{$article->title}}</h1>
                <span class="input-group-addon">
                       <span class="glyphicon glyphicon-calendar">{{$article->created_at}}</span>
                 </span>
                <p>{{$article->description}}</p>

            </div>
        </div>
    </div>
@endsection
