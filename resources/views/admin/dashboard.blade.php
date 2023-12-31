@extends('layouts.master')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="fas fa-download h3 mb-0 text-gray-800">Dashboard</h1>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-3">
            <a class="nav-link" href="/jurnal">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Refrensi Jurnal</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-book fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <a>
        </div>

         <!-- Earnings (Monthly) Card Example -->
         <div class="col-xl-4 col-md-6 mb-3">
            <a class="nav-link" href="{{ route('alternatif.index') }}">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Data Alternatif</div>
                                {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> --}}
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-fax fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-3">
            <a class="nav-link" href="{{ route('pilihan.index') }}">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Data Kriteria</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-table fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-3">
            <a class="nav-link" href="{{ route('subkriteria.index') }}">
                <div class="card border-left-secondary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Data Sub Kriteria</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <a>
        </div>

       

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-3">
            <a class="nav-link" href="{{ route('matrix.index') }}">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Data Matrix</div>
                                {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> --}}
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-3">
            <a class="nav-link" href="{{ route('perhitungan') }}">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Data Perhitungan</div>
                                {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> --}}
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calculator fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <a>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-3">
            <a class="nav-link" href="{{ route('hasilAkhir') }}">
                <div class="card border-left-dark shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Data Hasil Akhir</div>
                                {{-- <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div> --}}
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-paste fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <a>
        </div>


    </div>
</div>
@endsection