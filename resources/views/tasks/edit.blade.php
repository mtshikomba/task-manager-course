<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ "Edit Task" }}
        </h2>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form action="{{ route('tasks.update', $task) }}" method="POST" class="p-6">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                        <input type="text" name="title" id="title" value="{{ $task->title }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="mb-4">
                        <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                        <textarea name="description" id="description" rows="3" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">{{ $task->description }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="completed" class="block text-sm font-medium text-gray-700">Completed</label>
                        <input type="checkbox" name="completed" id="completed" {{ $task->completed ? 'checked' : '' }} class="mt-1 focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <button type="submit" class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600">Update Task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-app-layout>
