@extends('layouts.master')

@section('title', 'Halaman Pasien')

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

    <!-- Start:: row-4 -->
    <div class="row">
        <div class="col-xl-12">
            <div class="card custom-card">
                <div class="card-header justify-content-between d-flex">
                    <div class="card-title">File Export Datatable</div>
                    <a href="{{ route('pasien.create') }}" class="btn btn-primary"><i class="fe fe-plus"> |</i> Tambah</a>
                </div>
                <div class="card-body">
                    <table id="file-export" class="table table-bordered text-nowrap w-100">
                        <thead>
                            <tr>
                                <th width="1%">No</th>
                                <th>Nama</th>
                                <th>Jenis Kelamin</th>
                                <th>Disease Status</th>
                                <th width="10%">Planing</th>
                                <th width="10%">
                                    Implementation
                                </th>
                                <th width="10%">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pasiens as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->jenis_kelamin }}</td>
                                    <td>{{ $item->status_penyakit }}</td>
                                    <td>
                                        @if ($item->status_penyakit == 'Acute_pain')
                                            <a href="{{ route('pasien.plan.acutepain.index' ) }}" class="btn btn-success btn-sm"> <i class="fe fe-eye"> |</i> Add Plan </a>
                                        @elseif ($item->status_penyakit == 'Ineffective')
                                            <a href="{{ route('pasien.plan.ineffective.index' ) }}" class="btn btn-success btn-sm"> <i class="fe fe-eye"> |</i> Add Plan </a>
                                        @elseif ($item->status_penyakit == 'Hypervolemia')
                                            <a href="{{ route('pasien.plan.hypervolemia.index' ) }}" class="btn btn-success btn-sm"> <i class="fe fe-eye"> |</i> Add Plan </a>
                                        @elseif ($item->status_penyakit == 'Anxiety')
                                            <a href="{{ route('pasien.plan.anxiety.index' ) }}" class="btn btn-success btn-sm"> <i class="fe fe-eye"> |</i> Add Plan </a>
                                        @elseif ($item->status_penyakit == 'Risk')
                                            <a href="{{ route('pasien.plan.risk.index' ) }}" class="btn btn-success btn-sm"> <i class="fe fe-eye"> |</i> Add Plan </a>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-success btn-sm"> <i class="fe fe-eye"> |</i> Implementation </a>
                                    </td>
                                    <td>
                                        <a href="{{ route('pasien.edit', $item->id) }}" class="btn btn-warning btn-sm"><i class="fe fe-edit"> |</i> Edit
                                        </a>
                                        <a href="" class="btn btn-danger btn-sm"> <i class="fe fe-trash"> |</i>
                                            Delete </a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- End:: row-4 -->


@endsection
