@extends('layouts.app')

@section('title', "todo app")



@section('content')

<main id='header' class="header_background_light">
    <nav class="navbar_container">
        <div class="todo_heading_container">
            <h1>TODO</H1>
        </div>
        <div class='mode_icon_container'>
            <img id='moon' src="{{asset('images/icon-moon.svg')}}" alt="dark mode icon" >
            <img style="display:none" id='sun' src="{{asset('images/icon-sun.svg')}}" alt="light mode icon" >

        </div>
    </nav>
    <div id="add_form" class="add_todo_form_light">
        <form method="POST" action = {{ route('task.store') }}>

            @csrf

            <div>
                <input type='text' 
                        name='task'
                        placeholder="Create a new todo...">
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

            <div  id="task_container"   class="task_container_light">
                    <form method='POST' action="{{ route('task.update',[$task['id']] )}}">
                        @csrf
                        @method('PATCH')
                        {{-- display checked checkbox for checked tasks --}}
                        @if($task['status']== 'completed')

                            <div class="check_task_container">
                                <div>
                                    <input  onchange="this.form.submit()" id='check' type='checkbox' checked name='checked' >
                                </div>
                                <div>
                                    <p style='text-decoration:line-through; color:hsla(236, 33%, 92%, 1)' id='task'>{{ $task['task_name'] }}</p>
                                </div>
                            </div>

                       {{-- display unchecked checkbox for unchecked tasks  --}}
                        @elseif($task['status'] == 'started')
                                <div class="check_task_container">
                                    <div>
                                        <input  onchange="this.form.submit()" type='checkbox'  name='checked' >
                                    </div>
                                    <div>
                                        <p  id='task'>{{ $task['task_name'] }}</p>
                                    </div>

                                </div>
                        @endif
                    </form>
                    <form action="{{ route('task.destroy',[$task['id']]) }}" method="POST">
                        @csrf 
                        @method('DELETE')
                    <button class='img_cross' id='delete_button' type="submit"/><img   src="{{ asset('images/icon-cross.svg') }}" /></button>
                    </form>
                            
            </div>

            @endforeach
     
        <div class='last_container'>
            <div  id='count_items_container' class='count_items_container_light'>

                <p>{{ $count }} items left</p>
                    <ul>
                    <li>@if(  $route   == 'task.index')<a style='color:blue' href="{{ route('task.index') }}">All</a>@else<a href="{{ route('task.index') }}">All</a>@endif</li>
                    <li>@if($route == 'task.active')<a style='color:blue' href="{{ route('task.active') }}">Active</a>@else <a href="{{ route('task.active') }}">Active</a>@endif</li>
                    <li>@if($route == 'task.completed')<a style='color:blue' href="{{route('task.completed')}}">Completed</a>@else<a href='{{ route('task.completed') }}'>Completed</a>@endif</li>
                </ul>
            
                <p><a href='{{route('tasks.clear')}}'>Clear completed</p>
            </div>
        </div>

    </section>
</main>        
@endsection