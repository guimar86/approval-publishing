<x-layout title="view content">
    <h2 class="text-2xl font-bold mb-4">{{ $content->title }}</h2>

    <div class="mb-4">
        <strong>Status:</strong> {{ ucfirst($content->status) }}
    </div>

    <div class="mb-4 lh-lg">
        <p>{{ $content->body }}</p>
    </div>

    <a href="{{ route('content.index') }}" class="btn btn-secondary">Back to Content List</a>
</x-layout>
