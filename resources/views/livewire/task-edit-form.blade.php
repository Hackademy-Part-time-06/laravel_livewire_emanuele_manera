
<form wire:submit.prevent="update">
    @csrf

    @if (session()->has('task'))
        <div class="alert alert-success d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" hight="24" role="img" aria-label="Success:">
                <use xlink:href="#check-circle-fill" />
            </svg>
            <div>
                {{ session('task') }}
            </div>
        </div>
    @endif

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control" id="title" wire:model="title">
        @error('title')
            <span class="error text-danger">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" wire:model.debounce.1000ms="description"></textarea>
        @error('description')
            <span class="error text-danger">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Aggiorna</button>
</form>