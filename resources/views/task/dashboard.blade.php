@extends('layouts.app')

@section('title', "todo app")



@section('content')

<header class="header_background">
    <nav class="navbar_container">
        <div>
            <h1>TODO</H1>
        </div>
            <img src="{{asset('images/icon-moon.svg')}}" alt="light mode icon" >
        <div>
        
        </div>
    </nav>
    <div>
        <form method="POST" action = {{ route('task.store') }}>

            @csrf

            <div>
                <input type='text' 
                        name='task'>
            </div>
            <div>
                <input type="submit"
                       name="" 
                       value="Create to do">
        </form>
    </div>
</header>
<main>
    <section>
     
         @foreach($tasks as $task)
        <div>
            <p>{{ $task['task_name'] }}</p>
        </div>
        @endforeach

    </section>
</main>
        
@endsection