<x-layout title="Content List">

    <h2 class="text-2xl font-bold mb-4">Your content</h2>

    @can('create', App\Models\Content::class)
        <a href="{{ route('content.create') }}" class="btn btn-primary mb-4">Create New Content</a>
    @endcan


    <div class="row row-cols-1 row-cols-md-3 g-4">
        @foreach ($contents as $content)
            <div class="col">
                <div class="card h-100">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{ route('content.show', $content) }}">{{ $content->title }}</a>
                            <strong class="ms-2">{{ ucfirst($content->status) }}</strong>
                        </div>

                    </div>
                    <div class="card-body">
                        <p class="card-text">
                            {{ Str::limit($content->body, 100) }}
                        </p>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-between align-items-center">
                            @can('edit', $content)
                                <a href="{{ route('content.edit', $content) }}" class="btn btn-sm btn-secondary">Edit</a>
                            @endcan
                            @can('submit', $content)
                                <form method="POST" action="{{ route('content.submit', $content) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-primary">Submit for Review</button>
                                </form>
                            @endcan

                            @can('review', $content)
                                <form method="POST" action="{{ route('content.review', $content) }}">
                                    @csrf
                                    <button type="submit" name="action" value="approved"
                                        class="btn btn-sm btn-success">Approve</button>
                                    <button type="submit" name="action" value="rejected"
                                        class="btn btn-sm btn-danger">Reject</button>
                                </form>
                            @endcan
                            @can('publish', $content)
                                <form method="POST" action="{{ route('content.publish', $content) }}">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success">Publish</button>
                                </form>
                            @endcan

                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-layout>
