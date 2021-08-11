<html>
    <head>
        <title>{{ $title ?? 'Chat Message Peepi' }}</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <div class="container-fluid">
            {{ $slot }}
        </div>
        <script src="/js/app.js"></script>
    </body>
</html>