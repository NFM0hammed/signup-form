@extends('layout.app')

@section('title')
    Signup
@endsection

@section('content')
    <div class="signup">
        <form method="POST" action='{{ route('store') }}'>
            @csrf
            <h1>Signup</h1>
            @if ($errors->any())
                <div class="errors">
                    @foreach ($errors->all() as $error)
                        <p class="error">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <div class="form">
                <input
                        type            =   "text"
                        name            =   "name"
                        placeholder     =   "Username"
                        value           =   "{{ old('name') }}"
                        autocomplete    =   "name"
                        autofocus
                >
                <input
                        type            =   "text"
                        name            =   "email"
                        placeholder     =   "Email"
                        value           =   "{{ old('email') }}"
                        autocomplete    =   "email"
                >
                <input
                        type            =   "password"
                        name            =   "password"
                        placeholder     =   "Password"
                        autocomplete    =   "current-password"
                >
                <button
                        type            =   "submit"
                >
                    Signup
                </button>
            </div>
        </form>
    </div>
@endsection
