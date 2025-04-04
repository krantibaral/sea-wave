@extends('admin.templates.index')

@section('index_content')
    <section id="menu-categories">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 stretch-card">
                    <div class="table_wrap">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th class="w-15">ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($items as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            @include('admin.templates.index_actions', [
                                                'item' => $item,
                                            ])
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
