@props(['title','description'])
<div @class(["pt-6 gap-4 filament-breezy-grid-section", "grid grid-cols-1 md:grid-cols-2"]) {{ $attributes }}>

    <div class="flex flex-col">
        <h3 @class(['text-lg font-medium filament-breezy-grid-title'])>{{$title}}</h3>

        <p @class(['mt-1 text-sm text-gray-500 filament-breezy-grid-description'])>
            {{$description}}
        </p>
    </div>

    <div class="flex flex-col">
        {{ $slot }}
    </div>

</div>
