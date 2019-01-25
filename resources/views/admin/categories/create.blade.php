@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Ստեղծել կատեգորիա @endslot
            @slot('parent') Գլխավոր @endslot
            @slot('active') կատեգորիաներ @endslot

        @endcomponent
    </div>
    <hr/>
    <form class="form-horizontal" action="{{route('admin.category.store')}}" method="post">
        {{csrf_field()}}
        @include('admin.categories.partials.form')
    </form>
@endsection
