<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ "My Tasks" }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="mb-5">
                <a href="{{ route('tasks.create') }}"
                   class="bg-indigo-500 text-white py-2 px-4 rounded-md hover:bg-indigo-600">
                    Add Task
                </a>
            </div>

            <table class="min-w-full bg-white border border-gray-200">
                <thead>
                <tr>
                    <th class="px-6 py-3 border-b-2 border-gray-200 font-medium text-sm text-gray-600 uppercase tracking-wider">
                        Title
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 font-medium text-sm text-gray-600 uppercase tracking-wider">
                        Description
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 font-medium text-sm text-gray-600 uppercase tracking-wider">
                        Completed
                    </th>
                    <th class="px-6 py-3 border-b-2 border-gray-200 font-medium text-sm text-gray-600 uppercase tracking-wider">
                        Actions
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($tasks as $task)
                    <tr class="{{ $loop->even ? 'bg-gray-50' : 'bg-white' }}">
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $task->title }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $task->description }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $task->completed ? 'Yes' : 'No' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            <a href="{{ route('tasks.edit', $task->id) }}"
                               class="text-indigo-500 hover:text-indigo-700">Edit</a>
                            <form class="inline" method="POST" action="{{ route('tasks.destroy', $task->id) }}"
                                  onsubmit="return confirm('Are you sure you want to delete this task?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-500 hover:text-red-700 ml-2">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>


</x-app-layout>
