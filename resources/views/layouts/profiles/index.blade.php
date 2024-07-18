@extends('layouts.private.index')

@section('container')
<h1>Daftar Produk</h1>
<a href="/dashboard/profiles/create" class="btn btn-primary">Buat Profil Baru</a>
<table class="table mt-3">
    <thead>
        <tr>
            <th>Judul</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($profiles as $profile)
        <tr>
            <td>{{ $profile->title }}</td>
            <td>{{ $profile->category->name }}</td>
            <td>
                <a href="/dashboard/profiles/{{ $profile->slug }}" class="btn btn-info">Lihat</a>
                <a href="/dashboard/profiles/{{ $profile->slug }}/edit" class="btn btn-warning">Edit</a>
                <form action="/dashboard/profiles/{{ $profile->slug }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Anda yakin?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
