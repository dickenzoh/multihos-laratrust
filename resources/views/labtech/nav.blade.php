<x-slot name="header">
    <div class="flex">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('labqueue')" :active="request()->routeIs('labqueue')">
                {{ __('Queue') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('labpatient')" :active="request()->routeIs('labpatient')">
                {{ __('Patiet') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('labreports')" :active="request()->routeIs('labreports')">
                {{ __('Reports') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('labcalendar')" :active="request()->routeIs('labcalendar')">
                {{ __('Calendar') }}
            </x-nav-link>
        </div>
    </div>
</x-slot>