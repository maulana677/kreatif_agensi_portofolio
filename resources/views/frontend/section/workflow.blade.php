<section id="Workflow" class="container mx-auto pt-16 pb-20 px-6">
    <div class="text-center mb-12">
        <h2 class="font-extrabold text-4xl md:text-5xl leading-tight">{{ $workflowTitle->title }}</h2>
        <p class="font-medium text-lg md:text-xl mt-4">{{ $workflowTitle->sub_title }}</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-10">
        @forelse ($workflows as $workflow)
            <div class="bg-white rounded-lg shadow-lg p-6 flex flex-col items-center text-center">
                <div class="flex-none mb-6">
                    <img src="{{ asset($workflow->icon) }}" class="w-20 h-20 object-contain" alt="icon">
                </div>
                <h3 class="font-extrabold text-xl mb-4">{{ $workflow->title }}</h3>
                <p class="text-base">{{ $workflow->sub_title }}</p>
            </div>
        @empty
            <p class="col-span-full text-center">Tidak ada data</p>
        @endforelse
    </div>
</section>
