@extends('layout.app')

@section('title')
    Login
@endsection

@section('content')
    <div class="signin">
        <form method="POST" action='{{ route('login') }}'>
            <h1>Login</h1>
            @if ($errors->any())
                <div class="errors">
                    @foreach ($errors->all() as $error)
                        <p class="error">{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @if(session('status'))
                <div class="errors">
                    <p class="error">{{ session('status') }}</p>
                </div>
            @endif
            @csrf
            <div class="form">
                <input
                        type            =   "text"
                        name            =   "email"
                        placeholder     =   "Email"
                        value           =   "{{ old('email') }}"
                        autocomplete    =   "email"
                        autofocus
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
                    Login
                </button>
                <p
                        class           =   "new-account"
                >
                    Don't have an account ?
                    <a
                        href            =   '{{ route('signup') }}'
                    >
                        Register
                    </a>
                </p>
            </div>
        </form>
    </div>
@endsection
