@extends('layouts.admin.main')
@section('container')

@if (session()->has('pesan'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Berhasil</strong> {{ Session::get('pesan') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
<div class="main-card mb-3 card">
    <div class="card-body">
        <table class="mb-0 table table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama Menu</th>
                    <th>Jumlah Pesanan</th>
                    <th>Detail Pesanan</th>
                </tr>
            </thead>
            <tbody>
                {{-- @dd($orderDetail->first()->order->first()->orderdetail->first()->menu->nama_menu) --}}
                {{-- @dd($orderDetail) --}}
                @foreach ($orderDetail as $row )
                {{-- @dd($row) --}}
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $row->order->first()->orderdetail->id }}</td>
                    <td>{{ $row }}</td>
                    <td>{{ $row->status_user }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
