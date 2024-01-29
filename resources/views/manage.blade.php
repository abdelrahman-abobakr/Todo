<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Manage</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    </head>

    <body>

        <div style="display: grid ; place-items:center">

            <h1 class="text-3xl">To Do list to manage your tasks</h1>

            <div class="max-w-600px mt-8 ">
                <h2 class="text-2xl">Tasks List</h2>
                <ul class="mt-4">
                    <li>
                        @foreach (\App\Models\Task::all() as $task)
                        
                            <label class="p-1 flex justify-between space-x-6 items-center">

                                <p>{{ $task->title }}</p>

                                <a href="/manage/{{ $task->id }}/edit" class="text-green-500">Edit</a>

                                <form method="POST" action="/manage/{{ $task->id }}">
                                    @csrf
                                    @method('DELETE')
                                    <button class="text-red-500">Delete</button>
                                </form>

                            </label>
                        @endforeach

                    </li>

                </ul>
            </div>

        </div>

    </body>

</html>
