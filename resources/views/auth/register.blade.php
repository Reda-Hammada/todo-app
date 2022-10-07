@extends('layouts.app')

@section('title','Register page')


@section('content')
    <main class='ultimate_container'>

        <div class='form_container register_form'>
            <form method="POST"  action="{{ route('register') }}">

                @csrf
                <div>
                    <label>Full name :</label>
                    <input type='text'
                        name='name'
                        required
                        value="{{ old('name') }}">
                        <div class='error_message'>
                            @error('name')
                                    {{ $message }}
                            @enderror
                        </div>
                </div>
                <div>
                    <label>Email :</label><br>
                    <input type='email'
                        name='email'
                        required 
                        value="{{ old('email') }}">
                        <div class='error_message'>
                            @error('email')
                                    {{ $message }}
                            @enderror
                        </div>

                </div>
                <div>
                    <label>Password :</label>
                    <input type='password'
                        name='password'
                        required >
                        <div class='error_message'>
                            @error('password')
                                    {{ $message }}
                            @enderror
                        </div>

                </div>
                <div>
                    <label>Confirm password :</label>
                    <input type='password'
                        name='password_confirmation'
                        required >
                        <div class='error_message'>
                            @error('password_confirmation')
                                    {{ $message }}
                            @enderror
                        </div>
                </div>
                <div>
                    <input type='submit'
                        value="Sign up">
                        <button class='register_button_mobile'><a href="{{ route('login') }}">Login</a></button>

                </div>
            

            </form>
        </div>
        <div class='bg_container'>
                <h1>Welcome </h1>
                <p>You already have an account ?<br>
                    log in now clicking the button below
                </p>
                <button><a href="{{ route('login') }}">Login</a></button>
        </div>
    </main>

@endsection