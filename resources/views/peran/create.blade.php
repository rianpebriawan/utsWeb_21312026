@extends('layout.master')

@section('judul')
Tambah Peran
@endsection

@section('content')

<form action="/peran" method="post">
    @csrf
    <div class="form-group">
        <label>Film</label>
        <select name="film_id" class="form-control">
            <option value="">Pilih Film</option>
            @forelse($film as $key => $item)
                <option value="{{ $item['id'] }}">{{ $item['judul'] }}</option>
            @empty
            @endforelse
         </select>
         @error('film')
         <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>
    <div class="form-group">
        <label>Cast</label>
        <select name="cast_id" class="form-control">
            <option value="">Pilih Cast</option>
            @forelse($cast as $key => $item)
                <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
            @empty
            @endforelse
         </select>
         @error('cast')
         <div class="alert alert-danger">{{ $message }}</div>
     @enderror
    </div>

    <div class="form-group">
        <label>nama</label>
        <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
        @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
       
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
