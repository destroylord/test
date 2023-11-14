@extends('app')

@section('content')
    

<div class="d-flex justify-content-between">
    <h1 class="me-auto">Data Individu</h1>
    <div class="d-flex align-items-center">
    <a href="/create" class="btn btn-primary align-items-end">Create</a>
    </div>
    <hr>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">Nama Lengkap</th>
        <th scope="col">Nama Panggilan</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
            @foreach ($identity as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->fullname }}</td>
                <td>{{ $item->nickname }}</td>
                <td>{{ $item->gender }}</td>
                <td>
                    <a href="{{ route('identities.show', $item->id) }}" class="btn btn-primary">View</a>
                </td>
            </tr>
            @endforeach
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {!! $identity->links('vendor.pagination.bootstrap-5') !!}
</div>  



@endsection