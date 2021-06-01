<x-slot name="header">
    <div class="flex">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('phamqueue')" :active="request()->routeIs('phamqueue')">
                {{ __('Queue') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('phampatient')" :active="request()->routeIs('phampatient')">
                {{ __('Patiet') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('phamreports')" :active="request()->routeIs('phamreports')">
                {{ __('Reports') }}
            </x-nav-link>
        </div>
    </div>
</x-slot>