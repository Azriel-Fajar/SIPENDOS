@props(['title' => '', 'btnClass' => '', 'btnClassDrop' => ''])

<x-base-layout :$title>
    {{-- Loader --}}
    <div id="loader">
        <div class="spinner"></div>
    </div>

    {{-- <!-- Sidebar --> --}}
    <x-layouts.sidebar :$btnClass :$btnClassDrop />

    {{-- <!-- Main Content --> --}}
    <main class="main-content" id="main-content">
        <!-- Header -->
        <x-layouts.header />
        {{-- <!-- End Header --> --}}

        {{-- <!-- Content --> --}}
        {{ $slot }}
    </main>
</x-base-layout>
