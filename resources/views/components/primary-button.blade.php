<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full flex justify-center items-center px-4 py-4 bg-[#A67032] border border-transparent rounded-2xl font-black text-white text-lg hover:bg-[#5D4037] focus:outline-none transition duration-150 shadow-lg shadow-orange-100']) }}>
    {{ $slot }}
</button>