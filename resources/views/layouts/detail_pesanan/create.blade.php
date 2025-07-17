@extends('layouts.template')

@section('title', 'Tambah Detail Pesanan')

@section('headline')
    Form Tambah Detail Pesanan
@endsection

@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow-sm">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Form Tambah Detail Pesanan</h3>
                        <a href="{{ url('/detail_pesanan') }}" class="btn btn-secondary btn-sm">Kembali</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <form method="POST" action="{{ url('/detail_pesanan/') }}">
                                @csrf

                                <div class="mb-3">
                                    <label for="id_pelanggan" class="form-label">Pilih Pelanggan</label>
                                    <select name="id_pelanggan" id="id_pelanggan" class="form-select" required>
                                        <option value="">-- Pilih Pelanggan --</option>
                                        @foreach ($pelanggan as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- ID Pesanan --}}
                                <div class="mb-3">
                                    <label for="id_pesanan" class="form-label">ID Pesanan</label>
                                    <input type="number" name="id_pesanan" class="form-control" id="id_pesanan"
                                        placeholder="Masukkan ID Pesanan" required>
                                </div>

                                {{-- ID Produk --}}
                                {{-- <div class="mb-3">
                                <label for="id_produk" class="form-label">ID Produk</label>
                                <input type="number" name="id_produk" class="form-control" id="id_produk"
                                    placeholder="Masukkan ID Produk" required>
                            </div> --}}

                                <div class="mb-3">
                                    <label for="id_produk" class="form-label">Pilih Produk</label>
                                    <select name="id_produk" id="id_produk" class="form-select" required>
                                        <option value="">-- Pilih Produk --</option>
                                        @foreach ($produk as $p)
                                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    <label for="tgl_pesan" class="form-label">Tanggal Pesan</label>
                                    <input type="date" name="tgl_pesan" class="form-control" id="tgl_pesan" required>
                                </div>

                                <div class="mb-3">
                                    <label for="tgl_pengiriman" class="form-label">Tanggal Pengiriman</label>
                                    <input type="date" name="tgl_pengiriman" class="form-control" id="tgl_pengiriman"
                                        required>
                                </div>

                                {{-- Isi Papan --}}
                                <div class="mb-3">
                                    <label for="isi_papan" class="form-label">Isi Papan</label>
                                    <textarea name="isi_papan" class="form-control" id="isi_papan" rows="3" placeholder="Tulisan isi papan" required></textarea>
                                </div>

                                {{-- Jumlah --}}
                                <div class="mb-3">
                                    <label for="jumlah" class="form-label">Jumlah</label>
                                    <input type="number" name="jumlah" class="form-control" id="jumlah"
                                        placeholder="Masukkan jumlah" min="1" required>
                                </div>

                                <!-- HARGA -->
                                <div class="mb-3">
                                    <label for="harga" class="form-label">Harga</label>
                                    <input type="number" name="harga" class="form-control" id="harga"
                                        placeholder="Masukkan harga" required>
                                </div>

                                {{-- Total Harga --}}
                                <div class="mb-4">
                                    <label for="total_harga" class="form-label">Total Harga</label>
                                    <input type="number" name="total_harga" class="form-control" id="total_harga"
                                        placeholder="Masukkan total harga" min="0" required>
                                </div>

                                <div class="mb-4">
                                    <label for="status" class="form-label">Status</label>
                                    <select name="status" id="status" class="form-select" required>
                                        <option value="pending">Pending</option>
                                        <option value="gagal">Gagal</option>
                                        <option value="berhasil">Berhasil</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-plus"></i> Tambah
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
