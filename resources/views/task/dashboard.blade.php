@extends('layouts.app')

@section('title', "todo app")



@section('content')

<header>
    <nav>
        $user_id = Auth::id();

    </nav>
</header>
<main>
    <section>
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
         @foreach($tasks as $task)
        <div>
            <p>{{ $task['task_name'] }}</p>
        </div>
        @endforeach

    </section>
</main>
        
@endsection