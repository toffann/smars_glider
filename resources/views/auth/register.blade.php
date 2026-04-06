<x-guest-layout>
    <h2 class="text-3xl font-black text-[#5D4037] mb-8 text-center">Daftar</h2>

    <form method="POST" action="{{ route('register') }}" class="space-y-4">
        @csrf

        <x-text-input id="name" class="block w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="Username" />
        
        <x-text-input id="whatsapp" class="block w-full" type="text" name="whatsapp" required placeholder="No. Whatsapp" />

        <x-text-input id="email" class="block w-full" type="email" name="email" required placeholder="E-mail" />

        <x-text-input id="password" class="block w-full" type="password" name="password" required placeholder="Password" />

        <x-text-input id="password_confirmation" class="block w-full" type="password" name="password_confirmation" required placeholder="Konfirmasi Password" />

        <div class="pt-4">
            <x-primary-button>
                Daftar
            </x-primary-button>
        </div>

        <div class="text-center mt-6">
            <p class="text-gray-400 text-sm font-medium">
                Sudah Punya Akun? 
                <a href="{{ route('login') }}" class="text-[#A67032] font-bold hover:underline">Masuk</a>
            </p>
        </div>
    </form>
</x-guest-layout>