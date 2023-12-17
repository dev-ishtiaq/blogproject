<!DOCTYPE html>
<html lang="en">
   <head>
    @include('home.link')
    <style>
        .post_title
        {
            font-size: 30px;
            font-weight: bold;
            padding: 30px;
            color: #1a1919;
        }
        .div_center
        {
            text-align:center;
            padding: 20px;

        }
        label
        {
            display: inline-block;
            color: #ffffff;
             margin-left: auto;
        }

    </style>
    </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
      </div>
      <!-- header section end -->
      @if(session()->has('message'))
      <div class="alert alert-success">
          <button type="button" class="close" data-dismiss="alert" area-hidded="true">X</button>
      {{session()->get('message')}}
      </div>
      @endif
      <div class="page-content">
            <h1 class="post_title text-center">Add Post</h1>
            <form action="{{url('user_post')}}" method="POST" enctype="multipart/form-data">
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
                    <input style="color: #000; border: 1px solid #000;" class="btn btn-outline-success" type="submit">
                </div>
            </form>
      </div>
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
      <script src="js/bootstrap.bundle.min.js"></script>
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
