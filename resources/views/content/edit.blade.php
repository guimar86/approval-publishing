<x-layout title="Edit content">
    <h2 class="text-2xl font-bold mb-4">Edit Content Page</h2>

    <div class="mx-auto" style="width:850px">
        <form method="POST" action="{{ route('content.edit', $content) }}">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title"
                    value="{{ old('title', $content->title) }}">
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea class="form-control" id="body" name="body" rows="5">{{ old('body', $content->body) }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update Content</button>
            <a href="{{ route('content.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</x-layout>
