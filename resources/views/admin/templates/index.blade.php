@extends('admin.layouts.main')

@push('css')
    <title>{{ $title }}</title>
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12"> <!-- Full width column -->
                    <br>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">{{ $title . ' Details' }}</h3>
                            <div class="btn-group">


                                <a href="{{ route($route . 'create') }}" class="btn btn-primary d-flex align-items-center">
                                    <i class="fa fa-plus me-2"></i>
                                    <span class="kt-hidden-mobile">Add new</span>
                                </a>

                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="p-3">
                            @yield('index_content')
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
@endsection

@push('js')
    <script></script>
@endpush
