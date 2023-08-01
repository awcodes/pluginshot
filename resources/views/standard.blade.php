<x-layout :title="$plugin->title">
    <div class="absolute top-[70px] left-[70px] text-9xl font-bold leading-none text-shadow">
        {{ $plugin->title }}
    </div>
    <div class="absolute top-[250px] left-[70px] text-5xl max-w-5xl text-shadow leading-[1.3] -mt-6">
        {{ $plugin->description }}
    </div>
    <div id="secondary" class="screenshot aspect-auto-[1400/816] absolute w-[1452px] h-[847px] shadow-2xl rounded-2xl overflow-hidden border border-gray-700 bottom-[70px] left-[70px]">
        <img src="{{ $plugin->secondary_image }}" alt="" width="1400" height="816" class="w-auto h-full">
    </div>
    <div id="featured" class="screenshot aspect-auto-[1400/816] absolute w-[1452px] h-[847px] shadow-2xl rounded-2xl overflow-hidden border border-gray-700 bottom-[250px] right-[70px]">
        <img src="{{ $plugin->featured_image }}" alt="" width="1400" height="816" class="w-auto h-full">
    </div>
</x-layout>
