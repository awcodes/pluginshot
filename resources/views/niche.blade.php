<x-layout :title="$plugin->title">
    <div class="absolute top-[70px] inset-x-[70px] text-9xl font-bold leading-none text-shadow text-center z-10">
        {{ $plugin->title }}
    </div>
    <div class="absolute top-[250px] inset-x-[70px] text-5xl text-shadow leading-[1.3] -mt-6 text-center z-10">
        {{ $plugin->description }}
    </div>
    <div id="featured" class="absolute bottom-[210px] inset-x-0 flex justify-center text-center">
        <div class="relative w-[1000px] h-[1000px] shadow-2xl rounded-full overflow-hidden border-[70px] border-gray-500/60 bg-gray-900/30">
            <img src="{{ $plugin->featured_image }}" alt="" width="1400" height="816" class="w-auto h-full block">
            <div class="absolute inset-0 rounded-full" style="box-shadow: inset 0 0 40px 0 rgb(0 0 0 / 1);"></div>
        </div>
    </div>
</x-layout>
