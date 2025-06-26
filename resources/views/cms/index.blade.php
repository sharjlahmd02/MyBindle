<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">CMS Control Panel</h2>
    </x-slot>

    <div class="p-6">
        <p class="mb-4 text-gray-600">Select a section to edit its content:</p>

        <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
            @foreach ($sections as $section)
                <li class="bg-white p-4 rounded shadow hover:shadow-md transition">
                    <a href="{{ route('cms.edit', $section) }}" class="text-blue-600 font-semibold">
                        Edit {{ ucfirst($section) }} Section
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-app-layout>
