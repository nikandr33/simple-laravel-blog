@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Create category @endslot
            @slot('parent') Home @endslot
            @slot('active') Categories @endslot
        @endcomponent

            <hr />

            <form action="{{route('admin.category.store')}}" method="post" class="form-horizontal">
                {{csrf_field()}}

                {{-- Form Include--}}
                @include('admin.categories.partials.form')
            </form>
    </div>
@endsection