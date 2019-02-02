@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Փոփոխել Օգտագործողին @endslot
            @slot('parent') Գլխավոր @endslot
            @slot('active')  օգտագործողներ @endslot

        @endcomponent
    </div>
    <hr/>
    <form class="form-horizontal" action="{{route('admin.user_managment.user.update',$user)}}" method="post">
      {{method_field('PUT')}}
      {{csrf_field()}}
        @include('admin.user_managment.users.partials.form')

    </form>
@endsection
