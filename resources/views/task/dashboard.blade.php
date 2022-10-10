@extends('layouts.app')

@section('title', "todo app")



@section('content')

<main class="header_background">
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

    <section class='ultimate_tasks_container'>
     
 
        @foreach($tasks as $task)
         <div   class="task_container">
            
                <input id='check' type='checkbox' >
                <p id='task'>{{ $task['task_name'] }}</p>
                <a href="{{ route('task.destroy',[$task['id']]) }}"><img class='img_cross'  src="{{ asset('images/icon-cross.svg') }}" ></a>
                        
         </div>
        @endforeach
        <div class='last_container'>
            <div class='count_items_container'>
                <p>{{ $count }} items left</p>
                    <ul>
                    <li>All</li>
                    <li>Active</li>
                    <li>Completed</li>
                </ul>
            
                <p >Clear completed</p>
            </div>
        </div>
    </section>
</main>        
@endsection