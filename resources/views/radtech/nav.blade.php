<x-slot name="header">
    <div class="flex">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('radqueue')" :active="request()->routeIs('radqueue')">
                {{ __('Queue') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('radpatient')" :active="request()->routeIs('radpatient')">
                {{ __('Patiet') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('radreports')" :active="request()->routeIs('radreports')">
                {{ __('Reports') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('radcalendar')" :active="request()->routeIs('radcalendar')">
                {{ __('Calendar') }}
            </x-nav-link>
        </div>
    </div>
</x-slot>