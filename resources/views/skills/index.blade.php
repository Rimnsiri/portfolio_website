<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Skills') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex justify-end p-2 m-2">
                <a href="{{ route('skills.create') }}"
                class="px-4 py-2 text-black rounded-lg bg-cyan-400 hover:bg-indigo-700">New Skill</a>
                </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            Name
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Iamge
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($skills as $skill)
                    <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700">
                        <th scope="row" 
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $skill->name }}
                        </th>
                        <td class="px-6 py-4">
                            <img src="{{ asset('storage/'. $skill->image) }}" class="w-7 h-7">
                        </td>
                        <td class="flex justify-end px-6 py-4">
                            <a href="{{ route('skills.edit', $skill->id) }}"
                                class="mr-5 font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                               
    
                                  <form method="POST" action="{{ route('skills.destroy', $skill->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class=" mr-3 font-medium bg-yellow-500 dark:text-red-500 hover:underline"
                                            onclick="return confirm('Are you sure??')">Delete</button>

                                  </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>
                            <h2>No skiils</h2>
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>