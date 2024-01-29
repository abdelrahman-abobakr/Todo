<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Todo</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    </head>

    <body>
        <x-nav-bar></x-nav-bar>

        <div style="display: grid ; place-items:center">

            <h1 class="text-3xl">To Do list to manage your tasks</h1>

            <div class="max-w-600px mt-8 ">
                <h2 class="text-3xl">Tasks List</h2>

                <ul class="mt-4">
                    <li>
                        @foreach (\App\Models\Task::all() as $task)
                            <div class="p-2 mb-4 justify-between space-x-6 items-center">

                                <p class="text-2xl ">{{ $task->title }}</p>

                                <div class="text-lg">{{ $task->body }}</div>

                                <time class="text-xs">{{ $task->created_at->diffForHumans() }}</time>

                            </div>
                        @endforeach

                    </li>

                </ul>
            </div>

        </div>
    </body>

</html>
