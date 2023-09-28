@extends('layout.master')

@section('judul')
Edit peran
@endsection

@section('content')

<form action="/peran/{{ $peran ->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Film</label>
        <select name="film_id" class="form-control">
            <option value="">Pilih Film</option>
            @forelse($film as $key => $item)
                <option value="{{ $item['id'] }}" @if($item['id'] == $peran->film_id) selected @endif>{{ $item['judul'] }}</option>
            @empty
            @endforelse
        </select>
        @error('film_id') <!-- Note the field name should match your validation rule, "film_id" instead of "film" -->
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Cast</label>
        <select name="cast_id" class="form-control">
            <option value="">Pilih Film</option>
            @forelse($cast as $key => $item)
                <option value="{{ $item['id'] }}" @if($item['id'] == $peran->cast_id) selected @endif>{{ $item['nama'] }}</option>
            @empty
            @endforelse
        </select>
        @error('cast_id') <!-- Note the field name should match your validation rule, "film_id" instead of "film" -->
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ $peran->nama }}" class="form-control">
        @error('nama')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
