<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">

    
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>

    <!--Favicon-->
    <link rel="shortcut icon" href="#" title="Favicon"/>

    <!-- Main CSS Files -->
    <link rel="stylesheet" href="{{ asset('../assets/css/style.css') }}" >

    <!-- Namari Color CSS -->
    <link rel="stylesheet" href="{{ asset('../assets/css/pengajar.css') }}">

    <link rel="stylesheet" href="{{ asset('../assets/css/owl.carousel.min.css') }}">
    <!--Icon Fonts - Font Awesome Icons-->
    <link rel="stylesheet" href="{{ asset('../assets/css/font-awesome.min.css') }}">

    <!-- Animate CSS-->
    <link href="{{ asset('/assets/css/animate.css') }}" rel="stylesheet" type="text/css">

    <!--Google Webfonts-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
</head>
<body>

<!-- Preloader -->
<div id="preloader">
    <div id="status" class="la-ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!--End of Preloader-->

<div class="page-border" data-wow-duration="0.7s" data-wow-delay="0.2s">
    <div class="top-border wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;"></div>
    <div class="right-border wow fadeInRight animated" style="visibility: visible; animation-name: fadeInRight;"></div>
    <div class="bottom-border wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;"></div>
    <div class="left-border wow fadeInLeft animated" style="visibility: visible; animation-name: fadeInLeft;"></div>
</div>

<div id="wrapper">
@include('partials.navbar')


    <!--Testimonials-->
    <aside id="testimonials" class="scrollto text-center" data-enllax-ratio=".2">

        <div class="row clearfix">

            <div class="section-heading">
                <h3>Para Pengajar</h3>
                <h2 class="section-title">Nama Guru Pengajar</h2>
            </div>
            @foreach($pengajars as $pengajar)
            <!--User Testimonial-->
            <blockquote class="col-3 testimonial classic">
                <img src="{{ asset('storage/'. $pengajar->image) }}" style="width:100px; height:100px" alt="User"/>
                <q><Strong>{{ $pengajar->nama }}</Strong></q>
                <footer>{{ $pengajar->mapel->name }} <BR></BR>{{ $pengajar->NIP }}</footer>
            </blockquote>
            <!-- End of Testimonial-->
            @endforeach

        </div>

    </aside>
    <!--End of Testimonials-->

    


        <!--Footer-->
        <footer id="landing-footer" class="clearfix">
            <div class="row clearfix">
    
                <p id="copyright" class="col-2">Made with love by <a href="https://www.instagram.com/hilmanwahyudin">Santri_alit</a></p>
    
                <!--Social Icons in Footer-->
                <ul class="col-2 social-icons">
                    <li>
                        <a target="_blank" title="Facebook" href="https://www.facebook.com/https://www.facebook.com/iman.cpjuangkmerdkaan">
                            <i class="fa fa-facebook fa-1x"></i><span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="Google+" href="http://google.com/+u">
                            <i class="fa fa-google-plus fa-1x"></i><span>Google+</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="Twitter" href="http://www.twitter.com/@anhilans">
                            <i class="fa fa-twitter fa-1x"></i><span>Twitter</span>
                        </a>
                    </li>
                    <li>
                        <a target="_blank" title="Instagram" href="http://www.instagram.com/hilmanwahyudin">
                            <i class="fa fa-instagram fa-1x"></i><span>Instagram</span>
                        </a>
                    </li>
                </ul>
                <!--End of Social Icons in Footer-->
            </div>
        </footer>
        <!--End of Footer-->

</div>

<!-- Include JavaScript resources -->
<script src="{{ asset('/assets/js/jquery.1.8.3.min.js') }}"></script>
<script src="{{ asset('/assets/js/wow.min.js') }}"></script>
<script src="{{ asset('/assets/js/featherlight.min.js') }}"></script>
<script src="{{ asset('/assets/js/featherlight.gallery.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.enllax.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.scrollUp.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.stickyNavbar.min.js') }}"></script>
<script src="{{ asset('/assets/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('/assets/js/images-loaded.min.js') }}"></script>
<script src="{{ asset('/assets/js/lightbox.min.js') }}"></script>
<script src="{{ asset('/assets/js/site.js') }}"></script>


</body>
</html>


