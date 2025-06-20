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
