@extends('layouts.frontend.master')
@section('title','Produk')
@section('content')
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
@endsection
