<!DOCTYPE html>
<html lang="en">
    <base href="/public">
   <head>
    @include('home.link')
    <style>
        .des_img
        {
            height: 400px;
            width: 400px;
            padding: 20px;
            margin: auto;
            left: 0;
            position: relative;
            display: inline-block;
            border: 2px solid #000;
            border-radius: 10px;

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
      <div style="text-align: center; margin: auto;" class="col-md-12">
        <div><img src="postimage/{{$post->image}}" class="des_img"></div>
        <h2><b>{{$post->title}}</b></h2>
        <h4>{{$post->description}}</h4>
        <p>post by <b>{{$post->name}}</b></p>

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
