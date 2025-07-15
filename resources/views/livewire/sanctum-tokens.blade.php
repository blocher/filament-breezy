<x-filament-breezy::grid-section md=2 :title="__('filament-breezy::default.profile.sanctum.title')" :description="__('filament-breezy::default.profile.sanctum.description')">
        @if($plainTextToken)
            <div class="space-y-2 bg-warning-500 p-4 rounded">
                <p class="text-sm">{{ __('filament-breezy::default.profile.sanctum.create.message') }}</p>
                <input type="text" disabled @class(['w-full py-1 px-3 rounded-lg bg-gray-100 border-gray-200 dark:bg-gray-700 dark:border-gray-500']) name="plain_text_token" value="{{$plainTextToken}}" />
                <div class="flex items-center justify-between">
                    <div class="inline-block text-xs">
                        <x-filament-breezy::clipboard-link :data="$plainTextToken" />
                    </div>
                    <button type="button" wire:click="$set('plainTextToken',null)" class="inline-flex items-center px-3 py-2 text-sm font-medium text-gray-500 bg-white border border-gray-300 rounded-md hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary-500">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                        {{ __('filament-breezy::default.profile.sanctum.copied.label') }}
                    </button>
                </div>

            </div>

        @endif
        <div style="display: {{ $plainTextToken ? 'none' : '' }}">
            {{ $this->table }}
        </div>

</x-filament-breezy::grid-section>
