@extends('admin.layouts.main')
@push('css')
    <title>{{ $title }} Show</title>
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
                            <h3 class="card-title">{{ 'View ' . $title }}</h3>
                            <div class="d-flex align-items-center">
                                @if ($route != 'contacts.')
                                    <a href="javascript:history.back();" class="btn btn-light float-right me-3">
                                        <i class="fa fa-chevron-left"></i> Back
                                    </a>
                                @endif
                                @php
                                    // Set default value for $canEdit if not passed
                                    $canEdit = $canEdit ?? true;
                                @endphp
                                @if ($canEdit)
                                    <a href="{{ route($route . 'edit', $item->id) }}" class="btn btn-primary">
                                        <i class="fa fa-edit"></i>
                                        <span class="kt-hidden-mobile">Edit</span>
                                    </a>
                                @endif
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            @yield('form_content')
                        </div>
                        <!-- @if ($route != 'contacts.')
    <div class="card-footer mt-2">
                                                <a href="javascript:history.back();" class="btn btn-light float-right">
                                                    <i class="fa fa-chevron-left"></i> Back
                                                </a>
                                            </div>
    @endif -->
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
@endsection

@section('js')
    @stack('scripts')
    <script>
        jQuery(document).ready(function() {
            $('#form input').attr('readonly', true);
            $('#form select').attr('disabled', true);
        });
    </script>
@stop
