<!DOCTYPE html>
<!--
Template Name: Geodarn
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>Unit Keamanan Kampus</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{url('layout/styles/layout.css')}}" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:{{url('images/demo/backgrounds/01.png')}};"> 
  <!-- ################################################################################################ -->
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
              <li><a href="pages/buatLaporan.html">Buat Laporan</a></li>
              <li><a href="pages/kontak.html">Kontak Penting</a></li>
              <li><a href="pages/pelayanan.html">Pelayanan & Pengembangan </a></li>
              <li><a href="pages/tupoksi.html">Tupoksi UKK IPB </a></li>
            </ul>
          </li>
        @guest
      <li class=><a href="pages/login1.html">Masuk</a></li>
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
  @yield('atas')
 
<!-- JAVASCRIPTS -->
<script src="{{('layout/scripts/jquery.min.js')}}"></script>
<script src="{{('layout/scripts/jquery.backtotop.js')}}"></script>
<script src="{{('layout/scripts/jquery.mobilemenu.js')}}"></script>
<script src="{{('layout/scripts/jquery.flexslider-min.js')}}"></script>
</body>
</html>