@extends('layouts.app')

@section('heading')
    Tambah Penjualan
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card-style mb-30">
                <div class="title d-flex flex-wrap justify-content-between align-items-center">
                    <div class="left">
                        <h6 class="text-medium mb-30">Input Data Penjualan</h6>
                    </div>
                </div>
                <!-- End Title -->

                <form action="/simpanPenjualan" method="post" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="input-style-1">
                                <label>ID Penjualan</label>
                                <input type="number" disabled name="id_penjualan" placeholder="ID penjualan" />
                            </div>
                            <!-- end input -->

                            <div class="input-style-1">
                                <label>Tanggal</label>
                                <input type="date" id="input-tanggal" name="tanggal_penjualan" />
                                @error('tanggal_penjualan')
                                    <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                                @enderror
                            </div>
                            <!-- end input -->


                            <div class="select-style-1">
                                <label>Nama Pegawai</label>
                                <div class="select-position">
                                    <select name="id_user">
                                        <option value="">Pilih pegawai</option>
                                        @foreach ($namaPelanggan as $item)
                                            <option value="{{ $item->id_pelanggan }}">{{ $item->nama_pelanggan }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_user')
                                        <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end select -->


                            <div class="select-style-1">
                                <label>Nama Pelanggan</label>
                                <div class="select-position">
                                    <select name="id_pelanggan">
                                        <option selected disabled>Pilih pelanggan</option>
                                        @foreach ($namaPelanggan as $item)
                                            <option value="{{ $item->id_pelanggan }}">{{ $item->nama_pelanggan }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_pelanggan')
                                        <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end select -->

                        </div>

                        <div class="col-md-6">
                            <div class="select-style-1">
                                <label>Nama Produk</label>
                                <div class="select-position">
                                    <select id="select-produk" onchange="selectProduk()" name="id_produk">
                                        <option selected disabled value="default">Pilih produk</option>
                                        @foreach ($namaProduk as $item)
                                            <option value="{{ $item->id_produk }}">{{ $item->nama_produk }}</option>
                                        @endforeach
                                    </select>
                                    @error('id_produk')
                                        <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                                    @enderror
                                </div>
                            </div>
                            <!-- end select -->


                            <div class="input-style-1">
                                <label>Harga Satuan</label>
                                <input type="number" placeholder="Enter harga satuan" name="harga_satuan" id="hargaSatuan"
                                    readonly />
                                @error('harga_satuan')
                                    <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                                @enderror
                            </div>
                            <!-- end input -->


                            <div class="input-style-1">
                                <label>Jumlah</label>
                                <input type="number" placeholder="Enter jumlah" id="jumlah" name="jumlah" />
                                @error('jumlah')
                                    <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                                @enderror
                            </div>
                            <!-- end input -->


                            <div class="input-style-1">
                                <label>Total Harga</label>
                                <input type="number" placeholder="Enter total harga" id="totalHarga" name="total_harga" />
                                @error('total_harga')
                                    <span class="error-validasi">{{ $message }} <i class="lni lni-ban"></i></span>
                                @enderror
                            </div>
                            <!-- end input -->

                        </div>
                    </div>

                    <div class="input-style-1 accent-simpan">
                        <input type="submit" value="Simpan Data" />
                    </div>
                    <!-- end input -->
                </form>

                <div class="kembali">
                    <a href="/viewPenjualan" class="main-btn btn-kembali">Kembali</a>
                </div>
            </div>
        </div>
        <!-- End Col -->
    </div>
    <!-- End Row -->
@endsection


<script>
    // Autofill Harga Satuan
    function selectProduk() {
        let select = document.getElementById('select-produk');
        let hargaSatuan = document.getElementById('hargaSatuan');
        let produkId = select.value;

        if (produkId === 'default') {
            hargaSatuan.value = '';
        } else {
            fetch(`/produk/${produkId}`)
                .then(response => {
                    if (!response.ok) {
                        return response.text().then(text => {
                            throw new Error(`Network response was not ok: ${text}`);
                        });
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.harga_satuan) {
                        hargaSatuan.value = data.harga_satuan;
                    } else {
                        hargaSatuan.value = '';
                        console.error('Produk tidak ditemukan atau harga_satuan tidak tersedia');
                    }
                })
                .catch(error => {
                    console.error('Error:', error.message);
                });
        }
    }

    // Autofill Total Harga
    document.addEventListener('DOMContentLoaded', function() {
        let hargaSatuan = document.getElementById('hargaSatuan');
        let jumlah = document.getElementById('jumlah');
        let totalHarga = document.getElementById('totalHarga');

        jumlah.addEventListener('input', function() {
            let harga = parseFloat(hargaSatuan.value) || 0;
            let qty = parseFloat(jumlah.value) || 0;
            totalHarga.value = harga * qty;
        });
    });

    // Automatic Today Date
    document.addEventListener('DOMContentLoaded', (event) => {
        const inputTanggal = document.getElementById('input-tanggal');
        if (inputTanggal) {
            const today = new Date();
            const formattedDate = today.toISOString().split('T')[0];
            inputTanggal.value = formattedDate;
        }
    });
</script>
