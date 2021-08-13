@extends('layouts.frontend.master')
@section('title','Selamat Datang')
@section('content')
<!-- Hero section -->
<section class="hero-section">
    <div class="hero-slider owl-carousel">
        @if ($banners != null)
        @foreach ($banners as $banner)
        <div class="hs-item set-bg" data-setbg="{{url('banner/'.$banner->gambar)}}">
            <div class="hs-text">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="hs-subtitle">Award Winning UNIVERSITY</div>
                            <h2 class="hs-title">An investment in knowledge pays the best interest.</h2>
                            <p class="hs-des">Education is not just about going to school and getting a degree. It's about widening your<br> knowledge and absorbing the truth about life. Knowledge is power.</p>
                            <a href="https://wa.me/6282281164684" class="site-btn">Hubungi Kami</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @endif
    </div>
</section>
<!-- Hero section end -->

<!-- Services section -->
<section class="service-section spad">
    <div class="container services">
        <div class="section-title text-center">
            <h3>OUR SERVICES</h3>
            <p>We provides the opportunity to prepare for life</p>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="{{asset('frontend/img/services-icons/1.png')}}" alt="1">
                </div>
                <div class="service-content">
                    <h4>Murni</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="{{asset('frontend/img/services-icons/2.png')}}" alt="1">
                </div>
                <div class="service-content">
                    <h4>Berkualitas</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 service-item">
                <div class="service-icon">
                    <img src="{{asset('frontend/img/services-icons/3.png')}}" alt="1">
                </div>
                <div class="service-content">
                    <h4>Terjangkau</h4>
                    <p>Lorem ipsum dolor sitdo amet, consectetur dont adipis elit. Vivamus interdum ultrices augue. Aenean dos cursus lania.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services section end -->


<!-- Enroll section -->

<!-- Enroll section end -->


<!-- Courses section -->
<section class="courses-section spad">
    <div class="container">
        <div class="section-title text-center">
            <h3>Produk Kami</h3>
            {{-- <p>Building a better world, one course at a time</p> --}}
        </div>
        <div class="row">
            <!-- course item -->
            @if ($produks != null)
            @foreach ($produks as $produk)
            <div class="col-lg-4 col-md-6 course-item">
                <div class="course-thumb">
                    <img src="{{url('images/'.$produk->gambar)}}" alt="" style="width: 360px; height: 243px; object-fit: cover; object-position: center;">
                    <div class="course-cat">
                        <a href="https://wa.me/6282281164684" target="_blank">
                            <span>Beli Sekarang</span>
                        </a>
                    </div>
                </div>
                <div class="course-info">
                    {{-- <div class="date"><i class="fa fa-clock-o"></i> 22 Mar 2018</div> --}}
                    <h4>{{$produk->nama}}</h4>
                    <h4 class="cource-price">Rp. {{$produk->harga}}</h4>
                </div>
            </div>
            @endforeach
            @endif
        </div>
        <div class="text-center">
            <a href="http://" class="site-btn">Lihat Semua</a>
        </div>
    </div>
</section>
<!-- Courses section end-->


<!-- Fact section -->
<section class="fact-section spad set-bg" data-setbg="img/fact-bg.jpg">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-crown"></i>
                </div>
                <div class="fact-text">
                    <h2>50</h2>
                    <p>YEARS</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-briefcase"></i>
                </div>
                <div class="fact-text">
                    <h2>80</h2>
                    <p>TEACHERS</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-user"></i>
                </div>
                <div class="fact-text">
                    <h2>500</h2>
                    <p>STUDENTS</p>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3 fact">
                <div class="fact-icon">
                    <i class="ti-pencil-alt"></i>
                </div>
                <div class="fact-text">
                    <h2>800+</h2>
                    <p>LESSONS</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-page spad pt-0 mt-5">
    <div class="container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7976.5048941436435!2d103.50771761169392!3d-1.6052902965348337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m3!3e0!4m0!4m0!5e0!3m2!1sid!2sid!4v1628438532991!5m2!1sid!2sid" width="1100" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>


<!-- Newsletter section -->
<section class="newsletter-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-lg-7">
                <div class="section-title mb-md-0">
                <h3>NEWSLETTER</h3>
                <p>Subscribe and get the latest news and useful tips, advice and best offer.</p>
            </div>
            </div>
            <div class="col-md-7 col-lg-5">
                <form class="newsletter">
                    <input type="text" placeholder="Enter your email">
                    <button class="site-btn">SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Newsletter section end -->
@endsection
