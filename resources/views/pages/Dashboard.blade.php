@extends('layouts.app')

@section('heading')
Dashboard
@endsection

@section('content')
<div class="row">
  <div class="col-lg-7">
    <div class="card-style mb-30">
      <div class="title d-flex flex-wrap justify-content-between">
        <div class="left">
          <h6 class="text-medium mb-10">Total Pendapatan</h6>
          <h3 class="text-bold accent">$245,479</h3>
        </div>
        <div class="right">
          <div class="select-style-1">
            <div class="select-position select-sm">
              <select class="light-bg">
                <option value="">Tahunan</option>
                <option value="">Bulanan</option>
                <option value="">Mingguan</option>
              </select>
            </div>
          </div>
          <!-- end select -->
        </div>
      </div>
      <!-- End Title -->
      <div class="chart">
        <canvas id="Chart1" style="width: 100%; height: 400px; margin-left: -35px;"></canvas>
      </div>
      <!-- End Chart -->
    </div>
  </div>
  <!-- End Col -->
  <div class="col-lg-5">
    <div class="card-style mb-30">
      <div class="title d-flex flex-wrap align-items-center justify-content-between">
        <div class="left">
          <h6 class="text-medium mb-30">Produk Terlaris</h6>
        </div>
        <div class="right">
          <div class="select-style-1">
            <div class="select-position select-sm">
              <select class="light-bg">
                <option value="">Tahunan</option>
                <option value="">Bulanan</option>
                <option value="">Mingguan</option>
              </select>
            </div>
          </div>
          <!-- end select -->
        </div>
      </div>
      <!-- End Title -->
      <div class="chart">
        <canvas id="Chart2" style="width: 100%; height: 400px; margin-left: -45px;"></canvas>
      </div>
      <!-- End Chart -->
    </div>
  </div>
  <!-- End Col -->
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card-style mb-30">
      <div class="title d-flex flex-wrap justify-content-between align-items-center">
        <div class="left">
          <h6 class="text-medium mb-30">Penjualan Terakhir</h6>
        </div>
        <div class="right">
          <a href="/viewPenjualan" class="text-link accent">Lihat selengkapnya</a>
        </div>
      </div>
      <!-- End Title -->
      <div class="table-responsive">
        <table class="table top-selling-table">
          <thead>
            <tr>
              <th>
                <h6 class="text-sm text-medium">Produk</h6>
              </th>
              <th class="min-width">
                <h6 class="text-sm text-medium">QTY</h6>
              </th>
              <th class="min-width">
                <h6 class="text-sm text-medium">Harga Satuan</h6>
              </th>
              <th class="min-width">
                <h6 class="text-sm text-medium">Total Harga</h6>
              </th>
              <th class="min-width">
                <h6 class="text-sm text-medium">Tanggal</h6>
              </th>
              <th class="min-width">
                <h6 class="text-sm text-medium">Pembeli</h6>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="product">
                  <div class="image">
                    <img src="assets/images/products/product-mini-1.jpg" alt="" />
                  </div>
                  <p class="text-sm">Brownies</p>
                </div>
              </td>
              <td>
                <p class="text-sm">2</p>
              </td>
              <td>
                <p class="text-sm">Rp 20.000</p>
              </td>
              <td>
                <p class="text-sm">Rp 40.000</p>
              </td>
              <td>
                <p class="text-sm">10-09-2023</p>
              </td>
              <td>
                <p class="text-sm">Surgawi</p>
              </td>
              <td>
                <!-- <div class="action justify-content-end">
                  <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="lni lni-more-alt"></i>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
                    <li class="dropdown-item">
                      <a href="#0" class="text-gray">Remove</a>
                    </li>
                    <li class="dropdown-item">
                      <a href="#0" class="text-gray">Edit</a>
                    </li>
                  </ul>
                </div> -->
              </td>
            </tr>
          </tbody>
        </table>
        <!-- End Table -->
      </div>
    </div>
  </div>
  <!-- End Col -->
</div>
<!-- End Row -->
@endsection
