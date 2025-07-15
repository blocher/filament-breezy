<x-dynamic-component
    :component="$getFieldWrapperView()"
    :field="$field"
>
    <div>
        <div class="">
            <div class="text-sm text-gray-600">
                <div class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('filament-breezy::default.profile.browser_sessions.content') }}
                </div>
                @if (count($data) > 0)
                    <div class="mt-5 space-y-6">
                        @foreach ($data as $session)
                            <div class="flex items-center">
                                <div>
                                    @if ($session->device['desktop'])
                                        <svg class="w-8 h-8 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 17.25v1.007a3 3 0 01-.879 2.122L7.5 21h9l-.621-.621A3 3 0 0115 18.257V17.25m6-12V15a2.25 2.25 0 01-2.25 2.25H5.25A2.25 2.25 0 013 15V5.25C3 4.007 4.007 3 5.25 3h13.5C19.993 3 21 4.007 21 5.25z"></path>
                                        </svg>
                                    @else
                                        <svg class="w-8 h-8 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10.5 1.5H8.25A2.25 2.25 0 006 3.75v16.5a2.25 2.25 0 002.25 2.25h7.5a2.25 2.25 0 002.25-2.25V3.75a2.25 2.25 0 00-2.25-2.25H13.5m-3 0V3h3V1.5m-3 0h3m-3 18.75h3"></path>
                                        </svg>
                                    @endif
                                </div>

                                <div class="ms-3">
                                    <div class="text-sm text-gray-600 dark:text-gray-400">
                                        {{ $session->device['platform'] ? $session->device['platform'] : __('Unknown') }} - {{ $session->device['browser'] ? $session->device['browser'] : __('Unknown') }}
                                    </div>

                                    <div>
                                        <div class="text-xs text-gray-500">
                                            {{ $session->ip_address }},

                                            @if ($session->is_current_device)
                                                <span class="font-semibold text-primary-500">{{ __('filament-breezy::default.profile.browser_sessions.device') }}</span>
                                            @else
                                                {{ __('filament-breezy::default.profile.browser_sessions.last_active') }} {{ $session->last_active }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif

            </div>
        </div>
    </div>
</x-dynamic-component>
