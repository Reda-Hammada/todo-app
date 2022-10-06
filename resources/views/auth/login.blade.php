@extends('layouts.app')

@section('title','Login page')


@section('content')

<main class="ultimate_container">

        <div class='form_container'>
            <form method="POST" action="{{ route('login') }}">
                @csrf
        
        
                <label>Email</label>
        
                <div>
        
                    <input type='text'
                            name='email'>
        
                </div>
        
                <label>Password</label>
        
                <div>
                    <input type="password"
                            name="password" >
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
                    <button><a href="{{ route('register') }}">Register</a></button>
                </div>
        
            </form>
        </div>
        
        <div class='bg_container'>
            <h1>Welcome back</h1>
       </div>
            
    </main>




@endsection