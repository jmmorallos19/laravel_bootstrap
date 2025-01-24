<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Link to the compiled CSS file -->
    @vite(['public/assets/sass/app.scss',
           'public/assets/css/login-media.css', 
           'public/assets/css/bootstrap-icons.css', 
           'public/assets/js/app.js', 
           'public/assets/css/login.css', 
           'public/assets/js/login-toggler.js' ])

</style>
</head>
<body class="p-0 m-0">
    <main class="d-flex justify-content-center align-items-center" style="background-image: url('{{ asset('/assets/images/bg.jpg')}}');">    >
        <div class="overlay z-0 d-flex justify-content-center align-items-center" style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; background-color: rgba(0, 0, 0, 0.7); z-index: 1;">
            {{ $slot }}
        </div>
    </main>

    

</body>
</html>