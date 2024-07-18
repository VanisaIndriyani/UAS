@extends('layouts.private.index')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Hapus Profil</h1>
</div>

<div class="col-lg-8">
    <form method="POST" action="/dashboard/profiles/{{ $profile->slug }}" class="mb-5">
        @method('delete')
        @csrf
        <div class="alert alert-danger">
            <strong>Peringatan!</strong> Anda yakin ingin menghapus profil ini? Tindakan ini tidak dapat dibatalkan.
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $profile->title }}" disabled>
        </div>
        <div class="mb-3">
            <label for="biografi" class="form-label">Isi Profil</label>
            <textarea class="form-control" id="biografi" name="biografi" rows="5" disabled>{{ $profile->biografi }}</textarea>
        </div>
        <button type="submit" class="btn btn-danger">Hapus</button>
        <a href="/dashboard/profiles" class="btn btn-secondary">Batal</a>
    </form>  
</div>
@endsection
