@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Edit category @endslot
            @slot('parent') Home @endslot
            @slot('active') Categories @endslot
        @endcomponent

        <hr />

        <form action="{{route('admin.category.update', $category)}}" method="post" class="form-horizontal">
            <input type="hidden" name="_method" value="put">
            {{csrf_field()}}

            {{-- Form Include--}}
            @include('admin.categories.partials.form')
        </form>
    </div>
@endsection