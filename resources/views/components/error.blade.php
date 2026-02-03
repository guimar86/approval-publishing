@props([
    'field' => 'required',
])
@error($field)
    <div class="alert alert-danger alert-dismissible fade show d-flex align-items-center" role="alert">
        <strong>{{ $message }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@enderror
