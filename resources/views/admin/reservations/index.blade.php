@extends('admin.templates.index')

@section('index_content')
    <section id="reservations">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 stretch-card">
                    <div class="table_wrap">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="w-5">ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Date</th>
                                    <th>Time</th>
                                    <th>Persons</th>
                                    <th>Status</th>
                                    <th class="w-10">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->email }}</td>
                                        <td>{{ $item->phone }}</td>
                                        <td>{{ $item->date }}</td>
                                        <td>{{ \Carbon\Carbon::parse($item->time)->format('h:i A') }}</td>
                                        <td>{{ $item->person }}</td>
                                        <td>
                                            <form action="{{ route('reservation.update', $item->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                                <select name="status" class="form-control form-control-sm"
                                                    onchange="this.form.submit()">
                                                    <option value="pending" {{ $item->status == 'pending' ? 'selected' : '' }}>
                                                        Pending</option>
                                                    <option value="confirmed" {{ $item->status == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
                                                    <option value="cancelled" {{ $item->status == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                                                </select>
                                            </form>
                                        </td>

                                        <td>
                                            @include('admin.templates.index_actions', ['item' => $item])
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection