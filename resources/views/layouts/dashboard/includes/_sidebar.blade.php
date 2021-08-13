

<div id="sidebar-nav" class="sidebar" style="overflow-y: scroll;">
  <div class="sidebar-scroll">
    <nav>
      <ul class="nav">
        <li><a href="{{route('index_admin')}}" class="{{(request()->is('admin')) ? 'active' : ''}}"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
        <li><a href="{{route('getProduk')}}" class="{{(request()->is('admin/prodi*')) ? 'active' : ''}}"><i class="lnr lnr-tag"></i> <span>Produk</span></a></li>
        <li><a href="#" class="{{(request()->is('admin/berita*')) ? 'active' : ''}}"><i class="lnr lnr-pencil"></i> <span>Berita</span></a></li>
        <li>
      		<a href="{{route('getBanner')}}" class="{{(request()->is('admin/banner*') || request()->is('admin/video-banner*') ) ? 'active' : ''}}" aria-expanded="false"><i class="lnr lnr-picture"></i> <span>Banner</span></a>
      	</li>


        {{-- @if(auth()->user()->role == 'superadmin')
    		<li>
        	<a href="" class="{{(request()->is('admin/tim*')) ? 'active' : ''}}"><i class="lnr lnr-users"></i> <span>Tim</span></a>
        </li>
        @endif
        <li>
        	<a href="" class="{{(request()->is('admin/kontak*')) ? 'active' : ''}}"><i class="lnr lnr-book"></i> <span>Kontak</span></a>
        </li>
        <li>
        	<a href="" class="{{(request()->is('admin/pesan*')) ? 'active' : ''}}"><i class="lnr lnr-bubble"></i> <span>Pesan</span></a>
        </li> --}}
      </ul>
    </nav>
  </div>
</div>
