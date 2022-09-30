@extends('layouts.app')

@section('title','Register page')


@section('content')

    <div>
        <form method="POST"  action="{{ route('register') }}">

            @csrf
            <div>
                <label>Full name :</label>
                <input type='text'
                       name='name'
                       required
                       value={{ old('name') }}>
            </div>
            <div>
                <label>Email :</label>
                <input type='email'
                       name='email'
                       required 
                       value="{{ old('email') }}">

            </div>
            <div>
                <label>Password :</label>
                <input type='password'
                       name='password'
                       required >

                <label>Confirm password :</label>
                <input type='password'
                       name='password_confirmation'
                       required >
            </div>
            <div>
                <input type='submit'
                       value="Sign up">
            </div>
        

        </form>
    </div>

@endsection