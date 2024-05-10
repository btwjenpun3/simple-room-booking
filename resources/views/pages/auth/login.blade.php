<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        Sign in with illustration - Tabler - Premium and Open Source dashboard template with responsive and high
        quality UI.
    </title>

    <!-- CSS files -->
    <link href="/css/tabler.min.css?1684106062" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/css/toastify.css">
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
    @livewireStyles
</head>

<body class=" d-flex flex-column">

    <div class="page page-center">
        <div class="container container-normal py-6">
            <div class="row align-items-center g-4">
                @livewire('auth.login')
            </div>
        </div>
    </div>

    <!-- Libs JS -->
    @livewireScripts
    <!-- Tabler Core -->
    <script type="text/javascript" src="/js/toastify.js"></script>
    <script src="/js/tabler.min.js?1684106062" defer></script>
</body>

</html>
