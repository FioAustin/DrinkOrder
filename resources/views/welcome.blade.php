<!DOCTYPE html>
<html lang="id" data-theme="emerald">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Minuman Sehat</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-base-200 min-h-screen pb-10">

    <div class="navbar bg-base-100 shadow-md">
        <div class="flex-1">
            <a class="btn btn-ghost text-xl font-bold text-primary">HealthyDrinks.</a>
        </div>
        <div class="flex-none">
            <button class="btn btn-square btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </button>
            <a href="#" class="btn btn-primary ml-2">Login</a>
        </div>
    </div>

    <div class="container mx-auto px-4 mt-8">
        <h1 class="text-3xl font-bold mb-6">Menu Favorit Kami</h1>

        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">

            <div class="card bg-base-100 shadow-xl">
                <figure><img src="https://images.unsplash.com/photo-1623065422902-30a2d299bbe4?q=80&w=500&auto=format&fit=crop" alt="Smoothie" /></figure>
                <div class="card-body">
                    <h2 class="card-title">Avocado Green Booster</h2>
                    <p class="text-sm text-gray-500">Kaya akan protein dan serat alami untuk memulai harimu.</p>
                    <div class="card-actions justify-between items-center mt-4">
                        <span class="text-xl font-bold">Rp 25.000</span>
                        <button class="btn btn-primary btn-sm">Beli</button>
                    </div>
                </div>
            </div>

        </div>
    </div>

</body>

</html>