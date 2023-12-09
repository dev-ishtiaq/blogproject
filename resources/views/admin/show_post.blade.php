<!DOCTYPE html>
<html>
  <head>
   @include('admin.admincss')
   <style>
      .post_title
        {
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
            color: #fff;
        }
        .table_deg
        {
            border: 1px solid white;
            width: 80%;
            text-align: center;
            margin: auto;
        }
        .th_deg
        {
            background: #000;
        }
        .img_deg
        {
            height: 100px;
            width: 100px;
            padding: 10px;
        }
   </style>
  </head>
  <body>
    @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
     @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <h1 class="post_title text-center">All Post</h1>
        <table class="table_deg">
            <tr class="th_deg">
                <th>Post Title</th>
                <th>Description</th>
                <th>Post By</th>
                <th>Post Status</th>
                <th>Usertype</th>
                <th>Image</th>
            </tr>
            @foreach($post as $post)
            <tr>
                <td>{{$post->title}}</td>
                <td>{{$post->description}}</td>
                <td>{{$post->name}}</td>
                <td>{{$post->post_status}}</td>
                <td>{{$post->usertype}}</td>
                <td><img class="img_deg" src="postimage/{{$post->image}}" alt=""></td>


            </tr>
            @endforeach()
        </table>
      </div>
      @include('admin.footer')
  </body>
</html>
