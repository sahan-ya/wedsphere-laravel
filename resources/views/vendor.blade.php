<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Browse Vendors - WedSphere</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
  <link href={{ asset('css/style.css') }} rel="stylesheet">
</head>

<body>
     @include('layouts.header')
    <body class="bg-gray-100 min-h-screen">
          
    <div class="container py-12">
        <a class="back-btn" href="{{ url('/features') }}">back</a>
        <h1 class="text-5xl font-extrabold text-center text-pink-700 mb-12 drop-shadow-sm">Find Your Perfect Wedding Vendors</h1>

        <!-- Search and Filter Section (Placeholder) -->
        <div class="bg-white p-6 rounded-xl shadow-md mb-8 flex flex-col md:flex-row items-center justify-between space-y-4 md:space-y-0 md:space-x-4">
            <input type="text" placeholder="Search by vendor name or type..." class="flex-grow px-4 py-2 border border-gray-300 rounded-md focus:ring-rose-500 focus:border-rose-500 text-gray-700">
            <select class="px-4 py-2 border border-gray-300 rounded-md focus:ring-rose-500 focus:border-rose-500 text-gray-700">
                <option value="">All Categories</option>
                <option value="Caterers">Caterers</option>
                <option value="Photographers">Photographers</option>
                <option value="Decorators">Decorators</option>
                <option value="DJs">DJs & Entertainment</option>
                <option value="Salons">Salons & Makeup Artists</option>
                <option value="Planners">Wedding Planners</option>
            </select>
            <button class="px-6 py-2 bg-pink-700 text-white font-semibold rounded-lg shadow-md hover:bg-rose-600 focus:outline-none focus:ring-2 focus:ring-rose-500 focus:ring-offset-2 transition duration-150 ease-in-out">
                Apply Filters
            </button>
        </div>

        <!-- Vendor List Section -->
        <div id="vendor-list" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Example Vendor Card 1 -->
            <div class="vendor-card">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Grand Feast Catering</h2>
                <p class="text-rose-600 font-semibold mb-2">Caterers</p>
                <p class="text-gray-600 mb-4 flex-grow">Offering exquisite culinary experiences from lavish buffets to elegant plated dinners. Specializing in international and local cuisines for weddings of all sizes.</p>
                <div class="mt-auto"> <!-- Push button to the bottom -->
                    <button class="w-full py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        View Details
                    </button>
                </div>
            </div>

            <!-- Example Vendor Card 2 -->
            <div class="vendor-card">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Eternal Moments Photography</h2>
                <p class="text-rose-600 font-semibold mb-2">Photographers</p>
                <p class="text-gray-600 mb-4 flex-grow">Capturing the magic of your special day with a blend of candid and posed shots. High-quality albums and cinematic wedding videos available.</p>
                <div class="mt-auto">
                    <button class="w-full py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        View Details
                    </button>
                </div>
            </div>

            <!-- Example Vendor Card 3 -->
            <div class="vendor-card">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Enchanting Blooms Decor</h2>
                <p class="text-rose-600 font-semibold mb-2">Decorators</p>
                <p class="text-gray-600 mb-4 flex-grow">Transforming venues into dreamscapes with bespoke floral arrangements, elegant lighting, and personalized themes. From classic to contemporary.</p>
                <div class="mt-auto">
                    <button class="w-full py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        View Details
                    </button>
                </div>
            </div>

            <!-- Example Vendor Card 4 -->
            <div class="vendor-card">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Groove Masters DJ Service</h2>
                <p class="text-rose-600 font-semibold mb-2">DJs & Entertainment</p>
                <p class="text-gray-600 mb-4 flex-grow">Keeping your guests dancing all night with a versatile selection of music and professional sound systems. Customizable playlists for every taste.</p>
                <div class="mt-auto">
                    <button class="w-full py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        View Details
                    </button>
                </div>
            </div>

            <!-- Example Vendor Card 5 -->
            <div class="vendor-card">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Bridal Glow Salon</h2>
                <p class="text-rose-600 font-semibold mb-2">Salons & Makeup Artists</p>
                <p class="text-gray-600 mb-4 flex-grow">Expert bridal makeup, hairstyling, and pre-wedding pampering packages to make you shine on your big day. On-site services available.</p>
                <div class="mt-auto">
                    <button class="w-full py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        View Details
                    </button>
                </div>
            </div>

            <!-- Example Vendor Card 6 -->
            <div class="vendor-card">
                <h2 class="text-2xl font-bold text-gray-800 mb-2">Elite Event Planners</h2>
                <p class="text-rose-600 font-semibold mb-2">Wedding Planners</p>
                <p class="text-gray-600 mb-4 flex-grow">Comprehensive wedding planning services from conceptualization to execution. Managing every detail for a stress-free celebration.</p>
                <div class="mt-auto">
                    <button class="w-full py-3 bg-blue-600 text-white font-bold rounded-lg hover:bg-blue-700 shadow-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                        View Details
                    </button>
                </div>
            </div>
        </div>
    </div>

     @include('layouts.footer') 
</body>
</html>