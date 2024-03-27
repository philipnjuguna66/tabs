<x-filament::widget>
    <div class="filament-widget">

        <div>
            <div class="sm:hidden">
                <label for="tabs" class="sr-only">Select a tab</label>
                <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                <select id="tabs" wire:model='currentWidget' name="tabs" class="block dark:text-gray-50 dark:bg-gray-900 w-full rounded-md border-gray-300 focus:border-indigo-500 focus:ring-indigo-500">
                    @foreach ($widgets as $index => $widget)
                    <option wire:click="selectWidget({{ $index }})" value="{{ $index }}">{{ $this->getWidgetDisplayName($widget) }}</option>
                    @endforeach
                </select>
            </div>
            <div class="hidden sm:block">
                <div class="border-b border-gray-200">
                    <nav class="-mb-px flex space-x-8" aria-label="Tabs">

                        @foreach ($widgets as $index => $widget)


                        <a wire:click.prevent="selectWidget({{ $index }})" href="#" class=" {{ $currentWidget == $index ? 'border-b border-success-600 text-primary-600 dark:text-gray-50' : 'dark:text-gray-400' }} border-transparent hover:border-primary-300 hover:text-primary-700 group inline-flex items-center border-b-2 py-4 px-1 text-sm font-medium">
{{--                            <svg class="text-gray-400 group-hover: -ml-0.5 mr-2 h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">--}}
{{--                                <path fill-rule="evenodd" d="M4 16.5v-13h-.25a.75.75 0 010-1.5h12.5a.75.75 0 010 1.5H16v13h.25a.75.75 0 010 1.5h-3.5a.75.75 0 01-.75-.75v-2.5a.75.75 0 00-.75-.75h-2.5a.75.75 0 00-.75.75v2.5a.75.75 0 01-.75.75h-3.5a.75.75 0 010-1.5H4zm3-11a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zM7.5 9a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1zM11 5.5a.5.5 0 01.5-.5h1a.5.5 0 01.5.5v1a.5.5 0 01-.5.5h-1a.5.5 0 01-.5-.5v-1zm.5 3.5a.5.5 0 00-.5.5v1a.5.5 0 00.5.5h1a.5.5 0 00.5-.5v-1a.5.5 0 00-.5-.5h-1z" clip-rule="evenodd" />--}}
{{--                            </svg>--}}
                            <span>  {{ $this->getWidgetDisplayName($widget) }}</span>
                        </a>
                        @endforeach

                    </nav>
                </div>
            </div>
        </div>

<div class="mt-4">

    @livewire($this->widgets[$this->currentWidget], $this->getViewData(), key('item-'.$this->currentWidget))
</div>

    </div>

</x-filament::widget>
