<x-app-layout>
    <div class="py-12 bg-gradient-to-b from-white to-SMARS GLIDER-cream min-h-screen">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-10">
            
            <div class="bg-white/80 backdrop-blur-md p-8 rounded-[2.5rem] shadow-sm border border-white flex flex-col md:flex-row items-center gap-8">
                <div class="flex-1">
                    <h2 class="text-3xl font-bold text-SMARS GLIDER-text">Halo, {{ Auth::user()->name }}!</h2>
                    <p class="text-gray-500 mt-2">Mari jaga kesehatan Sugar Glider-mu dengan pengingat otomatis.</p>
                </div>
                <img src="{{ asset('images/logo.png') }}" class="w-32 h-32 object-contain">
            </div>

            <div class="bg-white/90 backdrop-blur-lg p-8 rounded-[2.5rem] shadow-xl border border-white">
                <h3 class="text-xl font-bold text-SMARS GLIDER-text mb-6 flex items-center">
                    <span class="mr-2">⏰</span> Atur Pengingat WhatsApp
                </h3>
                <form action="{{ route('reminders.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @csrf
                    <div>
                        <label class="block text-sm font-bold text-SMARS GLIDER-brown mb-2">Jenis Perawatan</label>
                        <select name="type" class="w-full rounded-2xl border-gray-100 bg-SMARS GLIDER-cream/50 focus:ring-SMARS GLIDER-brown">
                            <option value="Makan">Makan</option>
                            <option value="Suplemen">Suplemen</option>
                            <option value="Kandang">Pembersihan Kandang</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-SMARS GLIDER-brown mb-2">Waktu (WIB)</label>
                        <input type="time" name="reminder_time" class="w-full rounded-2xl border-gray-100 bg-SMARS GLIDER-cream/50 focus:ring-SMARS GLIDER-brown">
                    </div>
                    <div class="flex items-end">
                        <button type="submit" class="w-full bg-red-600 text-white font-bold py-3 rounded-2xl hover:bg-red-700 transition shadow-lg shadow-red-200">
                            Aktifkan Pengingat
                        </button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</x-app-layout>