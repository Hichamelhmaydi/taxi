<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>GrandTaxiGo</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="font-sans bg-gray-100">

<!-- Header with Logo -->
<header class="bg-yellow-600 text-black py-12 relative overflow-hidden">
    <div class="container mx-auto text-center relative z-10">
        <div class="flex justify-center items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-taxi-front" viewBox="0 0 16 16">
                <path d="M4.862 5.276 3.906 7.19a.51.51 0 0 0 .497.731c.91-.073 2.35-.17 3.597-.17s2.688.097 3.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 10.691 5H5.309a.5.5 0 0 0-.447.276M4 10a1 1 0 1 1-2 0 1 1 0 0 1 2 0m10 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m-9 0a1 1 0 0 1 1-1h4a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1"/>
                <path d="M6 1a1 1 0 0 0-1 1v1h-.181A2.5 2.5 0 0 0 2.52 4.515l-.792 1.848a.8.8 0 0 1-.38.404c-.5.25-.855.715-.965 1.262L.05 9.708a2.5 2.5 0 0 0-.049.49v.413c0 .814.39 1.543 1 1.997V14.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1.338c1.292.048 2.745.088 4 .088s2.708-.04 4-.088V14.5a.5.5 0 0 0 .5.5h2a.5.5 0 0 0 .5-.5v-1.892c.61-.454 1-1.183 1-1.997v-.413q0-.248-.049-.49l-.335-1.68a1.8 1.8 0 0 0-.964-1.261.8.8 0 0 1-.381-.404l-.792-1.848A2.5 2.5 0 0 0 11.181 3H11V2a1 1 0 0 0-1-1zM4.819 4h6.362a1.5 1.5 0 0 1 1.379.91l.792 1.847a1.8 1.8 0 0 0 .853.904c.222.112.381.32.43.564l.336 1.679q.03.146.029.294v.413a1.48 1.48 0 0 1-1.408 1.484c-1.555.07-3.786.155-5.592.155s-4.037-.084-5.592-.155A1.48 1.48 0 0 1 1 10.611v-.413q0-.148.03-.294l.335-1.68a.8.8 0 0 1 .43-.563c.383-.19.685-.511.853-.904l.792-1.848A1.5 1.5 0 0 1 4.82 4Z"/>
              </svg>
            <h1 class="text-5xl font-extrabold mb-6 text-white">GrandTaxiGo</h1>
        </div>
        <p class="text-xl md:text-2xl text-white">Voyages interurbains, confort et sécurité à chaque trajet.</p>
    </div>
    <svg class="absolute bottom-0 left-0 w-full h-32 text-yellow-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="currentColor" d="M0,256L1440,160L1440,320L0,320Z"></path>
    </svg>
</header>

<!-- Navbar -->
<nav class="bg-black text-white shadow-md">
    <div class="container mx-auto px-4 py-5 flex justify-between items-center">
        <div class="flex items-center">
            <a href="#" class="text-white text-2xl font-semibold hover:text-yellow-400 transition-colors">GrandTaxiGo</a>
        </div>
        <div class="space-x-6 text-lg">
            <a href="#services" class="hover:text-yellow-400 transition-colors"> Services</a>
            <a href="#reservations" class="hover:text-yellow-400 transition-colors">Réservation</a>
            <a href="#about" class="hover:text-yellow-400 transition-colors">À propos</a>
            <a href="#contact" class="hover:text-yellow-400 transition-colors">Contact</a>
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
            @else
                    <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                @endif
             @endauth
                </div>
            @endif
                </div>
        </div>
    </div>
</nav>

<!-- Main Section -->
<main class="py-16 bg-gray-50">
    <div class="container mx-auto text-center mb-12">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-6">Réservez votre voyage maintenant</h2>
        <p class="text-lg text-gray-600">Choisissez votre taxi, votre destination et profitez d'un trajet sécurisé et confortable.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Taxi Standard -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition-all hover:scale-105 hover:shadow-xl relative">
            <img class="w-full h-56 object-cover" src="https://via.placeholder.com/500x300?text=Taxi+Standard" alt="Taxi Standard">
            <div class="absolute top-4 right-4 text-yellow-600 text-3xl opacity-80 hover:opacity-100 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-10 h-10">
                    <path d="M12 2v20m-10-10h20" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-semibold text-gray-800">Taxi Standard</h3>
                <p class="text-gray-600 mt-4">Un véhicule confortable et spacieux pour vos déplacements entre villes à prix abordable.</p>
                <button class="mt-6 bg-yellow-600 text-black py-2 px-6 rounded-full text-lg hover:bg-yellow-700 transition-all">
                    Réserver maintenant
                </button>
            </div>
        </div>

        <!-- Taxi VIP -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition-all hover:scale-105 hover:shadow-xl relative">
            <img class="w-full h-56 object-cover" src="https://via.placeholder.com/500x300?text=Taxi+VIP" alt="Taxi VIP">
            <div class="absolute top-4 right-4 text-yellow-600 text-3xl opacity-80 hover:opacity-100 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-10 h-10">
                    <path d="M12 2v20m-10-10h20" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-semibold text-gray-800">Taxi VIP</h3>
                <p class="text-gray-600 mt-4">Voyagez dans le luxe et le confort avec nos taxis VIP, offrant des services premium adaptés à vos besoins.</p>
                <button class="mt-6 bg-black text-white py-2 px-6 rounded-full text-lg hover:bg-gray-800 transition-all">
                    Réserver maintenant
                </button>
            </div>
        </div>

        <!-- Taxi Économique -->
        <div class="bg-white shadow-lg rounded-lg overflow-hidden transform transition-all hover:scale-105 hover:shadow-xl relative">
            <img class="w-full h-56 object-cover" src="https://via.placeholder.com/500x300?text=Taxi+Économique" alt="Taxi Économique">
            <div class="absolute top-4 right-4 text-yellow-600 text-3xl opacity-80 hover:opacity-100 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" class="w-10 h-10">
                    <path d="M12 2v20m-10-10h20" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"></path>
                </svg>
            </div>
            <div class="p-6">
                <h3 class="text-2xl font-semibold text-gray-800">Taxi Économique</h3>
                <p class="text-gray-600 mt-4">Option économique mais confortable pour vos trajets à moindre coût, tout en garantissant votre satisfaction.</p>
                <button class="mt-6 bg-yellow-600 text-black py-2 px-6 rounded-full text-lg hover:bg-yellow-700 transition-all">
                    Réserver maintenant
                </button>
            </div>
        </div>
    </div>

    <!-- About Section -->
    <section id="about" class="py-16 bg-gray-100">
        <div class="container mx-auto text-center">
            <h2 class="text-4xl font-extrabold text-gray-900 mb-6">À propos de notre service</h2>
            <p class="text-lg text-gray-600">GrandTaxiGo vous offre une expérience de transport fiable et confortable. Nous mettons à votre disposition une flotte de véhicules adaptés à tous vos besoins, que ce soit pour un voyage d'affaires ou une escapade en famille.</p>
            <div class="mt-8 flex justify-center space-x-8">
                <div class="w-1/3">
                    <img src="https://via.placeholder.com/300x200?text=Voyage+Confortable" alt="Voyage Confortable" class="rounded-lg shadow-lg">
                    <p class="mt-4 text-gray-600">Voyagez dans le confort absolu.</p>
                </div>
                <div class="w-1/3">
                    <img src="https://via.placeholder.com/300x200?text=Service+Fiable" alt="Service Fiable" class="rounded-lg shadow-lg">
                    <p class="mt-4 text-gray-600">Service fiable et ponctuel.</p>
                </div>
                <div class="w-1/3">
                    <img src="https://via.placeholder.com/300x200?text=Prix+Abordables" alt="Prix Abordables" class="rounded-lg shadow-lg">
                    <p class="mt-4 text-gray-600">Des prix abordables pour tous.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<!-- Footer -->
<footer class="bg-black text-white py-8 mt-16">
    <div class="container mx-auto text-center">
        <p>&copy; 2025 GrandTaxiGo. Tous droits réservés. | <a href="#contact" class="hover:text-yellow-400">Contactez-nous</a></p>
    </div>
</footer>

</body>
</html>
