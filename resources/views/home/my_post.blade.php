<!DOCTYPE html>
<html lang="en">
   <head>
    @include('home.link')
    <style type="text/css">
    .title-deg
        {
            color: #000;
            font-size: 20px;
            font-weight: bold;
            padding-top: 20px;
            text-align: center;

        }
        .heading-deg
        {
            font-size: 30px;
            font-weight: 700;
            padding-top: 20px;
            text-align: center;
        }
        .post_img
        {
            height: 300px;
            width: 300px;
            justify-content: center;
            align-items: center;
            margin:auto;
        }
       .container
       {

       }
       .post_d
       {
        border-radius: 10px;
        padding: 30px;
        width: 400px;
        height: 25%;
        background: #d3d3d3;
        justify-content: space-between;
        margin: 20px;
        text-align: center;

       }
    </style>
    </head>
   <body>
    @if(session()->has('message'))
      <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
      </div>
     @endif
      <!-- header section start -->
      <div class="header_section">
        @include('home.header')

      </div>


      <div class="container">
        <div class="row">
            <h1 class="heading-deg">My Post</h1>
            @foreach ($data as $data)
            <div class="col-lg-4 post_d">
                <img src="postimage/{{$data->image}}" class="post_img">
                <h4 class="title-deg">{{$data->title}}</h4>
                <p>post by <b>{{$data->name}}</b></p>

                <div>
                    <a class="btn btn-primary" href="{{url('/post_description', $data->id)}}">Read more</a>
                    <a onclick="return confirm('are you sure to delete this?')" class="btn btn-danger" href="{{url('delete_my_post', $data->id)}}">Delete</a>
                </div>
             </div>
             @endforeach
            </div>
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
