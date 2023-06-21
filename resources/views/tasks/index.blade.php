<x-main>
    <div>
        <livewire:task-index-list />
    </div>

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
    
</x-main>
