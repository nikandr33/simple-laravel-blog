@extends('admin.layouts.app_admin')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-sm-3">
               <div class="jumbotron">
                   <p><span class="label label-primary">Categories 0</span></p>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="jumbotron">
                   <p><span class="label label-primary">Materials 0</span></p>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="jumbotron">
                   <p><span class="label label-primary">Visitors 0</span></p>
               </div>
           </div>
           <div class="col-sm-3">
               <div class="jumbotron">
                   <p><span class="label label-primary">Visitors today 0</span></p>
               </div>
           </div>
       </div>

       <div class="row">
           <div class="col-sm-6">
               <a href="{{route('admin.category.create')}}" class="btn btn-block btn-default">Create category</a>
               <a href="#" class="list-group-item">
                   <h4 class="list-group-item-heading">First Category</h4>
                   <p class="list-group-item-text">
                       Count of materials
                   </p>
               </a>
           </div>
           <div class="col-sm-6">
               <a href="#" class="btn btn-block btn-default">Create material</a>
               <a href="#" class="list-group-item">
                   <h4 class="list-group-item-heading">First Material</h4>
                   <p class="list-group-item-text">
                       Category
                   </p>
               </a>
           </div>
       </div>

   </div>
@endsection