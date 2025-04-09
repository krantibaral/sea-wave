@extends('admin.templates.index')

@section('index_content')
    <section id="menus">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 stretch-card">
                    <div class="table_wrap">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="w-15">ID</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Food Image</th>
                                    <th>Banner Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>${{ number_format($item->price, 2) }}</td>
                                        <td>{{ $item->category->category_name ?? 'N/A' }}</td>
                                        <td>
                                            @if($item->getFirstMediaUrl('food_images'))
                                                <img src="{{ $item->getFirstMediaUrl('food_images') }}" alt="Food Image" width="50">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @if($item->getFirstMediaUrl('banner_images'))
                                                <img src="{{ $item->getFirstMediaUrl('banner_images') }}" alt="Banner Image" width="50">
                                            @else
                                                N/A
                                            @endif
                                        </td>
                                        <td>
                                            @include('admin.templates.index_actions', ['item' => $item])
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                        <!-- Custom Pagination -->
                        <div class="mt-3 d-flex justify-content-center gap-2">
                            @if ($items->onFirstPage())
                                <button class="btn btn-secondary" disabled>
                                    <i class="fa fa-arrow-left me-1"></i> Previous
                                </button>
                            @else
                                <a href="{{ $items->previousPageUrl() }}" class="btn btn-primary">
                                    <i class="fa fa-arrow-left me-1"></i> Previous
                                </a>
                            @endif

                            @if ($items->hasMorePages())
                                <a href="{{ $items->nextPageUrl() }}" class="btn btn-primary">
                                    Next <i class="fa fa-arrow-right ms-1"></i>
                                </a>
                            @else
                                <button class="btn btn-secondary" disabled>
                                    Next <i class="fa fa-arrow-right ms-1"></i>
                                </button>
                            @endif
                        </div>
                        <!-- End Pagination -->

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
