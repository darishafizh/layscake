@extends('layouts.app')

@section('content')
    <div class="section-header">
        <div class="section-header-back">
            <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
        </div>
        <h1>{{ $title }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">{{ $title }}</div>
        </div>
    </div>

    <div class="section-body">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Create New Product</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="text" id="nama" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Harga Satuan</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="number" id="harga-satuan" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stok</label>
                            <div class="col-sm-12 col-md-7">
                                <input type="number" id="stok" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
                            <div class="col-sm-12 col-md-7">
                                <div id="image-preview" class="image-preview">
                                    <label for="image-upload" id="image-label">Choose File</label>
                                    <input type="file" name="image" class="foto" id="image-upload" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                            <div class="col-sm-12 col-md-7">
                                <button class="btn btn-primary" id="submit-product">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).on('click', '#submit-product', function() {
            const nama = $('#nama').val();
            const harga_satuan = $('#harga-satuan').val();
            const stok = $('#stok').val();
            const foto = $('#foto')[0].files[0];

            let formData = new FormData();
            formData.append('_token', "{{ csrf_token() }}");
            formData.append('nama', nama);
            formData.append('harga_satuan', harga_satuan);
            formData.append('stok', stok);
            formData.append('foto', foto);

            $.ajax({
                url: "{{ route('product.store') }}",
                method: 'POST',
                cache: false,
                contentType: false,
                processData: false,
                data: formData,
                beforeSend: function() {
                    console.log('Memulai permintaan...');
                },
                success: function(response) {
                    console.log('Hasil:', response);
                },
                error: function(xhr, status, error) {
                    console.error('Kesalahan:', error);
                }
            });
        });
    </script>
@endpush
