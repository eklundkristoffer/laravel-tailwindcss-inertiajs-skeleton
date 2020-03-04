<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
        <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    </head>
    <body>
        @inertia

        @routes
        <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>
