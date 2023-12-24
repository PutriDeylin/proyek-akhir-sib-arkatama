@extends('layouts.main')

@section('konten')

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title col align-self-center">List Products</h3>
                    </div>

                    <!-- Card Body -->
                    <div class="card-body">
                        <!-- Add Product and Searching -->
                        <div class="d-flex justify-content-between mb-3">
                            <!-- Add Product -->
                            <button id="tmblcreate" class="btn btn-primary">
                                <i class="nav-icon fas fa-plus mr-2"></i> Add Product
                            </button>

                            <!-- Searching -->
                            <form action="{{ route('search') }}" method="GET" class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search" size="50" name="keyword_search"
                                        placeholder="Cari" aria-label="Cari" />
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">Cari</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Table -->
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama product</th>
                                    <th>Kategori product</th>
                                    <th>Kode product</th>
                                    <th>Deskripsi</th>
                                    <th>Harga</th>
                                    <th>Stock</th>
                                    <th>Image</th>
                                    <th style="width: 200px">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $key => $product)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $product->product_name }}</td>
                                    <td>{{ $product->category->category_name }}</td>
                                    <td>{{ $product->product_code }}</td>
                                    <td>{{ $product->description }}</td>
                                    <td>{{ $product->price }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>
                                        @foreach(json_decode($product->image) as $image)
                                        <img src="{{ asset('uploads/' . $image) }}" alt="gambar" width="80"
                                            class="m-2 border border-5"><br>
                                        @endforeach
                                    </td>
                                    <td>
                                        <a href="{{ route('edit', ['id' => $product->id]) }}" class="btn btn-warning">
                                            <i class="nav-icon fas fa-edit mr-2"></i>Edit
                                        </a>

                                        <form action="{{ route('delete', ['id' => $product->id]) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger mt-2" type="submit">
                                                <i class="nav-icon fas fa-trash-alt mr-3"></i>Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="card-footer clearfix">
                        {{ $products->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    document.getElementById("tmblcreate").addEventListener("click", function () {
        // Redirect pengguna ke halaman lain
        window.location.href = "{{ route('create') }}";
    });
</script>

@endsection