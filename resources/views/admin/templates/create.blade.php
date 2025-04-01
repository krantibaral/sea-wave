@extends('admin.layouts.main')

@push('css')
    <title>Add {{ $title }}</title>
@endpush

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col">
                    <!-- general form elements -->
                    <br>
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <h3 class="card-title">{{ $title }}</h3>

                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form repeater" id="form" action="{{ route($route . 'store') }}" method="post"
                            enctype="multipart/form-data">
                            <div class="card-body">
                                @csrf
                                @if ($errors->any())
                                    @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger" role="alert">
                                            {{ $error }}
                                        </div>
                                    @endforeach
                                @endif
                                @yield('form_content')
                            </div>
                            <div class="card-footer pt-3 pb-3 d-flex justify-content-end">
                                <a href="javascript:history.back();" class="btn btn-default float-right">Cancel</a>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('js')
    <script>
        jQuery(document).ready(function() {
            // Your existing JavaScript code...
        });
    </script>

    @stack('scripts')
@endsection
