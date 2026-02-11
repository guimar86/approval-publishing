@props([
    'title' => 'Content approval',
])

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="app-navbar">
        <div class="container d-flex align-items-center justify-content-between" style="height:70px;">
            <span class="app-logo text-primary fw-bold">Approval Publishing</span>
            <div class="d-flex gap-3">
                @auth
                    <p>{{ auth()->user()->name }}
                    <form method="POST" action="{{ route('auth.logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-outline-brand">Logout</button>
                    </form>
                    </p>
                @endauth
            </div>
        </div>
    </nav>
    <div class="container py-5">
        {{ $slot }}
    </div>
</body>

</html>
