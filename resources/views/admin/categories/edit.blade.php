@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Փոփոխել կատեգորիան @endslot
            @slot('parent') Գլխավոր @endslot
            @slot('active') կատեգորիաներ @endslot

        @endcomponent
    </div>
    <hr/>
    <form class="form-horizontal" action="{{route('admin.category.update',$category)}}" method="post">
      <input type="hidden" name="_method" value="put">

        {{csrf_field()}}
        @include('admin.categories.partials.form')
    </form>
@endsection
