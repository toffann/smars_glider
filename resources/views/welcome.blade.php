<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SMARS GLIDER - Sugar Glider Reminder</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* Tailwind v4 CSS Reset & Base */
                @layer theme {
                    :root {
                        --color-SMARS GLIDER-brown: #A67032;
                        --color-SMARS GLIDER-text: #5D4037;
                        --color-SMARS GLIDER-cream: #FDFBF7;
                    }
                }
                *,::after,::before{box-sizing:border-box;border:0 solid;margin:0;padding:0}
                html{line-height:1.5;font-family:'Instrument Sans',sans-serif;-webkit-tap-highlight-color:transparent}
                body{background-color:#FDFDFC;color:#1b1b18;min-height:100vh}
                img,svg,video{display:block;max-width:100%;height:auto}
                .backdrop-glass{background-color:rgba(255,255,255,0.7);backdrop-filter:blur(12px)}
                .rounded-SMARS GLIDER{border-radius:2.5rem}
            </style>
        @endif
    </head>
    <body class="bg-[#FDFDFC] text-[#1b1b18] flex flex-col items-center p-6 lg:p-8 antialiased">
        
        <header class="w-full max-w-7xl mx-auto px-6 py-8 sticky top-0 z-50">
            <nav class="bg-white/80 backdrop-blur-md rounded-full shadow-[0_10px_30px_rgba(0,0,0,0.03)] border border-white/50 flex items-center justify-between h-20 px-10">
                <div class="flex items-center gap-3">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="h-12 w-12 object-contain">
                    <span class="text-2xl font-black text-[#5D4037] tracking-tighter">SMARS GLIDER</span>
                </div>
                
                <div class="hidden md:flex items-center gap-10 font-bold text-gray-500">
                    <a href="#tentang" class="hover:text-[#A67032] transition">Tentang</a>
                    <a href="#makan" class="hover:text-[#A67032] transition">Makan</a>
                    <a href="#kandang" class="hover:text-[#A67032] transition">Kandang</a>
                    <a href="#suplemen" class="hover:text-[#A67032] transition">Suplemen</a>
                    <a href="#pengingat" class="hover:text-[#F62F00] transition">Pengingat</a>
                </div>

                <div class="flex items-center gap-6">
                    <a href="{{ route('login') }}" class="text-[#5D4037] font-bold hover:text-[#A67032] transition text-sm">Masuk</a>
                    <a href="{{ route('register') }}" class="bg-white px-8 py-2.5 rounded-full font-bold shadow-sm border border-orange-100 hover:shadow-md transition text-SMARS GLIDER-dark text-sm">
                        Daftar
                    </a>
                </div>
            </nav>
        </header>

        <div class="w-full transition-opacity opacity-100 duration-750">
            <main class="max-w-7xl mx-auto px-6 space-y-12 mt-10">
    
            <section id="tentang" class="bg-white rounded-[2.5rem] p-10 md:p-16 shadow-[0_10px_40px_rgba(0,0,0,0.03)] flex flex-col md:flex-row items-center gap-16 border border-white/50">
                    <div class="flex-1">
                        <p class="text-xl md:text-2xl leading-relaxed text-gray-500 font-medium">
                            Merawat sugar glider kini lebih mudah dengan <span class="text-[#5D4037] font-bold">SMARS GLIDER</span>. Kami menyediakan informasi edukatif dan fitur pengingat perawatan untuk memastikan setiap kebutuhan sugar glider kesayanganmu selalu terpenuhi tepat waktu.
                        </p>
                    </div>
                    <div class="flex-1 flex justify-center">
                        <img src="{{ asset('images/logo.png') }}" class="w-72 md:w-96 drop-shadow-2xl animate-pulse-slow">
                    </div>
                </section>

                <section id="makan" class="bg-white rounded-[2.5rem] p-10 md:p-16 shadow-[0_10px_40px_rgba(0,0,0,0.03)] border border-white/50">
                    <div class="flex flex-col md:flex-row items-center gap-12">
                        <div class="w-full md:w-1/2 flex justify-center">
                            <img src="{{ asset('images/logo_makan.png') }}" class="w-64 h-auto object-contain">
                        </div>
                        <div class="w-full md:w-1/2">
                            <h2 class="text-3xl font-extrabold text-[#5D4037] mb-8 text-right">Jadwal Makan Ideal Sugar Glider</h2>
                            <div class="space-y-3">
                                <div class="flex bg-[#A67032] text-white rounded-full px-8 py-3 font-bold">
                                    <div class="flex-1 text-center">Kegiatan</div>
                                    <div class="w-32 text-center">Waktu</div>
                                </div>
                                <div class="flex items-center bg-[#FDFBF7] rounded-full px-8 py-4 border border-orange-50">
                                    <div class="flex-1 font-bold text-[#5D4037]">Makan Pagi</div>
                                    <div class="text-[#A67032] font-black w-32 text-center">06.00 WIB</div>
                                </div>
                                <div class="flex items-center bg-[#FDFBF7] rounded-full px-8 py-4 border border-orange-50">
                                    <div class="flex-1 font-bold text-[#5D4037]">Cemilan</div>
                                    <div class="text-[#A67032] font-black w-32 text-center">13.00 WIB</div>
                                </div>
                                <div class="flex items-center bg-[#FDFBF7] rounded-full px-8 py-4 border border-orange-50">
                                    <div class="flex-1 font-bold text-[#5D4037]">Makan Malam</div>
                                    <div class="text-[#A67032] font-black w-32 text-center">19.00 WIB</div>
                                </div>
                                <div class="flex items-center bg-[#FDFBF7] rounded-full px-8 py-4 border border-orange-50">
                                    <div class="flex-1 font-bold text-[#5D4037]">Ganti Air Minum</div>
                                    <div class="text-[#A67032] font-black w-32 text-center">Pagi</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="kandang" class="bg-white rounded-[2.5rem] p-10 md:p-16 shadow-[0_10px_40px_rgba(0,0,0,0.03)] border border-white/50">
                    <div class="flex flex-col md:flex-row-reverse items-center gap-12">
                        <div class="w-full md:w-1/2 flex justify-center">
                            <img src="{{ asset('images/logo_kandang.png') }}" class="w-64 h-auto object-contain">
                        </div>
                        <div class="w-full md:w-1/2">
                            <h2 class="text-3xl font-extrabold text-[#5D4037] mb-8">Jadwal Pembersihan Kandang</h2>
                            <div class="space-y-3">
                                <div class="flex bg-[#A67032] text-white rounded-full px-8 py-3 font-bold">
                                    <div class="w-24 text-center border-r border-white/20">Hari</div>
                                    <div class="w-32 text-center border-r border-white/20">Waktu</div>
                                    <div class="flex-1 text-center">Kegiatan</div>
                                </div>
                                <div class="flex items-center bg-[#FDFBF7] rounded-full px-8 py-4 border border-orange-50">
                                    <div class="w-24 text-center font-bold text-[#5D4037]">Senin</div>
                                    <div class="w-32 text-center font-black text-[#A67032]">08.00 WIB</div>
                                    <div class="flex-1 text-center font-bold text-gray-500">Pembersihan Kandang</div>
                                </div>
                                <div class="flex items-center bg-[#FDFBF7] rounded-full px-8 py-4 border border-orange-50">
                                    <div class="w-24 text-center font-bold text-[#5D4037]">Kamis</div>
                                    <div class="w-32 text-center font-black text-[#A67032]">12.00 WIB</div>
                                    <div class="flex-1 text-center font-bold text-gray-500">Pembersihan Kandang</div>
                                </div>
                                <div class="flex items-center bg-[#FDFBF7] rounded-full px-8 py-4 border border-orange-50">
                                    <div class="w-24 text-center font-bold text-[#5D4037]">Minggu</div>
                                    <div class="w-32 text-center font-black text-[#A67032]">14.00 WIB</div>
                                    <div class="flex-1 text-center font-bold text-gray-500">Pembersihan Kandang</div>
                                </div>
                            </div>
                            <button class="mt-8 bg-[#F62F00] text-white px-10 py-3 rounded-full font-bold shadow-lg shadow-red-200">Aktifkan Pengingat</button>
                        </div>
                    </div>
                </section>

                <section id="suplemen" class="bg-white rounded-[2.5rem] p-10 md:p-16 shadow-[0_10px_40px_rgba(0,0,0,0.03)] border border-white/50 text-center">
                    <h2 class="text-3xl font-extrabold text-[#5D4037] mb-12">Suplemen Yang Dianjurkan</h2>
                    <div class="flex flex-col md:flex-row items-center gap-10">
                        <div class="flex-1">
                            <img src="{{ asset('images/logo_suplemen.png') }}" class="w-64 mx-auto">
                        </div>
                        <div class="flex-[2] w-full">
                            <div class="space-y-3">
                                <div class="flex bg-[#A67032] text-white rounded-full px-8 py-3 font-bold">
                                    <div class="w-1/3 text-center">Suplemen</div>
                                    <div class="w-1/3 text-center">Manfaat</div>
                                    <div class="w-1/3 text-center">Frekuensi</div>
                                </div>
                                <div class="flex items-center bg-[#FDFBF7] rounded-full px-8 py-4 border border-orange-50 text-sm">
                                    <div class="w-1/3 font-bold text-[#5D4037]">Kalsium + D3</div>
                                    <div class="w-1/3 text-gray-500 font-medium">Kesehatan tulang</div>
                                    <div class="w-1/3 text-[#A67032] font-black">2-3X/Minggu</div>
                                </div>
                                <div class="flex items-center bg-[#FDFBF7] rounded-full px-8 py-4 border border-orange-50 text-sm">
                                    <div class="w-1/3 font-bold text-[#5D4037]">Multivitamin</div>
                                    <div class="w-1/3 text-gray-500 font-medium">Daya tahan tubuh</div>
                                    <div class="w-1/3 text-[#A67032] font-black">1-2X/Minggu</div>
                                </div>
                                <div class="flex items-center bg-[#FDFBF7] rounded-full px-8 py-4 border border-orange-50 text-sm">
                                    <div class="w-1/3 font-bold text-[#5D4037]">Probiotik</div>
                                    <div class="w-1/3 text-gray-500 font-medium">Pencernaan</div>
                                    <div class="w-1/3 text-[#A67032] font-black">1X/Minggu</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section id="pengingat" class="bg-white rounded-[2.5rem] p-10 md:p-16 shadow-[0_10px_40px_rgba(0,0,0,0.03)] border border-white/50">
                    <div class="flex flex-col md:flex-row items-center gap-12">
                        <div class="flex-[2] text-center md:text-left space-y-6">
                            <h2 class="text-4xl font-black text-[#5D4037]">Pengingat Otomatis</h2>
                            <p class="text-gray-500 text-lg leading-relaxed">
                                Atur jadwal dan dapatkan notifikasi melalui Whatsapp (selama web dibuka dan/atau browser memberikan izin notifikasi).
                            </p>
                            <div class="flex flex-wrap gap-4 pt-4 justify-center md:justify-start">
                                <div class="text-center">
                                    <div class="bg-[#A67032] text-white px-6 py-2 rounded-t-2xl font-bold text-sm">Jenis Pengingat</div>
                                    <div class="bg-[#FDFBF7] p-4 rounded-b-2xl border border-orange-50 w-48 text-gray-300">v</div>
                                </div>
                                <div class="text-center">
                                    <div class="bg-[#A67032] text-white px-6 py-2 rounded-t-2xl font-bold text-sm">Waktu</div>
                                    <div class="bg-[#FDFBF7] p-4 rounded-b-2xl border border-orange-50 w-48 text-gray-300">-- : --</div>
                                </div>
                            </div>
                            <button class="bg-[#F62F00] text-white px-16 py-4 rounded-full font-black text-xl shadow-xl shadow-red-200 hover:scale-105 transition mt-6">Aktifkan</button>
                        </div>
                        <div class="flex-1 flex justify-center">
                            <img src="{{ asset('images/logo_pengingat.png') }}" class="w-64 md:w-80 opacity-90">
                        </div>
                    </div>
                </section>

            </main>
        </div>

        <footer class="w-full text-center py-10 text-gray-400 text-sm font-medium">
            &copy; 2026 SMARS GLIDER
        </footer>
    </body>
</html>