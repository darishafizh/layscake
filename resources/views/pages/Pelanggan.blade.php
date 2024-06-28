@extends('layouts.app')

@section('heading')
Data Pelanggan
@endsection

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card-style mb-30">
            <div class="title d-flex flex-wrap justify-content-between align-items-center mb-5">
              <div class="left">
                <div class="search-bar d-none d-md-flex">
                    <form action="/cariPelanggan" method="GET" class="mr-15">
                        <div class="search-container">
                            <input type="text" name="searchInput" placeholder="Cari pelanggan" onsubmit="clearSearch()"/>
                            <i class="lni lni-search-alt"></i>
                            <input type="submit" class="main-btn btn-hover accent-btn ms-1" value="Cari">
                        </div>
                    </form>
                </div>
              </div>
              <div class="right d-md-flex">
                <a href="/insertPelanggan" class="main-btn btn-hover accent-btn">
                    Pelanggan
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
                              <th></th>
                              <th>
                                <h6>Nama Pelanggan</h6>
                              </th>
                              <th>
                                <h6>Alamat</h6>
                              </th>
                              <th>
                                <h6>Nomor HP</h6>
                              </th>
                              <th>
                                <h6>Aksi</h6>
                              </th>
                            </tr>
                            <!-- end table row-->
                          </thead>
                          <tbody>
                            @foreach ($tampil as $x)
                            <tr>
                                <td>
                                  <h6 class="text-sm">#1</h6>
                                </td>
                                <td>
                                  <p>{{ $x->nama_pelanggan }}</p>
                                </td>
                                <td>
                                  <p>{{ $x->alamat }}</p>
                                </td>
                                <td>
                                  <p>{{ $x->hp_pelanggan }}</p>
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
                        <!-- end table -->
                      </div>
                </div>
                <!-- End Col -->
        </div>
    </div>
</div>
@endsection
