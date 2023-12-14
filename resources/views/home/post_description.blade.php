<!DOCTYPE html>
<html lang="en">
    <base href="/public">
   <head>
    @include('home.link')
    <style>
        .services_img
        {
            height: 400px;
            width: 400px;
            border: 2px solid #ff0;
            border-radius: 20px;
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
      <div class="col-md-4">
        <div><img src="postimage/{{$post->image}}" class="services_img"></div>
        <h4>{{$post->title}}</h4>
        <p>post by <b>{{$post->name}}</b></p>

        <div class="btn_main"><a href="{{url('/post_description', $post->id)}}">Read more</a></div>
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
