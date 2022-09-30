@extends('layouts.app')

@section('title', "todo app")



@section('content')


<h1>To do app</h1>
        <div>
            <form method="POST" action="{{ route('task.store') }}">

                @csrf

                <div>
                    <input type='text' 
                            name='task'>
                </div>
                
            </form>
        </div>
@endsection