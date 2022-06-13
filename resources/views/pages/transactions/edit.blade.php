@extends('layouts.default')

@section('content')
    <div class="card">
        <div class="card-header">
            <strong>Ubah Transaksi {{ $item->uuid }}</strong>
        </div>
        <div class="card-body card-block">
            <form action="{{ route('transactions.update',$item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="name" class=" form-control-label">Nama pemesan</label>
                    <input type="text" name="name" value="{{ old('name',$item->name) }}" placeholder="Masukkan nama pemesan" class="form-control @error('name') is-invalid @enderror ">
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="email" class=" form-control-label">Email</label>
                    <input type="email" name="email" value="{{ old('email',$item->email) }}" placeholder="Masukkan email" class="form-control @error('type') is-invalid @enderror ">

                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="number" class=" form-control-label">Nomor Hp</label>
                    <input type="number" name="number" value="{{ old('number',$item->number) }}" placeholder="Masukkan nomor" class="form-control @error('number') is-invalid @enderror ">

                    @error('number')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address" class=" form-control-label">Alamat pemesan</label>
                    <input type="text" name="address" value="{{ old('address',$item->address) }}" placeholder="Masukkan alamat" class="form-control @error('address') is-invalid @enderror ">

                    @error('address')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Ubah Transaksi</button>
                </div>
            </form>
        </div>
    </div>
@endsection
