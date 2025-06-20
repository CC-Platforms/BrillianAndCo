@extends('layout.main')

@section('content')
<div class="ul-inner-page-container">
    <div class="ul-container">
        <div class="ul-breadcrumb">
            <div class="ul-breadcrumb-title">You're Offline</div>
        </div>
        
        <div class="ul-inner-page-content-wrapper">
            <div class="text-center py-5">
                <div class="mb-4">
                    <i class="fas fa-wifi-slash" style="font-size: 4rem; color: var(--ul-primary);"></i>
                </div>
                
                <h1 class="ul-section-title mb-4">You're Currently Offline</h1>
                
                <p class="ul-section-descr mb-4">
                    Don't worry! You can still browse some of our cached properties and content while offline. 
                    Your connection will be restored shortly.
                </p>
                
                <div class="ul-app-ad-btns d-flex justify-content-center gap-3 flex-wrap">
                    <button onclick="window.location.href='/'" class="ul-btn ul-btn-buy">
                        <i class="fas fa-home"></i>
                        Return Home
                    </button>
                    <button onclick="window.location.reload()" class="ul-btn ul-btn-sell">
                        <i class="fas fa-sync-alt"></i>
                        Try Again
                    </button>
                </div>
                
                <div class="mt-5">
                    <h3 class="mb-3">Meanwhile, you can:</h3>
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <ul class="ul-facilities-txt">
                                <li>Browse previously viewed properties</li>
                                <li>Review your saved property favorites</li>
                                <li>Check our contact information</li>
                                <li>Explore our services and team information</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 