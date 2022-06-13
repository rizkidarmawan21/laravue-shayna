@extends('layouts.default')

@section('content')
<div class="card">
    <div class="card-header">
        <strong>Tambah Foto Barang</strong>
    </div>
    <div class="card-body card-block">
        <form action="{{ route('product-galleries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name" class=" form-control-label">Nama Barang</label>
                <select name="product_id" id="" class="form-control  @error('product_id') is-invalid @enderror">
                    <option value="">Pilih Barang</option>
                    @foreach ($products as $product)
                    <option value="{{ $product->id }}">{{ $product->name }}</option>
                    @endforeach
                </select>
                @error('product_id')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="photo" class=" form-control-label">Foto Barang</label>
                <input type="file" name="photo" value="{{ old('photo') }}" placeholder="Masukkan poto barang"
                    class="form-control @error('photo') is-invalid @enderror " eccept="image/">

                @error('photo')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="is_default" class=" form-control-label">Default Foto</label>
                <br>
                    <input type="radio" name="is_default" value="1"
                        class=" @error('is_default') is-invalid @enderror "> Ya
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="radio" name="is_default" value="0"
                        class=" @error('is_default') is-invalid @enderror "> Tidak

                @error('is_default')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Tambah Foto Barang</button>
            </div>
        </form>
    </div>
</div>
@endsection