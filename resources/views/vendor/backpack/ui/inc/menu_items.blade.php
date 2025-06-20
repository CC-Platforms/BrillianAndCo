{{-- This file is used for menu items by any Backpack v6 theme --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-dashboard nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<x-backpack::menu-item title="Services" icon="la la-concierge-bell" :link="backpack_url('service')" />
{{-- <x-backpack::menu-item title="Specialities" icon="la la-star" :link="backpack_url('speciality')" /> --}}
<x-backpack::menu-item title="Properties" icon="la la-building" :link="backpack_url('property')" />
<x-backpack::menu-item title="Lands" icon="la la-map" :link="backpack_url('land')" />
<x-backpack::menu-item title="Team Members" icon="la la-users" :link="backpack_url('team-member')" />
<x-backpack::menu-item title="Facilities" icon="la la-tools" :link="backpack_url('facility')" />