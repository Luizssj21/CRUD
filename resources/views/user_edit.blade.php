@extends('layouts.app')
@section('content')

    <h2>Edit</h2>
    <form action="{{ route('users.update', ['user'=>$user ->id]) }}" method="POST">      {{-- <input type="hidden" name="_method" value="PUT"> --}  {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        @csrf
        <input: type="hidden" name="_method" value="PUT"
        <input type="text" name="firstname" id="firstname" value="{{ $user->firstname }}">
        <input type="text" name="firstname" id="firstname" value="{{ $user->lastname }}">
        <input type="text" name="firstname" id="firstname" value="{{ $user->email }}">
        <button type="submit">Update</button>
    </form>
@endsection