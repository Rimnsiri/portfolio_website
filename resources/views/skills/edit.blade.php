<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            Edit Skill
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-md mx-auto bg-white rounded-md shadow-md sm:px-6 lg:px-8">
            <x-auth-validation-errors class="mb-4" :errors="$errors"/>
             
            <form method="POST" action="{{ route('skills.update', $skill->id) }}" class="p-4" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <!-- Name of skills -->
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block w-full mt-1" type="text" name="name" 
                    :value="old('name', $skill->name)" autofocus />
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
                        Update
                    </x-primary-button>
                </div>
            </form>

        </div>
    </div>
</x-app-layout>