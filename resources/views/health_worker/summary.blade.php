@extends('layouts.master')
@section('title', 'SUMMARY')

@section('content')
    @component('components.header.header')
    @endcomponent

    <section class="section">
        @component('components.next-appointment.next-appointment')
        @endcomponent
    </section>
    
    <section class="section section--flex">
        @component('components.views.views')
        @endcomponent
    
        @component('components.last-patients.last-patients')
        @endcomponent
    </section>
    
    <section class="section">
        @component('components.diary.diary')
        @endcomponent
    </section>

    <section class="section">
        @component('components.modal.modal')
        @endcomponent
    </section>

@endsection

@push('scripts')
    
    
@endpush
