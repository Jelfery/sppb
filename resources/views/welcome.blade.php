@extends('layouts.app')

@section('content')
<div class="container">
    <div class="panel panel-default">
        <img class="img-responsive" src="img/header_sppb.jpg">
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="date">
                {{$day}}, {{$date}}
            </div>
        </div>
    </div>

    <hr>
    
    @role('Admin Hospital')
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/store') }}">
        {{ csrf_field() }}

        <div class="form-group">
            <div class="col-xs-12 col-md-11" style="margin-bottom: 5px">
                <input id="announce" type="text" name="announce" class="form-control" value="{{ $ann->description }}" placeholder="Pengumuman">
            </div>
            <div class="col-xs-12 col-md-1">
                <button type="submit" class="btn btn-primary form-control">Umum</button>
            </div>
        </div>
    </form>
    @endrole

    <div class="marquee">
        <p>{{$ann->description}}</p>
    </div>

    <hr>

    <div class="row">
        <div class="col-md-3">
            <div class="panel panel-info panel-home">
                <div class="panel-heading">
                    <span class = "fa fa-btn fa-user"></span> &nbspProfil Pengguna
                </div>
                <div class="panel-body">
                    <p><i class="fa fa-btn fa-user"></i>{{$user->name}}</p>
                    <p><i class = "fa fa-btn fa-envelope-o"></i>{{$user->email}}</p>
                    <p><i class = "fa fa-btn fa-circle-o"></i><label class="label label-success">{{$role->name}}</label></p>
                    <p><i class = "fa fa-btn fa-hospital-o"></i>{{$user->hospital->name}}</p>
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
</div>
@endsection
