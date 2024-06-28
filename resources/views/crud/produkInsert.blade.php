@extends('layouts.app')

@section('heading')
    Tambah Produk
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <div class="left">
                  <h6 class="text-medium mb-30">Input Data Produk</h6>
                </div>
            </div>
              <!-- End Title -->

              <form action="/simpanProduk" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id_produk">
                <div class="input-style-1">
                    <label>Nama Produk</label>
                    <input type="text" name="nama_produk" placeholder="Enter nama produk" value="{{old('nama_produk')}}"/>
                    @error('nama_produk')
                        <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                    <!-- end alert-box -->
                    @enderror
                </div>
                <!-- end input -->
                <div class="input-style-1">
                    <label>Stok</label>
                    <input type="number" name="stok" placeholder="Enter stok" value="{{old('stok')}}"/>
                    @error('stok')
                        <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                    @enderror
                </div>
                <!-- end input -->
                <div class="input-style-1">
                    <label>Harga Satuan</label>
                    <input type="number" name="harga_satuan" placeholder="Enter harga satuan" value="{{old('harga_satuan')}}"/>
                    @error('harga_satuan')
                        <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                    @enderror
                </div>
                <!-- end input -->
                <div class="input-style-1">
                    <label>Foto</label>
                    <input type="file" name="foto" value="{{old('foto')}}"/>
                    @error('foto')
                        <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                    @enderror
                </div>
                <!-- end input -->
                <div class="input-style-1 accent-simpan">
                    <input type="submit" value="Simpan Data"/>
                </div>
                <!-- end input -->
            </form>

            <div class="kembali">
                <a href="/viewProduk" class="main-btn btn-kembali">Kembali</a>
            </div>
        </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Row -->
@endsection

