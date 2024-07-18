@extends('layouts.private.index')

@section('container')
<h1>Edit Produk</h1>
<form method="POST" action="/dashboard/profiles/{{ $profile->slug }}" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $profile->title) }}">
    </div>
    <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control" id="slug" name="slug" value="{{ old('slug', $profile->slug) }}">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Kategori</label>
        <select name="category_id" class="form-select">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ old('category_id', $profile->category_id) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Gambar Profil</label>
        <input type="file" class="form-control" id="image" name="image">
        <input type="hidden" name="oldImage" value="{{ $profile->image }}">
    </div>
    <div class="mb-3">
        <label for="biografi" class="form-label">Isi Profil</label>
        <input id="biografi" type="hidden" name="biografi" value="{{ old('biografi', $profile->biografi) }}">
        <trix-editor input="biografi"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary">Perbarui</button>
</form>
@endsection
