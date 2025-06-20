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

@push('after_scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush 