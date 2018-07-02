@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') List of categories @endslot
            @slot('parent') Home @endslot
            @slot('active') Categories @endslot
        @endcomponent

            <hr />

            <a href="{{route('admin.category.create')}}" class="btn btn-primary pull-right">
                <i class="fa-plus-square-o">Create category</i>
            </a>

            <table class="table table-striped">
                <thead>
                    <th>Name</th>
                    <th>Publication</th>
                    <th class="text-right">Action</th>
                </thead>
                <tbody>
                    @forelse($categories as $category)
                        <tr>
                            <td>{{$category->title}}</td>
                            <td>{{$category->published}}</td>
                            <td class="text-right">
                                <form onsubmit="if(confirm('Delete?')){return true}else{return false}" method="post" action="{{route('admin.category.destroy', $category)}}">
                                    <input type="hidden" name="_method" value="DELETE">
                                    {{ csrf_field() }}
                                    <a class="btn btn-default" href="{{route('admin.category.edit', $category)}}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <button class="btn" type="submit"><i class="fa fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center"><h2>No data available</h2></td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3">
                            <ul class="pagination pull-right">
                                {{$categories->links()}}
                            </ul>
                        </td>
                    </tr>
                </tfoot>
            </table>
    </div>
@endsection