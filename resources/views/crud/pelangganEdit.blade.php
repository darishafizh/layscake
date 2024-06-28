@extends('layouts.app')

@section('heading')
    Edit Pelanggan
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap justify-content-between align-items-center">
                <div class="left">
                  <h6 class="text-medium mb-30">Edit Data Pelanggan</h6>
                </div>
            </div>
              <!-- End Title -->

              <form action="/updatePelanggan/{{ $pelanggan->id_pelanggan }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <input type="hidden" name="id_pelanggan" value="{{ $pelanggan->id_pelanggan }}">

                <div class="input-style-1">
                    <label>Nama Pelanggan</label>
                    <input type="text" name="nama_pelanggan" placeholder="Enter nama pelanggan" value="{{ old('nama_pelanggan', $pelanggan->nama_pelanggan) }}"/>
                    @error('nama_pelanggan')
                        <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                    @enderror
                </div>
                <!-- end input -->

                <div class="input-style-1">
                    <label>Alamat</label>
                    <input type="text" name="alamat" placeholder="Enter alamat" value="{{ old('alamat', $pelanggan->alamat) }}"/>
                    @error('alamat')
                        <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                    @enderror
                </div>
                <!-- end input -->

                <div class="input-style-1">
                    <label>Nomor HP</label>
                    <input type="text" name="hp_pelanggan" placeholder="Enter nomor hp" value="{{ old('hp_pelanggan', $pelanggan->hp_pelanggan) }}"/>
                    @error('hp_pelanggan')
                        <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                    @enderror
                </div>
                <!-- end input -->

                <div class="input-style-1 accent-simpan">
                    <input type="submit" value="Update Data"/>
                </div>
                <!-- end input -->
            </form>

            <div class="kembali">
                <a href="/viewPelanggan" class="main-btn btn-kembali">Kembali</a>
            </div>
        </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Row -->
@endsection
