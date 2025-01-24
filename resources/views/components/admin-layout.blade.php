<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    
    <!-- Link to the compiled CSS file -->
    @vite(['public/assets/sass/app.scss',
           'public/assets/css/app.css', 
           'public/assets/css/bootstrap-icons.css', 
           'public/assets/css/admin/sidebar.css', 
           'public/assets/css/admin/header.css',
           'public/assets/css/admin/dashboard/main.css', 
           'public/assets/css/admin/dashboard/table.css', 
           'public/assets/js/admin/layout/realtime_update.js',
           'public/assets/js/app.js', 
           'public/assets/js/toggler.js',

           //Dashboard
           'public/assets/css/admin/dashboard/reports.css',

           ])

</head>
<body style="height: 100vh; min-height: 100vh; max-height: 100vh;">
    <div class="d-flex" style="height: 100vh; width: 100vw">
       <!-- Sidebar -->
       @includeIf('components.admin.layout.sidebar')
        
        <!-- Main Component -->
        <div class="main w-100" style="height: 100vh;">
            <nav class="navbar navbar-expand w-100 pe-4" style="border-bottom:none; ">
                {{-- Admin Header --}}
               @includeIf('components.admin.layout.header')
            </nav>

            <main class="p-md-3 p-1">
                {{$slot}}

                <footer class="ps-3 pe-2 position-absolute bottom-0 w-100">
                    <a href="#" class="text-decoration-none" style="cursor: pointer;">
                      <p style="color: gray; font-size: .9rem;">ALL &copy; RESERVED 2024 | J3CS DEVS | DREAM LIBRARY</p>
                    </a>
                  </footer>
            </main>
        </div>
    </div>
</body>
</html>

