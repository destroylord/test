@extends('app')
@section('content')
    <div class="d-flex justify-content-between">
        <h1 class="me-auto">Data {{ $identityId->fullname }}</h1>
        <div class="ms-auto p-2">
            <a href="/edit/{{ $identityId->id }}" class="btn btn-primary d-block mb-1">Edit</a>
            <form action="/delete/{{ $identityId->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
    <hr>
    <div class="row">
    <div class="col">
        <label for="fullname" class="form-label">Nama Lengkap</label>
        <p>{{ $identityId->fullname }}</p>
    </div>
    <div class="col">
        <label for="nickname" class="form-label">Nama Panggilan</label>
        <p>{{ $identityId->nickname }}</p>
    </div>
</div>
<div class="row">
    <div class="col">
        <label for="gender" class="form-label">Jenis Kelamin</label>
        <p>{{ $identityId->gender }}</p>
    </div>
    <div class="col">
        <label for="school" class="form-label">Sekolah</label>
        <p>{{ $identityId->school }}</p>
    </div>
</div>
<div class="row">
    <div class="col">
        <label for="value" class="form-label">IPK/Nilai</label>
        <p>{{ $identityId->value }}</p>
    </div>
    <div class="col">
        <label for="last_address" class="form-label">Alamat Terakhir</label>
        <p>{{ $identityId->last_address }}</p>
    </div>
</div>
    <a href="{{ route('indentites') }}" class="btn btn-primary">Kembali</a>

@endsection