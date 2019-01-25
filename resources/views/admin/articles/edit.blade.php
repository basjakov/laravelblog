@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Փոփոխել նյութը @endslot
            @slot('parent') Գլխավոր @endslot
            @slot('active') Փոփոխել նյութը @endslot

        @endcomponent
    </div>
    <hr/>
    <form class="form-horizontal" action="{{route('admin.article.update',$article)}}" method="post">
      <input type="hidden" name="_method" value="put">

        {{csrf_field()}}
        @include('admin.articles.partials.form')
        <input type="hidden" name="modified_by" value="{{Auth::id()}}">
    </form>
@endsection
