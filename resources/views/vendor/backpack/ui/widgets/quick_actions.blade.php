<!-- Quick Actions Widget Debug: This should be visible -->
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
