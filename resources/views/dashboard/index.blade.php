@extends('layouts.master')

@section('title', 'Halaman Dashboard')

@section('content')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <h1 class="page-title my-auto"> {{ $pageTitle['titleHalaman'] }} </h1>
        <div>
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="javascript:void(0)">{{ $pageTitle['subTitle'] }}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">{{ $pageTitle['activePage'] }}</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="card card-custom">
        <div class="card-header">
            <h3 class="card-title">Selamat Datang di Halaman Dashboard</h3>
        </div>
        <div class="card-body">
            <p>Halaman ini merupakan halaman dashboard</p>
        </div>
    </div>


@endsection
