@extends('layouts/dashboard/master')
@section('title','Produk')
@section('header')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.css"/>
@stop
@section('content')
@if(session('success'))

<div class="alert alert-success alert-dismissible" role="alert">
	<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	<i class="fa fa-check-circle"></i> {{session('success')}}
</div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="panel">
  <div class="panel-heading">
    <div class="col-md-6">
      <h3 class="panel-title">Halaman produk</h3>
    </div>
    <div class="col-md-6">
      <a href="{{route('createProduk')}}" class="btn btn-primary navbar-btn-right" id="btn-tambahproduk">
        Tambah produk
      </a>
    </div>
  </div>
  <div class="panel-body" style="margin-top: 10px;">
    @if($produks->count() != 0)
    <table class="table table-hover" id="data_produks_reguler" style="margin-top: 10px;">
      <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Gambar</th>
            <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($produks as $produk)
        <tr>
            <td>{{$produk->nama}}</td>
            <td>{{$produk->harga}}</td>
            <td> <img src="{{url('images/'.$produk->gambar)}}" alt="" style="max-width: 100px; max-height: 100px;"></td>
            <td>
                <a href="{{route('editProduk',$produk->id)}}" class="btn btn-primary" title="Edit"> <i class="lnr lnr-pencil"></i> </a>
                <a href="#" class="btn btn-danger hapus-produk" title="Hapus"  data-produk_id="{{$produk->id}}"> <i class="lnr lnr-trash"></i> </a>
            </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    <div class="">

    </div>
    @else
    <h3>Belum ada data produk</h3>
    @endif
  </div>
</div>

@stop
@section('linkfooter')

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script>
	$(document).ready(function() {
		$('#btn-tambahproduk').click(function(){

		});
		// $('#data_produks_reguler').DataTable({
    //   'order':[[5,'desc']]
    // });
		$('#data_produks_reguler').DataTable();

		$('.hapus-produk').click(function(){
			const produk_id = $(this).data('produk_id');
			// const hapus = confirm('Yakin ingin menghapus produk ini?');

			// if (hapus) {
			// 	window.location = '../dashboard/produk/delete/'+produk_id;
			// }

            swal({
                title: "Yakin?",
                text: "Ingin menghapus produk ini?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/dashboard/produk/delete/"+produk_id;
                }
            });


		});

	});

</script>
@stop
