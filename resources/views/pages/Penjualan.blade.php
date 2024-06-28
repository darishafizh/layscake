@extends('layouts.app')

@section('heading')
Data Penjualan
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap justify-content-between align-items-center mb-5">
              <div class="left">
                <div class="search-bar d-none d-md-flex">
                    <form action="/cariPenjualan" method="GET" class="mr-15">
                        <div class="search-container">
                            <input type="text" name="searchInput" placeholder="Cari data" onsubmit="clearSearch()"/>
                            <i class="lni lni-search-alt"></i>
                            <input type="submit" class="main-btn btn-hover accent-btn ms-1" value="Cari">
                        </div>
                    </form>
                </div>
              </div>
              <div class="right d-md-flex">
                <a href="/ekspor" class="border-accent"><i class="lni lni-save"></i></a>
                <a href="/insertPenjualan" class="main-btn btn-hover accent-btn">
                    Penjualan
                    <i class="lni lni-plus"></i>
                </a>
              </div>
            </div>
            <!-- End Title -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-wrapper table-responsive">
                        <table class="table striped-table">
                          <thead>
                            <tr>
                              <th>
                                <h6>Produk</h6>
                              </th>
                              <th>
                                <h6>QTY</h6>
                              </th>
                              <th>
                                <h6>Harga Satuan</h6>
                              </th>
                              <th>
                                <h6>Total Harga</h6>
                              </th>
                              <th>
                                <h6>Tanggal</h6>
                              </th>
                              <th>
                                <h6>Pembeli</h6>
                              </th>
                              <th>
                                <h6>Aksi</h6>
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($tampil as $x)
                            <tr>
                                <td>
                                  <div class="product">
                                    <div class="image">
                                      <img src="{{ $x->produk->foto_produk }}" alt="" />
                                    </div>
                                    <p class="text-sm">{{ $x->produk->nama_produk }}</p>
                                  </div>
                                </td>
                                <td>
                                  <p class="text-sm">{{ $x->jumlah }}</p>
                                </td>
                                <td>
                                    <p class="text-sm">Rp. {{ number_format($x->produk->harga_satuan) }}</p>
                                </td>
                                <td>
                                  <p class="text-sm">Rp. {{ number_format($x->total_harga) }}</p>
                                </td>
                                <td>
                                  <p class="text-sm">{{ $x->tanggal_penjualan }}</p>
                                </td>
                                <td>
                                  <p class="text-sm">{{ $x->pelanggan->nama_pelanggan }}</p>
                                </td>
                                <td>
                                  <div class="action">
                                    <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown"
                                      aria-expanded="false">
                                      <i class="lni lni-more-alt accent"></i>
                                    </button>
                                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                                      <li class="dropdown-item">
                                        <a href="#0" class="text-gray">Edit</a>
                                      </li>
                                      <li class="dropdown-item">
                                        <a href="#0" class="text-gray">Hapus</a>
                                      </li>
                                    </ul>
                                  </div>
                                </td>
                              </tr>
                            @endforeach
                          </tbody>
                        </table>
                        <!-- End Table -->
                    </div>
                </div>
                <!-- End Col -->
            </div>
        </div>
    </div>
</div>
@endsection
