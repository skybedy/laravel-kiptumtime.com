<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>kiptumtime</title>

     <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Architects+Daughter&display=swap" rel="stylesheet">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="{{asset("vendor/cookie-consent/css/cookie-consent.css")}}">



        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="https://api.mapy.cz/loader.js"></script>
        <script type="text/javascript">Loader.load();</script>

        <style>
            #m img {
                max-width: none;
            }

            input[type=file] {
  widh: 100%;
  mx-width: 100%;
  color: #444;
  padding: 5px;
  background: #fff;
  border-radius: 6px;
  bordr: 1px solid blue;
}

input[type=file]::file-selector-button {
  margin-right: 20px;
  border: none;
  background: #084cdf;
  padding: 4px 20px;
  border-radius: 6px;
  color: #fff;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background: #0d45a5;
}



       .architects-daughter-regular {
  font-family: "Architects Daughter", cursive;
  font-weight: 400;
  font-style: normal;
}


        </style>



    </head>
    <body class="font-sans antialiased">
        <div class="flex flex-col h-screen justify-between">

            @include('layouts.navigation')


            <!-- Page Content -->
            <main class="mb-auto">

                {{ $slot }}
            </main>
            <footer class="py-5 border-t-2 border-gray-700 text-center flex items-center justify-center bg-[#fefdf9] ">
                <p class="text-md xs:text-2xl sm:text-3xl text-gray-600 font-black">Dedicated to the memory of Kelvin Kiptum</p>
            </footer>
        </div>

    </body>
</html>
