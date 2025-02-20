@extends('layout/app')

@section('content')
    <div class="signup-form">
        <div class="form">
            <form method="POST" action={{ route('users.store') }}>
                <h2>Register</h2>
                @csrf
                @if ($errors->any())
                    <div class="errors">
                        @foreach ($errors->all() as $error)
                            <p>{{ $error }}</p>
                        @endforeach
                    </div>
                @endif
                <div class="signup">
                    <div class="username">
                        <input
                            type        =   "text"
                            placeholder =   "Username"
                            name        =   "name"
                            value       =   "{{ @old('name') }}"
                        />
                    </div>
                    <div class="email">
                        <input
                            type        =   "email"
                            placeholder =   "Email"
                            name        =   "email"
                            value       =   "{{ @old('email') }}"
                        />
                    </div>
                    <div class="password">
                        <input
                            :type       =   ""
                            placeholder =   "Password"
                            name        =   "password"
                            autocomplete
                        />
                        <i :class="toggleShowHide ? 'fa-solid fa-eye show-hide' : 'fa-solid fa-eye-slash show-hide'"
                            v-if="toggleShowHide ? type = 'text' : type = 'password'"
                            @click="toggleShowHide = !toggleShowHide"
                        ></i>
                    </div>
                    <div class="confirm-password">
                        <input
                            type        =   "password"
                            placeholder =   "Confirm password"
                            name        =   "password_confirmation"
                            autocomplete
                        />
                    </div>
                    <input
                        type        =   "submit"
                        value       =   "Signup"
                        class       =   "submit"
                    />
                </div>
            </form>
        </div>
    </div>
@endsection
