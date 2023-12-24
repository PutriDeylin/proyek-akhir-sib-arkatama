@extends('layouts.main')

@section('konten')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Form Edit</h3>
                    </div>

                    <form action="{{ route('update', $product->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="form-group">
                                <label for="namaproduct">Product Name</label>
                                <input type="text" name="namaproduct" class="form-control" required value="{{ old('namaproduct', $product->product_name) }}">
                                @if ($errors->has('namaproduct'))
                                    <span class="text-danger">{{ $errors->first('namaproduct') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="kategoriproduct">Product Category</label>
                                <select name="kategoriproduct" class="form-control" required>
                                    <option value="" disabled>Select Category</option>
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}" {{ old('kategoriproduct', $product->category_id) == $category->id ? 'selected' : '' }}>
                                            {{ $category->category_name }}
                                        </option>
                                    @endforeach
                                </select>
                                @if ($errors->has('kategoriproduct'))
                                    <span class="text-danger">{{ $errors->first('kategoriproduct') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="kodeproduct">Product Code</label>
                                <input type="text" name="kodeproduct" class="form-control" required value="{{ old('kodeproduct', $product->product_code) }}">
                                @if ($errors->has('kodeproduct'))
                                    <span class="text-danger">{{ $errors->first('kodeproduct') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Description</label>
                                <textarea name="deskripsi" class="form-control">{{ old('deskripsi', $product->description) }}</textarea>
                                @if ($errors->has('deskripsi'))
                                    <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="harga">Price</label>
                                <input type="text" name="harga" class="form-control" required value="{{ old('harga', $product->price) }}">
                                @if ($errors->has('harga'))
                                    <span class="text-danger">{{ $errors->first('harga') }}</span>
                                @endif
                            </div>

                            <div class="form-group">
                                <label for="stock">Stock</label>
                                <input type="number" name="stock" class="form-control" required value="{{ old('stock', $product->stock) }}">
                                @if ($errors->has('stock'))
                                    <span class="text-danger">{{ $errors->first('stock') }}</span>
                                @endif
                            </div>
                    
                            <div class="form-group">
                                <label for="gambar">Images</label><br>

                                @if(!empty($product->image))
                                    <p>Existing Images:</p>
                                    @foreach(json_decode($product->image) as $image)
                                        <img src="{{ asset('uploads/' . $image) }}" width="70" alt="existing-image"><br>
                                    @endforeach
                                @endif
                                    <br>
                                <input type="file" name="gambar[]" multiple>
                            </div>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a href="{{ route('products') }}" class="btn btn-primary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection