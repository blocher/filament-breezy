<x-filament-breezy::grid-section md=2 :title="__('filament-breezy::default.profile.browser_sessions.heading')" :description="__('filament-breezy::default.profile.browser_sessions.subheading')">
    <div class="bg-white rounded-lg shadow-sm ring-1 ring-gray-950/5 p-6 dark:bg-gray-900 dark:ring-white/10">
        <x-filament-schemas::form>
            {{ $this->form }}
        </x-filament-schemas::form>

        <x-filament-actions::modals />
    </div>
</x-filament-breezy::grid-section>
