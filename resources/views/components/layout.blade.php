<!doctype html>

<title>Cities</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>


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
        <a href="/cities" class=" mr-6 font-bold uppercase">Travels</a>

    </div>
</nav>

{{$slot}}

</body>
