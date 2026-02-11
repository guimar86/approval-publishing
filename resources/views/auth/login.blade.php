<x-auth-layout title="Log in">

    <div class="container mt-5">
        <div class="hero-section">
            <h1 class="text-center mb-3">Log in</h1>
        </div>

        <form method="POST" action="{{ route('auth.login') }}" id="user-login-form"
            class="container mt-5 p-4 bg-white rounded shadow-sm" style="max-width: 400px">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label mb-1">Email</label>
                <input type="email" name="email" id="email" class="form-control" required>
                <x-error field="email" />
            </div>
            <div class="mb-3">
                <label for="password" class="form-label mb-1">Password</label>
                <input type="password" name="password" id="password" class="form-control" required>
                <x-error field="password" />
            </div>
            <button type="submit" class="btn btn-primary w-100 mt-4">Log in</button>
            <a href="{{ route('auth.create') }}" class="btn btn-secondary w-100 mt-2">Register</a>
        </form>
    </div>
</x-auth-layout>
