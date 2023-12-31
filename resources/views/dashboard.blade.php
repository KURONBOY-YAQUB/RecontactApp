<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Applications
        </h2>
    </x-slot>

    @if (auth()->user()->role->name == 'manager')
        @include('candidates')
    @elseif (auth()->user()->role->name == 'candidate')
        @include('candidate-form')
    @endif
</x-app-layout>
