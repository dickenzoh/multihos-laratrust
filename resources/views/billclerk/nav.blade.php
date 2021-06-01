<x-slot name="header">
    <div class="flex">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('billqueue')" :active="request()->routeIs('billqueue')">
                {{ __('Queue') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('billpatientreg')" :active="request()->routeIs('billpatientreg')">
                {{ __('Patiet Registration') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('billpatient')" :active="request()->routeIs('billpatient')">
                {{ __('Patiet ') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('ipdbill')" :active="request()->routeIs('ipdbill')">
                {{ __('IPD Bill') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('billcalendar')" :active="request()->routeIs('billcalendar')">
                {{ __('Calendar') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('billreports')" :active="request()->routeIs('billreports')">
                {{ __('Reports') }}
            </x-nav-link>
        </div>
    </div>
</x-slot>