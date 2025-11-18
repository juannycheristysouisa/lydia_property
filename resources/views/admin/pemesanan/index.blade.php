@extends('admin.layout')

@section('content')
<div class="admin-container">
    <h2 class="page-title"><i class="fas fa-calendar-check"></i> Daftar Pemesanan</h2>

    <div class="card-admin">
        <table class="table-admin">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Check-in</th>
                    <th>Check-out</th>
                    <th>Dewasa</th>
                    <th>Anak</th>
                    <th>Total Harga</th>
                    <th>Waktu</th>
                </tr>
            </thead>

            <tbody>
                @foreach($bookings as $b)
                <tr>
                    <td>{{ $b->name }}</td>
                    <td>{{ $b->nik }}</td>
                    <td>{{ $b->check_in }}</td>
                    <td>{{ $b->check_out }}</td>
                    <td>{{ $b->dewasa }}</td>
                    <td>{{ $b->anak }}</td>
                    <td>Rp {{ number_format($b->total_price) }}</td>
                    <td>{{ $b->created_at->format('d M Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection