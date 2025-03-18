@extends('layout.app')

@section('title')
    Profile
@endsection

@section('content')
    <div class="profile">
        <h1>Profile</h1>
        <div class="profile-info">
            <div class="info">
                <span>id:</span>
                <p>{{ $user->id }}</p>
            </div>
            <div class="info">
                <span>Name:</span>
                <p>{{ $user->name }}</p>
            </div>
            <div class="info">
                <span>Email:</span>
                <p>{{ $user->email }}</p>
            </div>
        </div>
        <form method="GET" action='{{ route('logout') }}'>
            @csrf
            <button
                    type    =   "submit"
            >
                Logout
            </button>
        </form>
    </div>
@endsection
