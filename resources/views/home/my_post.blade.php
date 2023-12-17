<!DOCTYPE html>
<html lang="en">
   <head>
    @include('home.link')
    <style type="text/css">
        .post_deg
        {
            
            
           
            background: #000;
        }
        .services_img
        {
            height: 300px;
            width: 300px;
            padding: 20px;
            display: block;
        }
        .title-deg
        {
            color: #fff;
            font-size: 18px;
            
        }
    </style>
    </head>
   <body>
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')
       
      </div>
      
      
            @foreach ($data as $data)
            <div class="col-md-4 d-inline-flex p-2 post_deg">
                <div><img src="postimage/{{$data->image}}" class="services_img"></div>
                <h4 class="title-deg fs-5">{{$data->title}}</h4>
                <p class="color-white">data by <b>{{$data->name}}</b></p>

                <div class="btn_main"><a href="{{url('/data_description', $data->id)}}">Read more</a></div>
            </div>
        
       
     @endforeach
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
