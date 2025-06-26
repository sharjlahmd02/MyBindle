<style>
    .custom-save-btn {
        background-color: #007BFF;
        /* Bootstrap Blue */
        color: #ffffff;
        padding: 10px 24px;
        border: none;
        border-radius: 6px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .custom-save-btn:hover {
        background-color: #0056b3;
        /* Darker blue on hover */
    }
</style>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800">Editing: {{ ucfirst($section) }} Section</h2>
    </x-slot>

    <div class="p-6">
        @if (session('success'))
            <div class="mb-4 text-green-600 font-semibold">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('cms.update', $section) }}" enctype="multipart/form-data">
            @csrf

            @forelse ($data as $key => $value)
                <div class="mb-4">
                    <label for="{{ $key }}" class="block text-sm font-medium text-gray-700 mb-1">
                        {{ ucfirst(str_replace('_', ' ', $key)) }}
                    </label>

                    @if(str_contains($key, 'desc') || str_contains($key, 'subheading'))
                        <textarea name="{{ $key }}" rows="4" class="w-full border rounded px-3 py-2">{{ $value }}</textarea>
                    @else
                        @if (str_contains($key, 'image'))
                            @if ($value)
                                <div class="mb-2">
                                    <img src="{{ asset('storage/' . $value) }}" width="200" alt="Current Image">
                                </div>
                            @endif
                            <input type="file" name="{{ $key }}" class="w-full border rounded px-3 py-2">
                        @else
                            <input type="text" name="{{ $key }}" value="{{ $value }}" class="w-full border rounded px-3 py-2">
                        @endif
                    @endif
                </div>
            @empty
                <p>No data found for this section.</p>
            @endforelse

            <button type="submit" class="custom-save-btn">
                Save Changes
            </button>

        </form>
    </div>
</x-app-layout>