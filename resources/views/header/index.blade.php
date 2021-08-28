<section class="main_video_wrp">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="video_text_wrp">
                    <h1>We create <strong>ideas</strong><br>into real <strong>products</strong></h1>
                    <p>We make your ideas come to life with the latest technology and assured quality</p>
                    <a class="nav-link book_call_btn" href="{{ url('call') }}"><img src="{{ URL::asset('public/assets/images/call_btn_icon.png') }}" class="img-fluid"> Book a call</a>
                </div>
                <div class="client_logo">
                    <h2>Our beloved clients</h2>
                    <div class="client_logo_pic">
                        <img src="{{ URL::asset('public/assets/images/logo_square_1.png') }}" class="img-fluid">
                        <img src="{{ URL::asset('public/assets/images/logo_square_2.png') }}" class="img-fluid">
                        <img src="{{ URL::asset('public/assets/images/logo_square_3.png') }}" class="img-fluid">
                        <img src="{{ URL::asset('public/assets/images/logo_square_4.png') }}" class="img-fluid">  
                    </div>
                    <a href="#">See all 50+ clients</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="video_box_wrp">
                    <img src="{{ URL::asset('public/assets/images/video_bg.png') }}" class="img-fluid">
                    <button type="button" data-toggle="modal" data-target="#VideoPop"><img src="{{ URL::asset('public/assets/images/play_circle_filled.png') }}" class="img-fluid"></button>
                    <!-- Modal -->
                    <div class="modal fade VideoPopup" id="VideoPop" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                        <div class="modal-content">
                          <div class="modal-body p-0">
                              <iframe width="100%" height="500" src="https://www.youtube.com/embed/X7R-q9rsrtU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>