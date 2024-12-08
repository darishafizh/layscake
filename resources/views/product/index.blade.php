@extends('layouts.app')

@section('content')
    <div class="section-header">
        <h1>{{ $title }}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item">{{ $title }}</div>
        </div>
    </div>


    <div class="section-body">
        <h2 class="section-title">{{ $title }}</h2>
        <p class="section-lead">
            Manage your <a href="#" class="active">{{ $title }}</a>
        </p>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4></h4>
                        <div class="card-header-action">
                            <a href="{{ route('product.create') }}" class="btn btn-icon icon-left btn-success"
                                id="btn-create"><i class="fas fa-plus"></i>Create</a>
                            <div class="dropdown">
                                <a href="#" class="dropdown-toggle btn btn-primary" data-toggle="dropdown">Action</a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="#" class="dropdown-item has-icon">
                                        Edit</a>
                                    <a href="#" class="dropdown-item has-icon">
                                        Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped product-table" id="table-2">
                                <thead>
                                    <tr>
                                        <th class="text-center">
                                            <div class="custom-checkbox custom-control">
                                                <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad"
                                                    class="custom-control-input" id="checkbox-all">
                                                <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Product</th>
                                        <th>Harga Satuan</th>
                                        <th>Stok</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        $(document).ready(function() {
            loadDataAjax()
        });

        function loadDataAjax() {
            if ($.fn.DataTable.isDataTable('.product-table')) {
                $('.product-table').DataTable().destroy();
            }

            $('.product-table').DataTable({
                processing: true,
                serverSide: true,
                searching: true,
                ajax: {
                    url: "{{ route('product.data_ajax') }}",
                },
                lengthMenu: [
                    [10, 25, 50, 100, 250, 500],
                    [10, 25, 50, 100, 250, 500]
                ],
                autoWidth: "100%",
                // scrollX: true,
                "initComplete": function(settings, json) {
                    $('.product-table').wrap(
                        "<div style='overflow:auto; width:100%;position:relative;'></div>");
                },
                columns: [{
                        data: 'checkbox',
                        name: 'checkbox',
                        className: 'text-center'
                    },
                    {
                        data: 'product',
                        name: 'product'
                    },
                    {
                        data: 'harga_satuan',
                        name: 'harga_satuan'
                    },
                    {
                        data: 'stok',
                        name: 'stok'
                    },
                ],
                "ordering": false
            });
        }
    </script>
@endpush
