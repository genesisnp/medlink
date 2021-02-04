@extends('layouts.master')
@section('title', 'DIARY AND CALENDAR')

@section('content')
    @component('components.header.header')
    @endcomponent

    <section class="section">
        @component('components.diary.diary')
        @endcomponent
    </section>
    <section class="section">
        @component('components.tabs-diary.tabs-diary')
        @endcomponent
    </section>
    

@endsection

@push('scripts')
    
    
@endpush
