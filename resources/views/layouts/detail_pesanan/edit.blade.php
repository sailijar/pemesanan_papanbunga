@extends('layouts.template')

@section('title', 'Edit Detail Pesanan')

@section('headline')
    Edit Data Detail Pesanan
@endsection

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Edit Detail Pesanan</h4>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/detail_pesanan/' . $detail_pesanan->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="mb-3">
                                <label for="id_pelanggan" class="form-label">Pilih Pelanggan</label>
                                <select name="id_pelanggan" id="id_pelanggan" class="form-select" required>
                                    <option value="">-- Pilih Pelanggan --</option>
                                    @foreach ($pelanggan as $p)
                                        <option value="{{ $p->id }}"
                                            {{ $detail_pesanan->id_pelanggan == $p->id ? 'selected' : '' }}>
                                            {{ $p->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- ID Pesanan --}}
                            <div class="mb-3">
                                <label for="id_pesanan" class="form-label">ID Pesanan</label>
                                <input type="number" name="id_pesanan" id="id_pesanan" class="form-control"
                                    value="{{ $detail_pesanan->id_pesanan }}" required>
                            </div>

                            {{-- ID Produk --}}
                            {{-- <div class="mb-3">
                                <label for="id_produk" class="form-label">ID Produk</label>
                                <input type="number" name="id_produk" id="id_produk" class="form-control"
                                    value="{{ $detail_pesanan->id_produk }}" required>
                            </div> --}}

                            <div class="mb-3">
                                <label for="id_produk" class="form-label">Pilih Produk</label>
                                <select name="id_produk" id="id_produk" class="form-select" required>
                                    <option value="">-- Pilih Produk --</option>
                                    @foreach ($produk as $p)
                                        <option value="{{ $p->id }}"
                                            {{ $detail_pesanan->id_produk == $p->id ? 'selected' : '' }}>
                                            {{ $p->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Tanggal Pesan --}}
                            <div class="mb-3">
                                <label for="tgl_pesan" class="form-label">Tanggal Pesan</label>
                                <input type="date" class="form-control" id="tgl_pesan" name="tgl_pesan"
                                    value="{{ $detail_pesanan->tgl_pesan }}" required>
                            </div>

                            {{-- Tanggal Pengiriman --}}
                            <div class="mb-3">
                                <label for="tgl_pengiriman" class="form-label">Tanggal Pengiriman</label>
                                <input type="date" class="form-control" id="tgl_pengiriman" name="tgl_pengiriman"
                                    value="{{ $detail_pesanan->tgl_pengiriman }}" required>
                            </div>

                            {{-- Isi Papan --}}
                            <div class="mb-3">
                                <label for="isi_papan" class="form-label">Isi Papan</label>
                                <textarea class="form-control" id="isi_papan" name="isi_papan" rows="3" required>{{ $detail_pesanan->isi_papan }}</textarea>
                            </div>

                            {{-- Jumlah --}}
                            <div class="mb-3">
                                <label for="jumlah" class="form-label">Jumlah</label>
                                <input type="number" class="form-control" id="jumlah" name="jumlah"
                                    value="{{ $detail_pesanan->jumlah }}" min="1" required>
                            </div>

                            {{-- Total Harga --}}
                            <div class="mb-3">
                                <label for="total_harga" class="form-label">Total Harga</label>
                                <input type="number" class="form-control" id="total_harga" name="total_harga"
                                    value="{{ $detail_pesanan->total_harga }}" min="0" required>
                            </div>

                            {{-- Status (Enum) --}}
                            <div class="mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" id="status" class="form-select" required>
                                    @foreach (['pending', 'gagal', 'berhasil'] as $status)
                                        <option value="{{ $status }}"
                                            {{ $detail_pesanan->status === $status ? 'selected' : '' }}>
                                            {{ ucfirst($status) }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            {{-- Tombol --}}
                            <div class="d-flex justify-content-between">
                                <a href="{{ url('/detail_pesanan') }}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
