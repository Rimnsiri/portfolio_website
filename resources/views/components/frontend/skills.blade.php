@props(['skills'])
<section class="py-24 bg-light-tail-100 dark:bg-dark-navy-500">
    <div class="container mx-auto">
        <div class="grid grid-cols-8 md:grid-flow-col">
            @foreach($skills as $skill)
            <div class="flex items-center justify-center">
                <img src="{{asset('/storage/'. $skill->image)}}" class="lg:h-11" alt="{{$skill->name}}">
            </div>
                
            @endforeach
            
        </div>
        
    </div>

</section>