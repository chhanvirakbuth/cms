@extends('layouts.app')
@section('content')

@endsection

@section('post_background')
  <li class="list-group-item bg-dark">
@endsection

@section('post_color')
  <a href="{{route('posts.index')}}" style="color:#fff;">
@endsection

@section('categories_background')
<li class="list-group-item">
@endsection

@section('categories_color')
  <a href="{{route('categories.index')}}">
@endsection


@section('script')
 <!-- <script>
 $(document).ready(function(){
$("#posts").click(function(){
  $("#posts").css({"color": "#fff"});
});
});
 </script> -->
@endsection
