@extends('layouts.public.dashboard')

@section('container')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Profil</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('profiles.create') }}"> Buat Profil Baru</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Detail</th>
            <th width="280px">Aksi</th>
        </tr>
        @foreach ($profiles as $profile)
        <tr>
            
            <td>{{ $profile->name }}</td> <!-- Mengubah $product->name menjadi $profile->name -->
            <td>{{ $profile->detail }}</td> <!-- Mengubah $product->detail menjadi $profile->detail -->
            <td>
                <form action="{{ route('profiles.destroy', $profile->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('profiles.show', $profile->id) }}">Tampilkan</a>
    
                    <a class="btn btn-primary" href="{{ route('profiles.edit', $profile->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $profiles->links() !!}
      
@endsection
