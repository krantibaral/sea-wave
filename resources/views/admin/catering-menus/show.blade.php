@extends('admin.templates.show')

@push('styles')
@endpush

@section('form_content')
    <div class="row my-4">
        <div class="col-md-7">
            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Name:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->menu_name }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Category:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->category->category_name ?? 'N/A' }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Price:</span> </label><br>
                </div>
                <div class="col-md-8">
                    ${{ number_format($item->price, 2) }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Description:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->description ?? 'No description available' }}
                </div>
            </div>
        </div>
    </div>
@endsection
