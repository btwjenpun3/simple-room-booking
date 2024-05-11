<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>RoomBook</title>
    <!-- CSS files -->
    <link href="/css/tabler.min.css?1684106062" rel="stylesheet" />
    <link href="/css/toastify.css" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>

    @yield('css')
    @livewireStyles
</head>

<body>
    <div class="page">

        <!-- Sidebar -->
        @include('partials.sidebar')

        <div class="page-wrapper">

            <!-- Page header -->
            @yield('header')

            <!-- Page body -->
            <div class="page-body">
                @yield('content')
            </div>

            <!-- Footer -->
            @include('partials.footer')
        </div>
    </div>


    <!-- Tabler Core -->
    @livewireScripts
    <script src="/js/tabler.min.js?1684106062" defer></script>
    <script src="/js/toastify.js" defer></script>


</body>

</html>
