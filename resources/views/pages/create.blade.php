@extends('layouts.main')

@section('konten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Tambah</h3>
                    </div>

                    <form action="{{ route('store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="namaproduct">Product Name</label>
                                <input type="text" name="namaproduct" class="form-control" id="namaproduct" placeholder="Enter Product Name">
                                @error('namaproduct')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kategoriproduct">Product Category</label>
                                <select name="kategoriproduct" class="form-control" id="kategoriproduct">
                                    <option value="" disabled selected>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                                    @endforeach
                                </select>
                                @error('kategoriproduct')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="kodeproduct">Product Code</label>
                                <input type="text" name="kodeproduct" class="form-control" id="kodeproduct" placeholder="Enter Product Code">
                                @error('kodeproduct')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Description</label>
                                <textarea id="deskripsi" name="deskripsi" class="form-control" rows="3" placeholder="Enter Product Description"></textarea>
                                @error('deskripsi')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="harga">Price</label>
                                <input type="text" name="harga" class="form-control" id="harga" placeholder="Enter Product Price">
                                @error('harga')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number" name="stock" class="form-control" id="stock" placeholder="Enter Product Stock">
                                @error('stock')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="gambar">Images</label><br>
                                <input type="file" name="gambar[]" id="gambar" multiple><br>
                            </div>
                        </div>

                        <div class="card-footer mt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ route('products') }}" class="btn btn-primary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection