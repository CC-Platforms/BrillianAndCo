@extends('layout.main')

@section('content')
<main>
    {{-- Success Message --}}
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

    <!-- BREADCRUMB SECTION -->
    <div class="ul-breadcrumb">
        <div class="wow animate__fadeInUp">
            <h2 class="ul-breadcrumb-title">Buy Land</h2>
            <div class="ul-breadcrumb-nav">
                <a href="{{ route('home.index') }}">Home</a>
                <span class="separator"><i class="flaticon-aro-left"></i></span>
                <span class="current-page">Buyer Form</span>
            </div>
        </div>
    </div>
</main>

{{-- FORM SECTION --}}
<section class="ul-form-section">
    <div class="ul-form-container">

        {{-- Global Error Messages --}}
        @if ($errors->any())
            <div class="alert alert-danger rounded shadow-sm p-3 mb-4">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('buyer.send') }}" method="POST">
            @csrf

            <div class="ul-form-group">
                <label for="full_name">Full Name <span>*</span></label>
                <input type="text" id="full_name" name="full_name" placeholder="Input Full Name" value="{{ old('full_name') }}" required>
                @error('full_name') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <div class="ul-form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Input Email Address" value="{{ old('email') }}">
                @error('email') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <div class="ul-form-group">
                <label for="gender">Gender <span>*</span></label>
                <select name="gender" id="gender" required>
                    <option value="" disabled {{ old('gender') ? '' : 'selected' }}>Select Gender</option>
                    <option value="male" {{ old('gender') == 'male' ? 'selected' : '' }}>Male</option>
                    <option value="female" {{ old('gender') == 'female' ? 'selected' : '' }}>Female</option>
                </select>
                @error('gender') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <div class="ul-form-group">
                <label for="phone">Phone Number <span>*</span></label>
                <input type="tel" id="phone" name="phone" placeholder="Enter Phone Number" value="{{ old('phone') }}" required>
                @error('phone') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <div class="ul-form-group">
                <label for="interest">What do you want to buy? <span>*</span></label>
                <select name="interest" id="interest" required>
                    <option value="" disabled {{ old('interest') ? '' : 'selected' }}>Select from the option</option>
                    <option value="land" {{ old('interest') == 'land' ? 'selected' : '' }}>Land</option>
                    <option value="house" {{ old('interest') == 'house' ? 'selected' : '' }}>House</option>
                </select>
                @error('interest') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <div class="ul-form-group">
                <label for="city">City <span>*</span></label>
                <input type="text" id="city" name="city" placeholder="Enter preferred city" value="{{ old('city') }}" required>
                @error('city') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <div class="ul-form-group">
                <label for="country">Country <span>*</span></label>
                <input type="text" id="country" name="country" placeholder="Enter preferred country" value="{{ old('country') }}" required>
                @error('country') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <div class="ul-form-group">
                <label for="description">Description <span>*</span></label>
                <textarea id="description" name="description" placeholder="Input Description" required>{{ old('description') }}</textarea>
                @error('description') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <div class="ul-form-group">
                <label for="budget">What is Your Budget (XAF) <span>*</span></label>
                <input type="number" id="budget" name="budget" placeholder="Input amount" value="{{ old('budget') }}" required>
                @error('budget') <div class="text-danger small">{{ $message }}</div> @enderror
            </div>

            <div class="ul-form-group">
                <button type="submit" class="ul-btn-primary">Submit</button>
            </div>
        </form>
    </div>
</section>
@endsection
