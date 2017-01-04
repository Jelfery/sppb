<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>SPPB</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/login.css">
    <link rel="stylesheet" type="text/css" href="{{ URL::to('/') }}/css/sppb.css">

</head>
<body id="app-layout">
    <div id="wrap">
    <nav class="navbar navbar-default navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- SPPB Logo -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    SPPB
                </a>
            </div>
            
<div class="collapse navbar-collapse" id="app-navbar-collapse">
    @if(Auth::check())
    <!-- Left Side Of Navbar -->
    <ul class="nav navbar-nav">
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Perjawatan & Latihan <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/home') }}">Option 1</a></li>
                <li><a href="{{ url('/home') }}">Option 2</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengurusan Aset <span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/home') }}">Option 1</a></li>
                <li><a href="{{ url('/home') }}">Option 2</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pengurusan Bajet<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/dummyvot') }}">Dummy Vot</a></li>
                <li><a href="{{ url('/552M') }}">Laporan 552M</a></li>
                <li><a href="{{ url('/KEW13') }}">Laporan KEW-13</a></li>
                <li><a href="{{ url('/KEW9') }}">Laporan KEW-9</a></li>
                @role('Admin Hospital')
                <li><a href="">Laporan Lampiran 3A</a></li>
                @endrole
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Statistik<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/bebankerja') }}">Beban Kerja</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Skop Ujian<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/home') }}">Option 1</a></li>
                <li><a href="{{ url('/home') }}">Option 2</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Research<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/home') }}">Option 1</a></li>
                <li><a href="{{ url('/home') }}">Option 2</a></li>
            </ul>
        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Program Kualiti<span class="caret"></span></a>
            <ul class="dropdown-menu">
                <li><a href="{{ url('/home') }}">NIA KPI HPIA</a></li>
                <li><a href="{{ url('/home') }}">EQAP</a></li>
            </ul>
        </li>
    </ul>
    @endif

    <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
        <!-- Authentication Links -->
        @if (Auth::guest())
        <!-- <li><a href="{{ url('/login') }}">Login</a></li> -->
        @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                @role(['admin', 'Admin Hospital'])
                <li><a href="{{ url('/user') }}"><i class="fa fa-btn fa-user"></i>Pengguna</a></li>
                <li><a href="{{ url('/template') }}"><i class="fa fa-btn fa-file-excel-o"></i>Borang Template</a></li>
                @endrole
            </ul>
        </li>
        @endif
    </ul>
</div>
</div>
</nav>

@yield('content')
</div>
    <footer class="footer">
      <div class="container">
        <p class="footer-text">Copyright 2016 © SPPB Sabah</p>
    </div>
    </footer>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>

    <script>
        $(document).ready(function(){
            $('#myTable').DataTable();
        });
    </script>
    
</body>
</html>
