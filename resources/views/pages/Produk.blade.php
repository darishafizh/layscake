@extends('layouts.app')

@section('heading')
Data Produk
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap justify-content-between align-items-center mb-5">
              <div class="left">
                <div class="search-bar d-none d-md-flex">
                    <form action="/cariProduk" method="GET" class="mr-15">
                        <div class="search-container">
                            <input type="text" name="searchInput" placeholder="Cari produk"/>
                            <i class="lni lni-search-alt"></i>
                            <input type="submit" class="main-btn btn-hover accent-btn ms-1" value="Cari">
                        </div>
                    </form>
                </div>
              </div>
              <div class="right d-md-flex">
                <a href="/insertProduk" class="main-btn btn-hover accent-btn">
                    Produk
                    <i class="lni lni-plus"></i>
                </a>
              </div>
            </div>
            <!-- End Title -->
            <div class="row">
                @foreach ( $tampil as $x)
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 produk">
                <div class="card-style-2 mb-30">
                  <div class="card-image">
                      <img src="{{ $x->foto_produk }}" alt="" />
                  </div>
                  <div class="card-content">
                    <h5 class="text-center accent mb-2">{{ $x->nama_produk }}</h5>
                    <div class="row">
                        <div class="col-md-10 spesifikasi">
                            <p class="text-sm">Harga : <span>Rp. {{ number_format($x->harga_satuan) }}</span></p>
                            <p class="text-sm">Stok : <span>{{ $x->stok }}</span></p>
                        </div>
                        <div class="col-md-2">
                            <div class="action action-produk">
                                <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown"
                                  aria-expanded="false">
                                  <i class="lni lni-more-alt accent"></i>
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                  <li class="dropdown-item">
                                    <a href="/editProduk/{{ $x->id_produk }}" class="text-gray">Edit</a>
                                  </li>
                                  <li class="dropdown-item">
                                    <a href="/hapusProduk/{{ $x->id_produk }}" class="text-gray">Hapus</a>
                                  </li>
                                </ul>
                              </div>
                        </div>
                    </div>
                  </div>
                </div>
            </div>
            @endforeach
            <!-- end col -->
            </div>
        </div>
    </div>
</div>
@endsection
