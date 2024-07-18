@extends('layouts.private.index')

@section('container')
<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2>{{ $profile->title }}</h2>
            <a href="/dashboard/profiles" class="btn btn-success">Kembali ke Daftar produk</a>
            <a href="/dashboard/profiles/{{ $profile->slug }}/edit" class="btn btn-warning">Edit</a>
            <form action="/dashboard/profiles/{{ $profile->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="btn btn-danger" onclick="return confirm('Anda yakin?')">Hapus</button>
            </form>
            @if ($profile->image)
                <img src="{{ asset('storage/' . $profile->image) }}" class="img-fluid my-3" alt="{{ $profile->title }}">
            @endif
            <article>
                {!! $profile->biografi !!}
            </article>
        </div>
    </div>
</div>
@endsection
