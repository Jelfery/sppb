@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <img class="img-responsive" src="img/header_sppb.jpg">
    </div>
    <h3>hahahahhaah</h3>
    <div class="row">
        <div class="col-md-12">
            <div class="date">
                {{$day}}, {{$date}}
            </div>
        </div>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-info panel-home">
                <div class="panel-heading">
                    <span class = "glyphicon glyphicon-user"></span> &nbspProfil Pengguna
                </div>
                <div class="panel-body">
                    <span class = "glyphicon glyphicon-envelope"></span>&nbsp elizabeth@gmail.com
                </div>
            </div>    
        </div>
        <div class="col-md-3">
            <div class="panel panel-default panel-home">
                <div class="panel-heading">
                    Perjawatan & Latihan
                </div>
                <div class="panel-body">
                    <li><a href="{{ url('/home') }}">Option 1</a></li>
                    <li><a href="{{ url('/home') }}">Option 2</a></li>
                </div>
            </div>    
        </div>
        <div class="col-md-3">
            <div class="panel panel-default panel-home">
                <div class="panel-heading">
                    Pengurusan Aset
                </div>
                <div class="panel-body">
                    <li><a href="{{ url('/home') }}">Option 1</a></li>
                    <li><a href="{{ url('/home') }}">Option 2</a></li>
                </div>
            </div>    
        </div>
        <div class="col-md-3">
            <div class="panel panel-default panel-home">
                <div class="panel-heading">
                    Pengurusan Bajet
                </div>
                <div class="panel-body">
                    <li><a href="{{ url('/dummyvot') }}">Dummy Vot</a></li>
                    <li><a href="{{ url('/552M') }}">Laporan 552M</a></li>
                    <li><a href="{{ url('/KEW9') }}">Laporan KEW-9</a></li>
                    <li><a href="{{ url('/KEW13') }}">Laporan KEW-13</a></li>
                </div>
            </div>    
        </div>
    </div>

    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-default panel-home">
                <div class="panel-heading">
                    </span> Statistik
                </div>
                <div class="panel-body">
                    <li><a href="{{ url('/bebankerja') }}">Beban Kerja</a></li>
                </div>
            </div>    
        </div>
        <div class="col-md-3">
            <div class="panel panel-default panel-home">
                <div class="panel-heading">
                    Skop Ujian
                </div>
                <div class="panel-body">
                    <li><a href="{{ url('/home') }}">Option 1</a></li>
                    <li><a href="{{ url('/home') }}">Option 2</a></li>
                </div>
            </div>    
        </div>
        <div class="col-md-3">
            <div class="panel panel-default panel-home">
                <div class="panel-heading">
                    Research
                </div>
                <div class="panel-body">
                    <li><a href="{{ url('/home') }}">Option 1</a></li>
                    <li><a href="{{ url('/home') }}">Option 2</a></li>
                </div>
            </div>    
        </div>
        <div class="col-md-3">
            <div class="panel panel-default panel-home">
                <div class="panel-heading">
                    Program Kualiti
                </div>
                <div class="panel-body">
                    <li><a href="{{ url('/home') }}">NIA KPI HPIA</a></li>
                    <li><a href="{{ url('/home') }}">EQAP</a></li>
                </div>
            </div>    
        </div>
    </div>

    <!-- <div class="col-md-3">
        <div class="card">
            <div class="container">
            <span class = "glyphicon glyphicon-search"></span>
                <h4><b>John Doe</b></h4> 
                <p>Architect & Engineer</p> 
            </div>
        </div>    
    </div> -->
</div>
@endsection
