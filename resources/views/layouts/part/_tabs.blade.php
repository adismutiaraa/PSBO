<div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
        <h1><a href="index.html">Unit Keamanan Kampus</a></h1>
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Beranda</a></li>
          <li><a class="drop" href="#">Informasi</a>
            <ul>
              <li><a href="{{route('laporan.view')}}">Buat Laporan</a></li>
              <li><a href="pages/kontak.html">Kontak Penting</a></li>
              <li><a href="pages/pelayanan.html">Pelayanan & Pengembangan </a></li>
              <li><a href="pages/tupoksi.html">Tupoksi UKK IPB </a></li>
            </ul>
          </li>
        @guest
      <li class=><a href="{{ route('login') }}">Masuk</a></li>
        @else
                <a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
                     </form>
         @endguest
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>