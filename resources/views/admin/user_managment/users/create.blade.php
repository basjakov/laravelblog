@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Ստեղծել Օգտագործող  User @endslot
            @slot('parent') Գլխավոր @endslot
            @slot('active')  User @endslot

        @endcomponent
    </div>
    <hr/>
    <form class="form-horizontal" action="{{route('admin.user_managment.user.store')}}" method="post">
        {{csrf_field()}}
        @include('admin.user_managment.users.partials.form')


    </form>
@endsection
