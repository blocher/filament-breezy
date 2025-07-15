<x-filament-breezy::grid-section md=2 :title="__('filament-breezy::default.profile.personal_info.heading')" :description="__('filament-breezy::default.profile.personal_info.subheading')">
    <div class="bg-white rounded-lg shadow-sm ring-1 ring-gray-950/5 p-6 dark:bg-gray-900 dark:ring-white/10">
        <form wire:submit.prevent="submit" class="space-y-6">

            {{ $this->form }}

            <div class="text-right">
                <button type="submit" class="inline-flex items-center px-4 py-2 bg-primary-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-primary-700 active:bg-primary-900 focus:outline-none focus:border-primary-900 focus:ring ring-primary-300 disabled:opacity-25 transition ease-in-out duration-150">
                    {{ __('filament-breezy::default.profile.personal_info.submit.label') }}
                </button>
            </div>
        </form>
    </div>
</x-filament-breezy::grid-section>
