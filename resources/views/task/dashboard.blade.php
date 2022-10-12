@extends('layouts.app')

@section('title', "todo app")



@section('content')

<main id='header' class="header_background_light">
    <nav class="navbar_container">
        <div class="todo_heading_container">
            <h1>TODO</H1>
        </div>
        <div class='mode_icon_container'>
            <img id='moon' src="{{asset('images/icon-moon.svg')}}" alt="light mode icon" >
        </div>
    </nav>
    <div id="add_form" class="add_todo_form_light">
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
         <div id="task_container"  class="task_container_light">
            
                <input id='check' type='checkbox' >
                <p id='task'>{{ $task['task_name'] }}</p>
                <form action="{{ route('task.destroy',[$task['id']]) }}" method="POST">
                    @csrf 
                    @method('DELETE')
                  <button id='delete_button' type="submit"/><img class='img_cross'  src="{{ asset('images/icon-cross.svg') }}" /></button>
                </form>
                        
         </div>
        @endforeach
        <div class='last_container'>
            <div id='count_items_container' class='count_items_container_light'>
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