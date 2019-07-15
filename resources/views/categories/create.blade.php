@extends('layouts.app')

@section('content')
  <div class="card card-default">
    <div class="card card-header bg-success" style="color:#fff;">
      {{isset($category) ? 'Edit Category' : 'Create Category'}}
    </div>
      <div class="card-body">
        @if($errors->any())
          @foreach($errors->all() as $error)
            <p class="alert alert-danger">
              {{$error}}
            </p>
          @endforeach
        @endif
        <form action="{{isset($category)? route('categories.update',$category->id) : route('categories.store')}}" method="POST">
          @csrf
          @if(isset($category))
          @method('PUT')
          @endif
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" id="name" class="form-control" name="name" value="{{isset($category)? $category->name :''}}">
          </div>
          <div class="form-group">
            <button class="btn btn-success">{{isset($category)? 'Update Category' :'Add Category'}}</button>
          </div>
        </form>
      </div>
  </div>
@endsection


@section('post_background')
  <li class="list-group-item ">
@endsection

@section('post_color')
  <a href="{{route('posts.index')}}">
@endsection

@section('categories_background')
<li class="list-group-item bg-dark">
@endsection

@section('categories_color')
  <a href="{{route('categories.index')}}" style="color:#fff;">
@endsection
