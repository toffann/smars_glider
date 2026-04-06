<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>SMARS GLIDER - Masuk / Daftar</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            body { 
                font-family: 'Instrument Sans', sans-serif;
                /* Background gradasi krem halus sesuai branding SMARS GLIDER */
                background: radial-gradient(circle at top, #FFF5E6 0%, #FDFDFC 100%);
            }
            /* Shadow samar untuk card agar terlihat melayang lembut */
            .shadow-samar {
                box-shadow: 0 20px 40px -15px rgba(0, 0, 0, 0.1);
            }
            /* Shadow logo mengikuti bentuk gambar */
            .logo-samar {
                filter: drop-shadow(0 15px 25px rgba(166, 112, 50, 0.25));
            }
        </style>
    </head>
    <body class="antialiased min-h-screen flex flex-col items-center justify-center p-6">
        
        <div class="mb-10">
            <h1 class="text-6xl font-black text-[#5D4037] tracking-tighter">SMARS GLIDER</h1>
        </div>

        <div class="w-full max-w-4xl flex items-center justify-center">
            
            <div class="hidden md:block -mr-20 z-10 pointer-events-none">
                <img src="{{ asset('images/logo.png') }}" class="w-[350px] logo-samar transform -rotate-3">
            </div>

            <div class="w-full max-w-md z-0">
                <div class="bg-white p-12 pt-16 rounded-[2.5rem] shadow-samar border border-white/50">
                    {{ $slot }}
                </div>
            </div>

        </div>

        <footer class="mt-16 text-gray-400 text-sm font-medium uppercase tracking-widest">
            &copy; 2026 SMARS GLIDER
        </footer>
    </body>
</html>