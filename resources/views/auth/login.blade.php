<x-guest-layout>
    <h2 class="text-3xl font-black text-[#5D4037] mb-8 text-center">Masuk</h2>

    <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <div>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="E-mail / Username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div>
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required placeholder="Password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex justify-end">
            @if (Route::has('password.request'))
                <a class="text-sm text-gray-400 hover:text-[#A67032]" href="{{ route('password.request') }}">
                    Lupa password?
                </a>
            @endif
        </div>

        <div class="pt-2">
            <x-primary-button>
                Masuk
            </x-primary-button>
        </div>

        <div class="text-center mt-6">
            <p class="text-gray-400 text-sm font-medium">
                Belum Punya Akun? 
                <a href="{{ route('register') }}" class="text-[#A67032] font-bold hover:underline">Daftar</a>
            </p>
        </div>
    </form>
</x-guest-layout>