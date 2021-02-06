@extends('layouts.master')
@section('title', 'INDICATOR')

@section('content')
    @component('components.header.header')
    @endcomponent

    @component('components.patients-attended.patients-attended')
    @endcomponent

    @component('components.views.views')
    @endcomponent

    @component('components.progress.progress')
    @endcomponent

@endsection

@push('scripts')
    
    
@endpush
