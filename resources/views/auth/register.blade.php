<x-auth-layout title="Register user">

    <div class="container mt-5">
        <h1 class="display-5 text-center">Register</h1>
        <form method="POST" action="{{ route('auth.store') }}" id="user-register-form"
            class="container mt-5 p-4 bg-white rounded shadow-sm" style="max-width: 400px">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label mb-1">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
                <x-error field="name" />
            </div>
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
            <div class="mb-3">
                <label for="role" class="form-label mb-1">Role</label>
                <select name="role" id="role" class="form-select" required>
                    <option value="admin">Admin</option>
                    <option value="reviewer">Reviewer</option>
                    <option value="author">Author</option>
                </select>
                <button type="submit" class="btn btn-primary w-100 mt-4">Register</button>
            </div>
        </form>
    </div>
</x-auth-layout>
