<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <ul class="flex flex-wrap -mb-px inline-block p-4 border-b-4 border-transparent rounded-t-lg space-x-8 sm:-my-px sm:ms-10 sm:flex">
        <x-nav-link :href="route('manageusers.index')" :active="request()->routeIs('manageusers.index')">
            {{ __('Users') }}
        </x-nav-link>
        <x-nav-link :href="route('managestudents.index')" :active="request()->routeIs('managestudents.index')">
            {{ __('Students') }}
        </x-nav-link>
        <x-nav-link :href="route('managetuition.index')" :active="request()->routeIs('managetuition.index')">
            {{ __('Tuition') }}
        </x-nav-link>
        <x-nav-link :href="route('manageproducts.index')" :active="request()->routeIs('manageproducts.index')">
            {{ __('Products') }}
        </x-nav-link>
        <x-nav-link :href="route('manageec.index')" :active="request()->routeIs('manageec.index')">
            {{ __('Exp Category') }}
        </x-nav-link>
        <x-nav-link :href="route('manageer.index')" :active="request()->routeIs('manageer.index')">
            {{ __('Exp Receiver') }}
        </x-nav-link>
        <x-nav-link :href="route('manageyl.index')" :active="request()->routeIs('manageyl.index')">
            {{ __('Year/Level') }}
        </x-nav-link>
        <x-nav-link :href="route('managesy.index')" :active="request()->routeIs('managesy.index')">
            {{ __('School Year') }}
        </x-nav-link>
    </ul>
</div>
