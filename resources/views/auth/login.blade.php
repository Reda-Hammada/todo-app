@extends('layouts.app')

@section('title','Login page')


@section('content')

<main class="ultimate_container">

        <div class='form_container'>
            <form id='login_form' method="POST" action="{{ route('login') }}">
                @csrf
        
        
                <label>Email</label>
        
                <div>
        
                    <input onchange="logiValidation" id='email' type='text'
                            name='email'>
                    <div class='error_message'>
                        @error('email')
                                {{ $message }}
                        @enderror
                    </div>
                </div>
        
                <label>Password</label>
        
                <div>
                    <input id='password' type="password"
                            name="password" >
                    <div class='error_message'>
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                        
                </div>
                <div>
                    <input type='checkbox' 
                            name='remember'>
                    <label>Remember me</label>
        
        
                </div>
                <div>
                    <input type='submit'
                            name='login'
                            value='Log in'>
                
                </div>
                    <button class='register_button_mobile'><a href="{{ route('register') }}">Register</a></button>
        
            </form>
        </div>
        
        <div class='bg_container'>
            <h1>Welcome back</h1>
            <p>You don't have an account yet ?<br>
                Register now clicking the button below
            </p>
            <button><a href="{{ route('register') }}">Register</a></button>
       </div>
            
    </main>




@endsection