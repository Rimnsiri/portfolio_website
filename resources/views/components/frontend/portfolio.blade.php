@props(['skills','projects'])
<section id="portfolio" class="section bg-light-primary dark:bg-dark-primary min-h-[1400px]">
<div class="container mx-auto">
<div class="flex flex-col items-center text-center">
    <h2 class="section-title">MY Latest Work</h2>
    <p class="subtitle">
        Hello I'm Rim 
    </p>
    
</div>    

</div>
<x-frontend.projects :skills="$skills" :projects="$projects"></x-frontend.projects>
</section>