<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

        <title>Edit</title>
    </head>

    <body>
        <div style="display:grid; place-items:center;" class=" mt-10">

            <h1 class="text-3xl">edit task</h1>

            <form
                method="POST"
                action="/manage/{{ $task->id }}"
                class="mt-4  border border-gray-400 p-4 rounded space-y-10 "
            >

                @csrf
                @method('PATCH')

                <x-form-item>

                    <label for="title">
                        Title
                    </label>

                    <input
                    type="text" name="title" class="border" value="{{ old('title', $task->title) }}"
                        required>

                </x-form-item>

                <x-form-item>

                    <label for="body">
                        Body
                    </label>

                    <textarea name="body" cols="20" rows="2" class="border">{{ old('body', $task->body) }}</textarea>

                </x-form-item>

                <x-form-item>

                    <label for="category">
                        Category
                    </label>

                    <select name="category_id" id="category_id">

                        @foreach (\App\Models\Category::all() as $category)

                            <option value="{{ $category->id }}"
                                {{ old('category_id', $task->category_id) == $category->id ? 'selected' : 'none' }}
                            >

                                {{ ucwords($category->name) }}

                            </option>

                        @endforeach

                    </select>
                    
                </x-form-item>

                <button type="submit" class="p-2 bg-blue-200 mt-8 hover:bg-blue-300">update</button>
            </form>
        </div>

    </body>

</html>
