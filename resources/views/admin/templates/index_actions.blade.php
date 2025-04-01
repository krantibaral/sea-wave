<style>
    .btn-sm {
        padding: 8px 12px;
        font-size: 14px;
        border-radius: 6px;
        transition: all 0.3s ease;
    }

    .btn-sm.view {
        background-color: #17a2b8;
        color: #fff;
        border: none;
    }

    .btn-sm.view:hover {
        background-color: #138496;
    }

    .btn-sm.edit {
        background-color: #ffc107;
        color: #fff;
        border: none;
    }

    .btn-sm.edit:hover {
        background-color: #e0a800;
    }

    .btn-sm.delete {
        background-color: #dc3545;
        color: #fff;
        border: none;
    }

    .btn-sm.delete:hover {
        background-color: #c82333;
    }

    .btn-sm i {
        margin-right: 5px;
    }
</style>

<div class="row">
    <div class="col">
        <div class="d-flex align-items-center">
            @if (!isset($hide_show))
                <a href="{{ route($route . 'show', $id ?? $item->id) }}" class="btn btn-sm view me-2">
                    <i class="fa fa-eye"></i> View
                </a>
            @endif

            <!-- Edit Button -->
            @if (!isset($hide_edit))
                <a href="{{ route($route . 'edit', $id ?? $item->id) }}" class="btn btn-sm edit me-2">
                    <i class="fa fa-edit"></i> Edit
                </a>
            @endif

            <!-- Delete Form -->
            @if (!isset($hide_delete))
                <form class="ml-2" action="{{ route($route . 'destroy', $id ?? $item->id) }}" method="POST"
                    onclick="return confirm('Are you sure?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm delete">
                        <i class="fa fa-trash"></i> Delete
                    </button>
                </form>
            @endif

            <!-- Additional Actions -->
            @foreach ($actions ?? [] as $action)
                {!! $action !!}
            @endforeach
        </div>
    </div>
</div>
