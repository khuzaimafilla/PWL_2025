@extends('layouts.template')

@section('content')
    <div class="card bg-dark text-white">
        <div class="card-header bg-dark text-white">
            <h3 class="card-title">{{ $page->title }}</h3>
            <div class="card-tools">
                <a href="{{ url('/level/export_excel') }}" class="btn btn-danger">Export Excel</a>
                <button onclick="modalAction('{{ url('/level/import') }}')" class="btn btn-warning">Import Level</button>
                <a href="{{ url('/level/export_pdf') }}" class="btn btn-danger">Export PDF</a>
                <button onclick="modalAction('{{ url('/level/create_ajax') }}')" class="btn btn-warning">Tambah Data</button>
            </div>
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            <table class="table table-bordered table-striped table-hover table-sm" id="table_level">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kode Level</th>
                        <th>Nama Level</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
    <div id="myModal" class="modal fade animate shake" tabindex="-1" role="dialog" data- backdrop="static" data-keyboard="false" data-width="75%" aria-hidden="true"></div> 
@endsection

@push('css') 
@endpush

@push('js')
    <script>
        function modalAction(url = ''){
            $('#myModal').load(url,function(){
                $('#myModal').modal('show');
            });
        }

        $(document).ready(function() {
            var dataUser = $('#table_level').DataTable
            ({
                // serverSide: true, jika ingin menggunakan server side processing 
                serverSide: true,
                ajax: {
                    "url": "{{ url('level/list') }}", 
                    "dataType": "json",
                    "type": "POST",
                },
                columns: 
                [
                    {
                        data: "DT_RowIndex",
                        className: "text-center",
                        orderable: false, 
                        searchable: false
                    },{
                        data: "level_kode",  
                        className: "",
                        orderable: true,
                        searchable: true
                    },{
                        data: "level_nama",
                        className: "", 
                        orderable: true, 
                        searchable: true
                    },{
                        data: "aksi",
                        className: "", 
                        orderable: false, 
                        searchable: false
                    }
                ]
            });
        });
    </script> 
@endpush