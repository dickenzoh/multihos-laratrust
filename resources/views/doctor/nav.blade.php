<x-slot name="header">
    <div class="flex">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('docqueue')" :active="request()->routeIs('docqueue')">
                {{ __('Queue') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('docpatient')" :active="request()->routeIs('docpatient')">
                {{ __('Patiet') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('ipd')" :active="request()->routeIs('ipd')">
                {{ __('IPD') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('doccalendar')" :active="request()->routeIs('doccalendar')">
                {{ __('Calendar') }}
            </x-nav-link>
        </div>
    </div>
</x-slot>