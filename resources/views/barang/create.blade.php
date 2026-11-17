@extends('layouts.admin')

@section('title', 'Tambah Data Barang')

@section('content')
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">TAMBAH DATA BARANG INVENTARIS</h1>
    <p class="mb-4">Silakan isi formulir di bawah ini untuk menambahkan barang.</p>

    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Formulir Tambah Barang</h6>
            <a href="{{ route('barang.index') }}" class="btn btn-secondary btn-sm shadow-sm">
                Kembali
            </a>
        </div>

        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('barang.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="kode_barang">Kode Barang</label>
                    <input
                        type="text"
                        name="kode_barang"
                        id="kode_barang"
                        class="form-control @error('kode_barang') is-invalid @enderror"
                        value="{{ old('kode_barang') }}"
                        placeholder="Contoh: INV_001"
                        required
                    >
                    @error('kode_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama_barang">Nama Barang</label>
                    <input
                        type="text"
                        name="nama_barang"
                        id="nama_barang"
                        class="form-control @error('nama_barang') is-invalid @enderror"
                        value="{{ old('nama_barang') }}"
                        placeholder="Contoh: LAPTOP ASUS"
                        required
                    >
                    @error('nama_barang')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input
                        type="text"
                        name="kategori"
                        id="kategori"
                        class="form-control @error('kategori') is-invalid @enderror"
                        value="{{ old('kategori') }}"
                        placeholder="Contoh: LAPTOP ASUS"
                        required
                    >
                    @error('kategori')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="Kondisi">Kondisi</label>
                    <select
                        name="Kondisi"
                        id="Kondisi"
                        class="form-control @error('Kondisi') is-invalid @enderror"
                        required
                    >
                        <option value="">-- Pilih Kondisi --</option>
                        <option value="Baik" {{ old('Kondisi') == 'Baik' ? 'selected' : '' }}>Baik</option>
                        <option value="Komputer & Jaringan" {{ old('Kondisi') == 'Komputer & Jaringan' ? 'selected' : '' }}>Komputer &amp; Jaringan</option>
                        <option value="Rusak Ringan" {{ old('Kondisi') == 'Rusak Ringan' ? 'selected' : '' }}>Rusak Ringan</option>
                        <option value="Rusak Berat" {{ old('Kondisi') == 'Rusak Berat' ? 'selected' : '' }}>Rusak Berat</option>
                    </select>
                    @error('Kondisi')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="jumlah">Jumlah</label>
                        <input
                            type="number"
                            name="jumlah"
                            id="jumlah"
                            class="form-control @error('jumlah') is-invalid @enderror"
                            value="{{ old('jumlah') }}"
                            min="0"
                            required
                        >
                        @error('jumlah')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="lokasi">lokasi</label>
                        <input
                            type="text"
                            name="lokasi"
                            id="lokasi"
                            class="form-control @error('lokasi') is-invalid @enderror"
                            value="{{ old('lokasi') }}"
                            min="0"
                            required
                        >
                        @error('lokasi')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input
                            type="date"
                            name="tanggal_masuk"
                            id="tanggal_masuk"
                            class="form-control @error('tanggal_masuk') is-invalid @enderror"
                            value="{{ old('tanggal_masuk', date('Y-m-d')) }}"
                            required
                        >
                        @error('tanggal_masuk')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-1"></i>
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection