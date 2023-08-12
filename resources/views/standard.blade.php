<x-layout :title="$plugin->title">
    <div class="absolute top-[70px] left-[70px] text-9xl font-bold leading-none text-shadow tracking-wide">
        {{ $plugin->title }}
    </div>
    <div class="absolute top-[250px] left-[70px] text-5xl max-w-4xl text-shadow leading-[1.3] -mt-6">
        {{ $plugin->description }}
    </div>
    <div id="secondary" class="screenshot aspect-auto-[1400/816] absolute shadow-2xl rounded-3xl overflow-hidden border border-gray-900 bottom-[70px] left-[70px]">
        <img src="{{ $plugin->secondary_image }}" alt="" width="1400" height="816" class="w-auto h-full object-cover">
    </div>
    <div id="featured" class="screenshot aspect-auto-[1400/816] absolute shadow-2xl rounded-3xl overflow-hidden border border-gray-900 bottom-[390px] right-[70px]">
        <img src="{{ $plugin->featured_image }}" alt="" width="1400" height="816" class="w-auto h-full object-cover">
    </div>
</x-layout>
