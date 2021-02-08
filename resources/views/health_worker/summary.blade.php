@extends('layouts.master')
@section('title', 'SUMMARY')

@section('content')
    @component('components.header.header')
    @endcomponent

        @component('components.next-appointment.next-appointment')
        @endcomponent

        @component('components.views.views')
        @endcomponent

        @component('components.last-patients.last-patients')
        @endcomponent

        @component('components.table-diary.table-diary')
        @endcomponent

        @component('components.modal.modal')
        @endcomponent


@endsection

@push('scripts')

    
@endpush
