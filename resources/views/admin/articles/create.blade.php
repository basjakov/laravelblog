@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Ստեղծել Նյութ @endslot
            @slot('parent') Գլխավոր @endslot
            @slot('active') Նյութ @endslot

        @endcomponent
    </div>
    <hr/>
    <form class="form-horizontal" action="{{route('admin.article.store')}}" method="post">
        {{csrf_field()}}
        @include('admin.articles.partials.form')

        <input type="hidden" name="created_by" value="{{Auth::id()}}">
    </form>
@endsection
