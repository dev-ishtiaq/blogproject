<!DOCTYPE html>
<html lang="en">
   <head>
    <base href="/public">
    @include('home.link')
    <style>
        .post_title
        {
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
            color: #000;
        }
        .div_center
        {
            text-align:center;
            padding: 20px;
        }
        label
        {
            display: inline-block;
             width: 140px;
        }
        .img_design
        {
            height: 100px;
            width: 100px;
            margin: auto;
        }
    </style>
    </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
         <!-- banner section start -->

      </div>
      <!-- header section end -->

      @if(session()->has('message'))
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" area-hidden="true">X</button>
      {{ session()->get('message') }}
      </div>
  @endif

      <h1 class="post_title text-center">Edit Post</h1>
        <form action="{{url('post_update_submit', $data->id)}}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="div_center">
                <label>post title</label>
                <input type="text" name="title" value="{{$data->title}}">
            </div>
            <div class="div_center">
                <label>post description</label>
                <textarea name="description" cols="30" rows="3" >{{$data->description}}</textarea>
            </div>
            <div class="div_center">
                <label>Old image</label>
                <img class="img_design" src="/postimage/{{$data->image}}" alt="">
            </div>
            <div class="div_center">
                <label>Update Old image</label>
                <input type="file" name="image">
            </div>
            <div class="div_center">
                <input class="btn btn-primary" type="submit">
            </div>
        </form>
      <!-- footer section start -->
     @include('home.footer')
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">2020 All Rights Reserved. Design by <a href="https://html.design">Free html  Templates</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
      {{-- <script src="js/bootstrap.bundle.min.js"></script> --}}
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript -->
      <script src="js/owl.carousel.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>
