@props(['skills','projects'])
<div class="container mx-auto" x-data="{selectedTab: 'all'}">
    <nav class="relative w-full overflow-x-auto mb-12 border-b-2 border-light-tail-100 dark:text-dark-navy-100">
    <ul class="inline-flex" >
        <li class="m-4 capitalize cursor-pointer">
            <button @click="selectedTab = 'all'"
            
            class="w-32 px-5 py-2 text-center text-white rounded-md transition bg-light-tail-500 dark:bg-dark-navy-100 hover:bg-accent"
            :class="selectedTab =='all'? 'bg-accent' : ''">All</button> 
        </li>
@foreach($skills as $projectSkill)
<li class="m-4 capitalize cursor-pointer" x-data="{projectSkill:{{ json_encode($projectSkill)}}}">

    
    <button @click="selectedTab = projectSkill.id"
    class="w-32 px-5 py-2 text-center text-white  rounded-md transition bg-light-tail-500 dark:bg-dark-navy-100 hover:bg-accent" :class="selectedTab == projectSkill.id ? 'bg-accent' : ''">{{$projectSkill->name}}</button>
    
</li>
    
@endforeach
        
    </ul>    
    </nav> 
    <section class="grid gap-y-12 md:grid-cols-2 md:gap-4 lg:grid-cols-3 lg:gap-2">
        @foreach($projects as $project)
        <x-frontend.project :project="$project"></x-frontend.project>
            
        @endforeach
        
    </section>

</div>