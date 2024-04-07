<x-app-layout>
    <x-slot name="header">
        @extends('dashboard.dashboardNav.nav')
    </x-slot>

    {{-- analystic --}}
      @include('dashboard.main.analytics')
    {{-- End --}}

    {{-- List Ordes --}}
      @include('dashboard.main.listOrders')
    {{-- End --}}
</x-app-layout>
