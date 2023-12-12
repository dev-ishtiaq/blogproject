<div class="services_section layout_padding">
    <div class="container">
       <h1 class="services_taital">Blog Post</h1>
       <p class="services_text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration</p>
       <div class="services_section_2">
          <div class="row">

            @foreach ($post as $post)

             <div class="col-md-4">
                <div><img src="images/img-1.png" class="services_img"></div>
                <h4>Lorem, ipsum dolor sit amet consectetur </h4>
                <p>post by <b>-Admin</b></p>

                <div class="btn_main"><a href="#">Read more</a></div>
             </div>
            @endforeach
          </div>
       </div>
    </div>
 </div>
