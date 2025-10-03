@extends('layouts.template')

@section('title', 'produk')


@section('content')
    <div class="container-fluid mt-4">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="card shadow">
                    <div class="card-header">
                        <h1 class="mb-0">Daftar Produk</h1>
                        <br>
                        <div class="d-flex justify-content-between align-items-center mt-3 px-1">
                            <a href="{{ url('/produk/create') }}" class="btn btn-primary btn-sm">
                                <i class="fa fa-user-plus me-1"></i> Tambah Produk
                            </a>
                            <form action="{{ url('/produk') }}" method="GET" class="d-flex align-items-center">
                                <input type="text" name="search" placeholder="Cari produk..."
                                    class="form-control form-control-sm w-auto" value="{{ request('search') }}">
                                <button type="submit" class="btn btn-light btn-sm ms-2"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>

                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped align-middle text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">Nama Produk</th>
                                        <th class="text-center">Deskripsi</th>
                                        <th class="text-center">Harga</th>
                                        <th class="text-center">Ukuran</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($produk as $data)
                                        <tr>
                                            <td>{{ $nomor++ }}</td>
                                            <td>{{ $data->nama }}</td>
                                            <td>{{ $data->deskripsi }}</td>
                                            <td>Rp {{ number_format($data->harga, 0, ',', '.') }}</td>
                                            <td>{{ ucfirst($data->ukuran) }}</td>
                                            <td>
                                                <div class="btn-group" role="group">
                                                    <a href="{{ url('/produk/edit/' . $data->id) }}"
                                                        class="btn btn-outline-info btn-sm" title="Edit">
                                                        <i class="fa fa-edit"></i>
                                                    </a>
                                                    <button type="button" class="btn btn-outline-danger btn-sm"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#modalHapus{{ $data->id }}" title="Hapus">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </div>

                                                <!-- Modal Konfirmasi Hapus -->
                                                <div class="modal fade" id="modalHapus{{ $data->id }}" tabindex="-1"
                                                    aria-labelledby="modalLabel{{ $data->id }}" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered">
                                                        <div class="modal-content">
                                                            <form action="{{ url('/produk/' . $data->id) }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('DELETE')
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title"
                                                                        id="modalLabel{{ $data->id }}">Konfirmasi Hapus
                                                                    </h5>
                                                                    <button type="button" class="btn-close"
                                                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Yakin ingin menghapus produk
                                                                    <strong>{{ $data->nama }}</strong>?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-bs-dismiss="modal">Batal</button>
                                                                    <button type="submit"
                                                                        class="btn btn-danger">Hapus</button>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- End Modal -->
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">Data produk tidak tersedia.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div> <!-- /.table-responsive -->
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
