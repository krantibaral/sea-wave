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
                    {{ $item->name }}
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3">
                    <label for=""><span class="show-text">Category:</span> </label><br>
                </div>
                <div class="col-md-8">
                    {{ $item->category->name ?? 'N/A' }}
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

        <div class="col-md-5 text-center">
            @if($item->getFirstMediaUrl('food_images'))
                <div>
                    <label><span class="show-text">Food Image:</span></label><br>
                    <img src="{{ $item->getFirstMediaUrl('food_images') }}" alt="Food Image" class="img-fluid" style="max-width: 80%;">
                </div>
            @endif

            @if($item->getFirstMediaUrl('banner_images'))
                <div class="mt-3">
                    <label><span class="show-text">Banner Image:</span></label><br>
                    <img src="{{ $item->getFirstMediaUrl('banner_images') }}" alt="Banner Image" class="img-fluid" style="max-width: 80%;">
                </div>
            @endif
        </div>
    </div>
@endsection
