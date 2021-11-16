<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">

        <!-- Scripts -->
        @routes
        <script src="{{ mix('js/app.js') }}" defer></script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-YSNM3NH1JV"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-YSNM3NH1JV');
        </script>

        <!-- Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="/images/icons/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/images/icons/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/images/icons/favicon-16x16.png">
        <link rel="manifest" href="/images/icons/site.webmanifest">
        <link rel="mask-icon" href="/images/icons/safari-pinned-tab.svg" color="#5bbad5">
        <link rel="shortcut icon" href="/images/icons/favicon.ico">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="msapplication-config" content="/images/icons/browserconfig.xml">
        <meta name="theme-color" content="#ffffff">

        <style>
            html {
                scroll-behavior: smooth;
            }
            html {
                scroll-behavior: smooth;
            }

            /* width */
            ::-webkit-scrollbar {
                width: 14px;
            }

            /* Track */
            ::-webkit-scrollbar-track {
                background: #cccccc;
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #52596d;
                border: 2px #fcf9ed solid;
                border-radius: 25px;
            }

            /* Handle on hover */
            ::-webkit-scrollbar-thumb:hover {
                background: linear-gradient(to bottom, #27627e, #3b86a4, #4799aa, #819ca8);
            }
        </style>
    </head>
    <body class="font-sans antialiased">
        @inertia
    </body>
</html>
