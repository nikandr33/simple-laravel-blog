@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Create article @endslot
            @slot('parent') Home @endslot
            @slot('active') Articles @endslot
        @endcomponent

        <hr />

        <form action="{{route('admin.article.store')}}" method="post" class="form-horizontal">
            {{csrf_field()}}

            {{-- Form Include--}}
            @include('admin.articles.partials.form')
            <input type="hidden" name="created_by" value="{{Auth::id()}}">
        </form>
    </div>
@endsection