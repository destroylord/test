@extends('app')

@section('content')
   <form action="{{ route('identities.store') }}" method="POST" autocomplete="off">
    @csrf
    @include('common.form',['btn' => 'Submit'])
    </form>
@endsection