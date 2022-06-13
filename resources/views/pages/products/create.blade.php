@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Tambah Barang</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name" class=" form-control-label">Nama Barang</label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Masukkan nama barang" class="form-control @error('name') is-invalid @enderror ">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="type" class=" form-control-label">Type Barang</label>
                    <input type="text" name="type" value="{{ old('type') }}" placeholder="Masukkan type barang" class="form-control @error('type') is-invalid @enderror ">

                    @error('type')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description" class=" form-control-label">Deskripsi Barang</label>
                   <textarea name="description" rows="10" class="ckeditor form-control @error('description') is-invalid @enderror">{{ old('description') }}</textarea>

                    @error('description')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="price" class=" form-control-label">Harga Barang</label>
                    <input price="number" name="price" value="{{ old('price') }}" placeholder="Masukkan harga barang" class="form-control @error('price') is-invalid @enderror ">

                    @error('price')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="quantity" class=" form-control-label">Kuantitas Barang</label>
                    <input type="number" name="quantity" value="{{ old('quantity') }}" placeholder="Masukkan kuantitas barang" class="form-control @error('quantity') is-invalid @enderror ">

                    @error('quantity')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Tambah Barang</button>
                </div>
            </form>
        </div>
    </div>
@endsection
