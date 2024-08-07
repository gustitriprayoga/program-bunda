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


    <!-- End:: row-4 -->
    <div class="card custom-card">
        <div class="card-header">
            Test
        </div>
        <div class="card-body">
            <table id="file-export" class="table table-bordered text-nowrap w-100">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th>Patient</th>
                        <th>Outcome Criteria</th>
                        <th>Action Plan</th>
                        <th>Reduce Pain</th>
                        <th width="10%">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($acutePains as $item)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $item->pasiens }}</td>
                            <td>{{ $item->outcome_criteria }}</td>
                            <td>{{ $item->action_plan }}</td>
                            <td>{{ $item->reduce_pain }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


@endsection
