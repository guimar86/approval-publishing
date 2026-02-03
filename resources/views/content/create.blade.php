<x-layout title="create content">

    <h2 class="text-2xl font-bold mb-4">Create Content Page</h2>

    <div class="mx-auto" style="width:850px">
        <form method="POST" action="{{ route('content.store') }}">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
                <x-error field="title" />
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" id="body" name="body" rows="4" required></textarea>
                <x-error field="body" />
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>


</x-layout>
