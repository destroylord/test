@extends('app')

@section('content')
   <form action="{{ route('identities.update', $identity->id) }}" method="POST" autocomplete="off">
    @csrf
    @method('PUT')
    @include('common.form')
    </form>
@endsection