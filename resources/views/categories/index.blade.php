@extends('layouts.app')
@section('content')
  <div class="d-flex justify-content-end mb-2">

    @if(session()->has('success'))
    <p class="alert alert-success">
      {{session()->get('success')}}
    </p>
    @endif

    <a href="{{route('categories.create')}}" class="btn btn-success">Add Category</a>
  </div>
  <div class="card card-default">
    <div class="card card-header bg-dark" style="color:#fff;">
      Categories
    </div>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"> ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @if(count($categories)>0)
      @foreach($categories as $category)
      <tr>
        <th scope="row">{{$category->id}}</th>
        <td>{{$category->name}}</td>
        <td>
          <a href="{{route('categories.edit',$category->id)}}">  <i class="fas fa-pen-square" style="font-size:25px; color:#3F6FEE;"></i></a>

          <a onclick="handledelete({{$category->id}})"><i class="far fa-trash-alt ml-3" style="font-size:25px; color:#3F6FEE; cursor:pointer;"></i></a>
          <!-- Modal -->

        </td>
      </tr>
      @endforeach
    @endif
  </tbody>
</table>
  </div>

      <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <form class="" action="" method="post" id="deleteCategoryForm">
          @csrf
          @method('DELETE')
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Category</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                Do you want to delete ?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                <button type="submit" class="btn btn-primary">Sure</button>
              </div>
            </div>
          </div>
        </form>
      </div>

  <!-- Button trigger modal -->
@endsection

@section('script')
  <script>
    function handledelete(id){
      var form =document.getElementById('deleteCategoryForm')
      form.action='/categories/'+id
            console.log(form);
      $('#deleteModal').modal('show');
    }
  </script>
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
  <a href="{{route('categories.index')}}"  style="color:#fff;">
@endsection
