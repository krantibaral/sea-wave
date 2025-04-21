@extends('admin.layouts.main')

@section('content')
    <div class="container-fluid py-4">
        {{-- Page Header --}}
        <div class="page-header mb-4">
            <div class="d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div class="d-flex align-items-center">
                    <div class="me-3">
                        <i class="fas fa-tachometer-alt fa-2x text-primary"></i>
                    </div>
                    <div>
                        <h1 class="page-title mb-0" style="font-size: 2rem; font-weight: 700;">Dashboard Overview</h1>
                        <p class="text-muted mb-0">Welcome back, Administrator</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Reservations Chart --}}
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-white py-2">
                <h6 class="mb-0">Reservations (Last 7 Days)</h6>
            </div>
            <div class="card-body p-3">
                <canvas id="reservationsChart" height="100"></canvas>
            </div>
        </div>

        {{-- Special Menus Section --}}
        <div class="card mb-4 shadow-sm">
            <div class="card-header bg-white py-3">
                <h5 class="mb-0">Special Menus</h5>
            </div>
            <div class="card-body">
                @if($specialMenus->count() > 0)
                    <div class="row">
                        @foreach ($specialMenus as $menu)
                            <div class="col-md-3 mb-4">
                                <div class="card h-100 border-0 shadow-sm hover-shadow-lg transition">
                                    <img src="{{ $menu->getFirstMediaUrl('food_images') ?: asset('images/default-food.jpg') }}"
                                        alt="{{ $menu->menu_name }}" class="card-img-top" style="height: 180px; object-fit: cover;">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #6c757d; font-weight: 600;">{{ $menu->menu_name }}</h5>
                                        <div class="d-flex justify-content-between align-items-center mt-2">
                                            <span class="badge bg-gradient-success px-3 py-2"
                                                style="font-size: 0.9rem; color: black;">
                                                ${{ number_format($menu->price, 2) }}
                                            </span>

                                            <span class="badge bg-light text-dark">{{ $menu->name ?? 'Uncategorized' }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @else
                    <div class="text-center py-5">
                        <i class="fas fa-utensils fa-3x text-muted mb-3"></i>
                        <h5 class="text-muted">No special menus available today</h5>
                        <a href="{{ route('admin.menus.create') }}" class="btn btn-primary mt-3">Add New Menu</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <style>
        .page-header {
            padding: 1rem;
            background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);
            border-radius: 0.5rem;
            margin-bottom: 2rem;
        }

        .page-title {
            font-weight: 700;
            color: #2c3e50;
        }

        .card {
            border: none;
            border-radius: 0.5rem;
        }

        .hover-shadow-lg:hover {
            transform: translateY(-5px);
            box-shadow: 0 1rem 3rem rgba(0, 0, 0, .1) !important;
        }

        .transition {
            transition: all 0.3s ease;
        }

        .bg-gradient-success {
            background: linear-gradient(to right, #28a745, #85e085);
            color: white;
            border-radius: 1rem;
            box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 600;
        }
    </style>
@endpush

@push('scripts')
    <script>
        const ctx = document.getElementById('reservationsChart').getContext('2d');
        const reservationsChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: {!! json_encode($labels) !!},
                datasets: [{
                    label: 'Number of Reservations',
                    data: {!! json_encode($data) !!},
                    backgroundColor: 'rgba(75, 192, 192, 0.7)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    borderRadius: 5
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        mode: 'index',
                        intersect: false,
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        },
                        title: {
                            display: true,
                            text: 'Number of Reservations'
                        }
                    },
                    x: {
                        title: {
                            display: true,
                            text: 'Date'
                        }
                    }
                }
            }
        });
    </script>
@endpush