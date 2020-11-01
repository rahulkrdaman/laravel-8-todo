<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Todo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            
        </style>

        <style>
           
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif

            <div class="flex-center position-ref full-height">
                <a href="todo_create">Add User</a>
                <br>
                {{session('msg')}}
                <table border="1px">
                    <tr>
                        <td>Id</td>
                        <td>Name</td>
                        <td>Created at</td>
                        <td>Action</td>

                    </tr>
                    @foreach($todoArr as $test)
                    <tr>
                        <td>{{$test->id}}</td>
                        <td>{{$test->name}}</td>
                        <td>{{$test->created_at}}</td>
                        <td>
                            <a href="todo_delete/{{$test->id}}">Delete</a>
                            <a href="todo_edit/{{$test->id}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
            
        </div>
    </body>
</html>
