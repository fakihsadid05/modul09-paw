<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar Laravel Routing</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    <div class="container m-5">
        <h1>Belajar Laravel Routing</h1>
        <div class="list-group list-group-numbered mt-4">

            {{-- 5.6 Redirect Route --}}
            <a href="{{ url('/') }}" class="list-group-item list-group-item-action">
                Redirect Route
            </a>

            {{-- 5.3 Basic Routing --}}
            <a href="{{ url('/basic_routing') }}" class="list-group-item list-group-item-action">
                Basic Routing (No View, No Controller)
            </a>

            {{-- 5.4 View Route --}}
            <a href="{{ url('/view_route') }}" class="list-group-item list-group-item-action">
                View Route
            </a>

            {{-- 5.5 Controller Route --}}
            <a href="{{ url('/controller_route') }}" class="list-group-item list-group-item-action">
                Controller Route
            </a>

            {{-- 5.7 Route Parameter (Required Parameter) --}}
            <a href="{{ url('/user/12345') }}" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 1
            </a>
            <a href="{{ url('/posts/01/comments/20') }}" class="list-group-item list-group-item-action">
                Route Parameter (Required Parameter) - 2
            </a>

            {{-- 5.8 Route Parameter (Optional Parameter) --}}
            <a href="{{ url('/username') }}" class="list-group-item list-group-item-action">
                Route Parameter (Optional Parameter)
            </a>

            {{-- 5.9 Route With Regular Expression Constraints --}}
            <a href="{{ url('/title/this-is-my-title') }}" class="list-group-item list-group-item-action">
                Route With Regular Expression Constraints
            </a>

            {{-- 5.10 Named Route --}}
            <a href="{{ route('profileRouteName', ['profileId' => '123']) }}" class="list-group-item list-group-item-action">
                Named Route
            </a>

            {{-- 5.11 Route Priority --}}
            <a href="{{ url('/route_priority/user') }}" class="list-group-item list-group-item-action">
                Route Priority
            </a>

            <a href="{{ url('/web_statis') }}" class="list-group-item list-group-item-action">
            Tugas 2: Web Statis (Beranda)
            </a>

        </div>

        {{-- Khusus kode program untuk Route Groups di sini --}}
        <div class="mt-4">
            <h3>Route Group</h3>
            <div class="list-group">
                <a href="{{ route('route_group.group1') }}" class="list-group-item list-group-item-action">
                    Route Group - Group 1
                </a>
                <a href="{{ route('route_group.group2') }}" class="list-group-item list-group-item-action">
                    Route Group - Group 2
                </a>
            </div>
        </div>

    </div>
    @vite('resources/js/app.js')
</body>
</html>
