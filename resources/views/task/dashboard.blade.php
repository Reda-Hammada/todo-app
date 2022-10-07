@extends('layouts.app')

@section('title', "todo app")



@section('content')

<header class="header_background">
    <nav class="navbar_container">
        <div class="todo_heading_container">
            <h1>TODO</H1>
        </div>
        <div class='mode_icon_container'>
            <img src="{{asset('images/icon-moon.svg')}}" alt="light mode icon" >
        </div>
    </nav>
    <div class="add_todo_form">
        <form method="POST" action = {{ route('task.store') }}>

            @csrf

            <div>
                <input type='text' 
                        name='task'
                        value="Create a new todo...">
            </div>
            <div class='submit_container'>
                <input type="submit"
                       name="submit" 
                       value="Create to do">
            </div>
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