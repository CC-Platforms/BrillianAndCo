@extends('layout.main')

@section('content')
<main>

    {{-- SUCCESS MESSAGE --}}
    <div 
        x-data="{ show: {{ session('success') ? 'true' : 'false' }} }" 
        x-init="setTimeout(() => show = false, 4000)" 
        x-show="show"
        x-transition
        class="container my-4"
    >
        <div class="alert alert-success alert-dismissible fade show rounded shadow-sm p-3" role="alert">
            {{ session('success') }}
        </div>
    </div>

    {{-- ERROR MESSAGES --}}
    @if ($errors->any())
    <div class="container my-4">
        <div class="alert alert-danger rounded shadow-sm p-3">
            <strong>There were some issues with your submission:</strong>
            <ul class="mb-0 mt-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif

    <!-- BREADCRUMB SECTION -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Sell</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ route('home.index') }}">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">Seller Form</span>
            </div>
        </div>
    </div>

    <!-- SELLER FORM -->
    <div class="ul-form-section">
        <div class="ul-form-container">
            <form action="{{ route('seller.send') }}" method="POST" class="row g-4">
                @csrf

                <div class="ul-form-group">
                    <label for="full_name" class="form-label fw-semibold">Full Name <span>*</span></label>
                    <input type="text" class="form-control rounded-3 @error('full_name') is-invalid @enderror" name="full_name" id="full_name" value="{{ old('full_name') }}" placeholder="Input Full Name" required>
                    @error('full_name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="ul-form-group">
                    <label for="email" class="form-label fw-semibold">Email <span>*</span></label>
                    <input type="email" class="form-control rounded-3 @error('email') is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Input Email Address" required>
                    @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="ul-form-group">
                    <label for="gender" class="form-label fw-semibold">Gender <span>*</span></label>
                    <select name="gender" id="gender" class="form-select rounded-3 @error('gender') is-invalid @enderror" required>
                        <option value="" disabled {{ old('gender') ? '' : 'selected' }}>Select Gender</option>
                        <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                        <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                        <option value="other" {{ old('gender') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('gender') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="ul-form-group">
                    <label for="phone" class="form-label fw-semibold">Phone Number <span>*</span></label>
                    <input type="tel" class="form-control rounded-3 @error('phone') is-invalid @enderror" name="phone" id="phone" value="{{ old('phone') }}" placeholder="Enter Phone Number" required>
                    @error('phone') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="ul-form-group">
                    <label for="item" class="form-label fw-semibold">What do you want to sell? <span>*</span></label>
                    <select name="item" id="item" class="form-select rounded-3 @error('item') is-invalid @enderror" required>
                        <option value="" disabled {{ old('item') ? '' : 'selected' }}>Select an Option</option>
                        <option value="land" {{ old('item') == 'land' ? 'selected' : '' }}>Land</option>
                        <option value="building" {{ old('item') == 'building' ? 'selected' : '' }}>Building</option>
                        <option value="other" {{ old('item') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('item') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="ul-form-group">
                    <label for="documents" class="form-label fw-semibold">Available Documents <span>*</span></label>
                    <select name="documents" id="documents" class="form-select rounded-3 @error('documents') is-invalid @enderror" required>
                        <option value="" disabled {{ old('documents') ? '' : 'selected' }}>Document Type</option>
                        <option value="title_deed" {{ old('documents') == 'title_deed' ? 'selected' : '' }}>Title Deed</option>
                        <option value="land_certificate" {{ old('documents') == 'land_certificate' ? 'selected' : '' }}>Land Certificate</option>
                        <option value="survey_plan" {{ old('documents') == 'survey_plan' ? 'selected' : '' }}>Survey Plan</option>
                        <option value="other" {{ old('documents') == 'other' ? 'selected' : '' }}>Other</option>
                    </select>
                    @error('documents') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-12">
                    <label for="description" class="form-label fw-semibold">Description <span>*</span></label>
                    <textarea name="description" id="description" class="form-control rounded-3 @error('description') is-invalid @enderror" rows="3" placeholder="Describe the property..." required>{{ old('description') }}</textarea>
                    @error('description') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="ul-form-group">
                    <label for="condition" class="form-label fw-semibold">Condition <span>*</span></label>
                    <input type="text" class="form-control rounded-3 @error('condition') is-invalid @enderror" name="condition" id="condition" value="{{ old('condition') }}" placeholder="Enter Property Condition" required>
                    @error('condition') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="ul-form-group">
                    <label for="price" class="form-label fw-semibold">Asking Price <span>*</span></label>
                    <input type="text" class="form-control rounded-3 @error('price') is-invalid @enderror" name="price" id="price" value="{{ old('price') }}" placeholder="Enter amount" required>
                    @error('price') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="ul-form-group">
                    <button type="submit" class="ul-btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</main>
@endsection
