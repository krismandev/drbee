@extends('layouts.frontend.master')
@section('title',$produk->nama)
@section('content')
<!-- Blog page section  -->
<section class="blog-page-section spad pt-0 mt-5">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="post-item post-details">
                    <img src="{{url('images/'.$produk->gambar)}}" class="post-thumb-full" alt="">
                    <div class="post-content">
                        <h3><a href="#">{{$produk->nama}}</a></h3>
                        <div class="post-meta">
                            <span><i class="fa fa-calendar-o"></i> {{date('d M Y',strtotime($produk->created_at))}}</span>
                        </div>
                        <p>{!!$produk->deskripsi!!}</p>
                    </div>
                </div>
            </div>
            <!-- sidebar -->
            <div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">
                <!-- widget -->
                <!-- widget -->
                <div class="widget">
                    <h5 class="widget-title">Produk Lainnya</h5>
                    <div class="recent-post-widget">
                        <!-- recent post -->
                        @foreach ($produks as $produk)
                        <a href="{{route('singleProduk',$produk->id)}}">
                            <div class="rp-item">
                                <div class="rp-thumb set-bg" data-setbg="{{url('images/'.$produk->gambar)}}"></div>
                                <div class="rp-content">
                                    <h6>{{$produk->nama}}</h6>
                                    {{-- <p><i class="fa fa-clock-o"></i> 24 Mar 2018</p> --}}
                                </div>
                            </div>
                        </a>
                        @endforeach
                    </div>
                </div>
                <!-- widget -->
                <!-- widget -->
            </div>
        </div>
    </div>
</section>
<!-- Blog page section end -->

@endsection
