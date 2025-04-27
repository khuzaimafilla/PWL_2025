@extends('layouts.template')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Daftar Transaksi Penjualan</h3>
            <div class="card-tools">
                <a href="{{ url('/penjualan/export_excel') }}" class="btn btn-danger">Export Transaksi Penjualan</a>
                <button onclick="modalAction('{{ url('penjualan/create_ajax') }}')" class="btn btn-warning">
                    Tambah Transaksi
                </button>
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <div class="row">
                <div class="col-md-12">
                    <div class="form-group row">
                        <label class="col-1 control-label col-form-label">Filter:</label>
                        <div class="col-3">
                            <select class="form-control" id="user_id" name="user_id" required>
                                <option value="">- Semua</option>
                                @foreach ($user as $item)
                                    <option value="{{ $item->user_id }}">{{ $item->nama }}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Kasir</small>
                        </div>
                    </div>
                </div>
            </div>

            <table class="table table-bordered table-sm table-striped table-hover" id="table-penjualan">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Transaksi</th>
                        <th>Pembeli</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Kasir</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>

    <div id="myModal" class="modal fade animate shake" tabindex="-1" data-backdrop="static" data-keyboard="false" data-width="75%"></div>
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment-with-locales.min.js"></script>
    <script>
        function modalAction(url = '') {
            $('#myModal').load(url, function () {
                $('#myModal').modal('show');
            });
        }

        function showDetail(url) {
            $('#myModal').load(url, function () {
                $('#myModal').modal('show');
            });
        }

        var tablePenjualan;
        $(document).ready(function () {
            tablePenjualan = $('#table-penjualan').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ url('penjualan/list') }}",
                    type: "POST",
                    data: function (d) {
                        d.user_id = $('#user_id').val();
                        d._token = "{{ csrf_token() }}";
                    }
                },
                columns: [
                    {
                        data: "DT_RowIndex",
                        name: "DT_RowIndex",
                        className: "text-center",
                        width: "5%",
                        orderable: false
                    },
                    {
                        data: "penjualan_kode",
                        name: "penjualan_kode",
                        className: "text-center",
                        width: "15%"
                    },
                    {
                        data: "pembeli",
                        name: "pembeli",
                        className: "text-left",
                        width: "15%"
                    },
                    {
                        data: "penjualan_tanggal",
                        name: "penjualan_tanggal",
                        className: "text-center",
                        width: "15%"
                    },
                    {
                        data: "total",
                        name: "total",
                        className: "text-left",
                        width: "10%",
                        render: function (data) {
                            return `<span class="font-weight-bold">${data}</span>`;
                        }
                    },
                    {
                        data: "nama",
                        name: "user.nama",
                        className: "text-center",
                        width: "15%"
                    },
                    {
                        data: "aksi",
                        name: "aksi",
                        className: "text-center",
                        width: "20%",
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $('#table-penjualan_filter input').unbind().bind().on('keyup', function (e) {
                if (e.keyCode == 13) {
                    tablePenjualan.search(this.value).draw();
                }
            });

            $('#user_id').on('change', function(){
                tablePenjualan.ajax.reload();
            })
        });
    </script>
@endpush