<button {{ $attributes->merge(['class' => 'inline-flex items-center px-4 py-2 bg-[#FF5349] text-white border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-[#e6453e] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#FF5349] transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
