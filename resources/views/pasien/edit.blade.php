@extends('layouts.master')

@section('title', 'Halaman Edit Data Pasien')

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

    <div class="card card-custom">
        <div class="card-header">
            Tambah Data Pasien
        </div>
        <div class="card-body">
            <form action="{{ route('pasien.update', $pasien->id ) }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group mb-2">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $pasien->nama }}"
                        placeholder="Masukkan Nama Pasien">
                </div>

                <div class="form-group mb-2">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="jenis_kelamin" class="form-control">
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="alamat">Alamat</label>
                    <textarea name="alamat" id="alamat" class="form-control" placeholder="Masukkan Alamat Pasien" value="{{ $pasien->alamat }}">
                        {{ $pasien->alamat }}
                    </textarea>
                </div>
                <div class="form-group mb-2">
                    <label for="no_telp">No HP</label>
                    <input type="text" name="no_telp" id="no_telp" class="form-control"
                        placeholder="Masukkan No HP Pasien" value="{{ $pasien->no_telp }}">
                </div>
                <div class="form-group mb-2">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"
                        placeholder="Masukkan Tanggal Lahir Pasien" value="{{ $pasien->tgl_lahir }}">
                </div>
                <div class="form-group mb-2">
                    <label for="pekerjaan">Pekerjaan</label>
                    <input type="text" name="pekerjaan" id="pekerjaan" class="form-control"
                        placeholder="Masukkan Pekerjaan Pasien" value="{{ $pasien->pekerjaan }}">
                </div>
                <div class="form-group mb-2">
                    <label for="agama">Agama</label>
                    <input type="text" name="agama" id="agama" class="form-control"
                        placeholder="Masukkan Agama Pasien" value="{{ $pasien->agama }}">
                </div>
                <div class="form-group mb-2">
                    <label for="status">Status</label>
                    <select name="status" id="status" class="form-control">
                        <option value="{{ $pasien->status }}">{{ $pasien->status }}</option>
                        <option value="Menikah">Menikah</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                    </select>
                </div>
                <div class="form-group mb-2">
                    <label for="gol_darah">Golongan Darah</label>
                    <select name="gol_darah" id="gol_darah" class="form-control">
                        <option value="{{ $pasien->gol_darah }}"> {{ $pasien->gol_darah }} </option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="AB">AB</option>
                        <option value="O">O</option>
                    </select>
                </div>
                <div class="form-group mb-2 justify-content-between d-flex">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('pasien.index') }}" class="btn btn-primary"> Kembali </a>
                </div>
            </form>
        </div>
    </div>

@endsection
