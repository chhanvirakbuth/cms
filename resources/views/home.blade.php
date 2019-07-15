@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('post_background')
  <li class="list-group-item">
@endsection

@section('post_color')
  <a href="{{route('posts.index')}}">
@endsection

@section('categories_background')
<li class="list-group-item">
@endsection

@section('categories_color')
  <a href="{{route('categories.index')}}">
@endsection
