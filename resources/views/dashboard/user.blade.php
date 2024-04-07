<x-app-layout>
    <x-slot name="header">
        @extends('dashboard.dashboardNav.nav')
    </x-slot>

    {{-- table User --}}

    @include('dashboard.users.userTable')

    {{-- End --}}
</x-app-layout>
