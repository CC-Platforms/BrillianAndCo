@extends(backpack_view('blank'))

@php
    use App\Models\Visitor;
    use App\Models\Property;
    use App\Models\Land;
    use App\Models\Service;
    use App\Models\TeamMember;
    
    // Get visitor statistics
    $todayVisitors = Visitor::getTodayUniqueCount();
    $weekVisitors = Visitor::getWeekUniqueCount();
    $monthVisitors = Visitor::getMonthUniqueCount();
    $visitorData = Visitor::getDailyCountsLast7Days();
    
    // Get content counts
    $propertiesCount = Property::active()->count();
    $landsCount = Land::active()->count();
    $servicesCount = Service::active()->count();
    $teamCount = TeamMember::active()->count();
@endphp

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Widget 1: Visitor Analytics -->
        <div class="col-12 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="la la-chart-bar"></i> Visitor Analytics
                    </h5>
                </div>
                <div class="card-body">
                    <!-- Statistics -->
                    <div class="row text-center mb-3">
                        <div class="col-4">
                            <div class="text-primary fs-3 fw-bold">{{ $todayVisitors }}</div>
                            <small class="text-muted">Today</small>
                        </div>
                        <div class="col-4">
                            <div class="text-success fs-3 fw-bold">{{ $weekVisitors }}</div>
                            <small class="text-muted">This Week</small>
                        </div>
                        <div class="col-4">
                            <div class="text-info fs-3 fw-bold">{{ $monthVisitors }}</div>
                            <small class="text-muted">This Month</small>
                        </div>
                    </div>

                    <!-- Simple Chart -->
                    <div class="chart-container" style="height: 120px;">
                        <canvas id="visitorsChart" width="100%" height="60"></canvas>
                    </div>
                    
                    <!-- Chart Labels -->
                    <div class="d-flex justify-content-between mt-2">
                        @foreach($visitorData as $data)
                            <small class="text-muted">{{ $data['date'] }}</small>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <!-- Widget 2: Content Summary -->
        <div class="col-12 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="la la-database"></i> Content Summary
                    </h5>
                </div>
                <div class="card-body">
                    <!-- Content Statistics -->
                    <div class="space-y-3">
                        <!-- Properties -->
                        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                            <div class="d-flex align-items-center">
                                <i class="la la-building text-primary me-2 fs-4"></i>
                                <span>Properties</span>
                            </div>
                            <span class="badge bg-primary fs-6">{{ $propertiesCount }}</span>
                        </div>

                        <!-- Lands -->
                        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                            <div class="d-flex align-items-center">
                                <i class="la la-map text-success me-2 fs-4"></i>
                                <span>Land Parcels</span>
                            </div>
                            <span class="badge bg-success fs-6">{{ $landsCount }}</span>
                        </div>

                        <!-- Services -->
                        <div class="d-flex justify-content-between align-items-center py-2 border-bottom">
                            <div class="d-flex align-items-center">
                                <i class="la la-concierge-bell text-info me-2 fs-4"></i>
                                <span>Services</span>
                            </div>
                            <span class="badge bg-info fs-6">{{ $servicesCount }}</span>
                        </div>

                        <!-- Team Members -->
                        <div class="d-flex justify-content-between align-items-center py-2">
                            <div class="d-flex align-items-center">
                                <i class="la la-users text-warning me-2 fs-4"></i>
                                <span>Team Members</span>
                            </div>
                            <span class="badge bg-warning fs-6">{{ $teamCount }}</span>
                        </div>
                    </div>

                    <!-- Total -->
                    <div class="mt-3 pt-3 border-top">
                        <div class="text-center">
                            <div class="text-muted small">Total Active Content</div>
                            <div class="fs-3 fw-bold text-dark">
                                {{ $propertiesCount + $landsCount + $servicesCount + $teamCount }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Widget 3: Quick Actions -->
        <div class="col-12 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header">
                    <h5 class="card-title mb-0">
                        <i class="la la-plus-circle"></i> Quick Actions
                    </h5>
                </div>
                <div class="card-body">
                    <!-- Quick Action Buttons -->
                    <div class="d-grid gap-2">
                        <!-- Add Property -->
                        <a href="{{ backpack_url('property/create') }}" class="btn btn-primary d-flex align-items-center">
                            <i class="la la-building me-2"></i>
                            Add New Property
                        </a>

                        <!-- Add Land -->
                        <a href="{{ backpack_url('land/create') }}" class="btn btn-success d-flex align-items-center">
                            <i class="la la-map me-2"></i>
                            Add New Land Parcel
                        </a>

                        <!-- Add Team Member -->
                        <a href="{{ backpack_url('team-member/create') }}" class="btn btn-info d-flex align-items-center">
                            <i class="la la-user-plus me-2"></i>
                            Add Team Member
                        </a>

                        <!-- Add Service -->
                        <a href="{{ backpack_url('service/create') }}" class="btn btn-warning d-flex align-items-center">
                            <i class="la la-concierge-bell me-2"></i>
                            Add New Service
                        </a>
                    </div>

                    <!-- Additional Links -->
                    <div class="mt-3 pt-3 border-top">
                        <div class="row">
                            <div class="col-6">
                                <a href="{{ backpack_url('property') }}" class="btn btn-outline-secondary btn-sm w-100">
                                    <i class="la la-list me-1"></i>
                                    All Properties
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ backpack_url('land') }}" class="btn btn-outline-secondary btn-sm w-100">
                                    <i class="la la-list me-1"></i>
                                    All Lands
                                </a>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-6">
                                <a href="{{ backpack_url('team-member') }}" class="btn btn-outline-secondary btn-sm w-100">
                                    <i class="la la-users me-1"></i>
                                    Team
                                </a>
                            </div>
                            <div class="col-6">
                                <a href="{{ url('/') }}" target="_blank" class="btn btn-outline-primary btn-sm w-100">
                                    <i class="la la-external-link me-1"></i>
                                    View Site
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('after_scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('visitorsChart').getContext('2d');
    const data = @json($visitorData);
    
    // Simple line chart with minimal styling
    const chart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: data.map(item => item.date),
            datasets: [{
                label: 'Unique Visitors',
                data: data.map(item => item.count),
                borderColor: '#3b82f6',
                backgroundColor: 'rgba(59, 130, 246, 0.1)',
                borderWidth: 2,
                fill: true,
                tension: 0.4,
                pointRadius: 3,
                pointBackgroundColor: '#3b82f6'
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    display: false
                },
                x: {
                    display: false
                }
            },
            elements: {
                point: {
                    hoverRadius: 5
                }
            }
        }
    });
});
</script>
@endpush
@endsection 