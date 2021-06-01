<x-slot name="header">
    <div class="flex">
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('regpatientreg')" :active="request()->routeIs('regpatientreg')">
                {{ __('Patient Registration') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('regreports')" :active="request()->routeIs('regreports')">
                {{ __('Report') }}
            </x-nav-link>
        </div>
        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
            <x-nav-link :href="route('regcalendar')" :active="request()->routeIs('regcalendar')">
                {{ __('Calendar') }}
            </x-nav-link>
        </div>
    </div>
</x-slot>