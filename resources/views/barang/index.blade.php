@extends('layouts.admin')

@section('title', 'Tambah Data Barang')

@push('styles')
    <link href="{{ asset('vendor/datatables/dataTables.boostrap.min.css') }}" rel="stylesheet">
@endpush

@section('content')
<!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">TAMBAH DATA BARANG INVENTARIS</h1>
                    <p class="mb-4">Silahkan isi formulir dibawah ini untuk menambahkan barang.</p>

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <a href="{{ route('barang.create') }}"> 
                                <i class="fas/fa-plus fa-sm"></i>
                                Formulir Tambah Barang
                                </a>   
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Kategori</th>
                                            <th>Kondisi</th>
                                            <th>Jumlah</th>
                                            <th>Lokasi</th>
                                            <th>Tanggal Masuk</th>            
                                       </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($barangs as $index => $barang)
                                        <tr>
                                            <td>{{ $index + 1}}</td>
                                            <td>{{ $barang->kode_barang}}</td>
                                            <td>{{ $barang->nama_barang}}</td>
                                            <td>{{ $barang->kategori}}</td>
                                            <td>
                                                @if ($barang->kondisi == 'Baik')
                                                    <span class="badge badge-success">Baik</span>
                                                @elseif($barang->kondisi == 'Rusak Ringan')
                                                    <span class="badge badge-warning">Rusak Ringan</span> 
                                                @else
                                                     <span class="badge badge-danger">Rusak Berat</span> 
                                                @endif
                                            </td>
                                            <td>{{ $barang->jumlah }}</td>
                                            <td>{{ $barang->lokasi}}</td>
                                            <td>{{ $barang->tanggal_masuk ?? '-'}}</td>
                                         </tr>
                                         @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->





@endsection

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>



