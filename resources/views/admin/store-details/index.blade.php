@extends('admin.templates.index')

@section('index_content')
<section id="store-details">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="table_wrap">
                    <table class="table table-hover table-bordered">
                        <thead>
                            <tr>
                                <th class="w-10">ID</th>
                                <th>Location</th>
                                <th>Phone Number</th>
                                <th>Catering Image</th>
                                <th class="w-15">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->location ?? '-' }}</td>
                                    <td>{{ $item->phone_number ?? '-' }}</td>
                                    <td>
                                        @if ($item->getFirstMediaUrl('catering_images'))
                                            <img src="{{ $item->getFirstMediaUrl('catering_images') }}" alt="Catering Image" style="height: 50px; width:auto;">
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @include('admin.templates.index_actions', ['item' => $item])
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-3">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
