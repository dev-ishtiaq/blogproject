<!DOCTYPE html>
<html>
  <head>
    <style>
        .post_title
        {
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
            color: #fff;
        }
        .div_center
        {
            text-align:center;
            padding: 20px;
        }
        label
        {
            display: block;
             width: 200px;
        }
    </style>
   @include('admin.admincss')
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
@if(session()->has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" area-hidded="true">X</button>
{{session()->get('message')}}
</div>
@endif

        <h1 class="post_title text-center">Add Post</h1>
        <form action="{{url('add_post')}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="div_center">
                <label>post title</label>
                <input type="text" name="title">
            </div>
            <div class="div_center">
                <label>post description</label>
                <textarea name="description" cols="30" rows="3"></textarea>
            </div>
            <div class="div_center">
                <label>Add image</label>
                <input type="file" name="image">
            </div>
            <div class="div_center">
                <input class="btn btn-primary" type="submit">
            </div>
        </form>
      </div>
      @include('admin.footer')
  </body>
</html>
