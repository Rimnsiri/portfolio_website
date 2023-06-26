<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Store new Project
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto bg-white rounded-md shadow-md sm:px-6 lg:px-8">
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>
             
            <form method="POST" action="{{ route('projects.store') }}" class="p-4" enctype="multipart/form-data">
                @csrf

                
<label for="skill_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Skill</label>
<select id="skill_id" name="skill_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
 @foreach ($skills as $skill)
     <option value="{{$skill->id}}">{{$skill->name}}
 @endforeach
</select>

                <!-- Name of projects -->
                <div class="mt-2" >
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block w-full mt-1" type="text" name="name" :value="old('name')" />
                </div>
                                <!-- project URL-->
                                <div class="mt-2">
                                    <x-input-label for="project_url" :value="__('URL')" />
                                    <x-text-input id="project_url" class="block w-full mt-1" type="text" name="project_url" :value="old('project_url')"  />
                                </div>

                <!-- Image -->
                <div class="mt-4">
                    <x-input-label for="image" :value="__('Image')" />

                    <x-text-input id="image" class="block w-full mt-1"
                                    type="file"
                                    name="image"/>

                </div>


                <div class="flex items-center justify-end mt-4">

                    <x-primary-button class="ml-3">
                     Store 
                    </x-primary-button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>