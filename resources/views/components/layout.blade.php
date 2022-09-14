<!doctype html>
<head>
<title>Cities</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/datepicker.js"></script>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="https://unpkg.com/vue@3"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<meta name="csrf-token" content="{{ csrf_token() }}" />
</head>
<body style="font-family: Open Sans, sans-serif">
        <nav class="p-4 bg-gray-100 md:flex md:justify-between md:items-center">
            <div>
                <a href="/cities">
                    <img src="/images/logo-1.png" alt="logo" width="165" height="16">
                </a>
            </div>

            <div class="mt-8 md:mt-0">
                <a href="/cities" class=" mr-6 font-bold uppercase">Cities</a>
                <a href="/airlines" class=" mr-6 font-bold uppercase">Airlines</a>
                <a href="/flights" class=" mr-6 font-bold uppercase">Flights</a>
            </div>
        </nav>
        {{$slot}}
</body>
