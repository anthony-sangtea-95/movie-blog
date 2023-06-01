<x-app-layout meta-title="About Us" meta-description="Get to know about us more">
    <section class="w-full flex flex-col items-center px-3">

        <article class="w-full shadow my-4">
            <!-- Article Image -->

            <a href="#" class="hover:opacity-75">
                <img src="/storage/{{ $widget->image }}" style="width:100%">
            </a>
            <div class="bg-white flex flex-col justify-start p-6">
                <h2 class="text-xl font-bold">{!! $widget->title !!}</h2>
                <p class="text-sm pb-8 w-full">
                    {!! $widget->content !!}
                </p>
                
            </div>
        </article>
    </section>
</x-app-layout>