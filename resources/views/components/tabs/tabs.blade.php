@push('styles')
    <link rel="stylesheet" href={{ mix('css/tabs.css') }}>
@endpush

<div class="tabs">
    <div class="tabs-header">
        <span class="tabs-header-link current" data-tab={{ $data_tab }}>{{ $tab_text }}</span>
        <span class="tabs-header-link" data-tab={{ $data_tab2 }}>{{ $tab_text2 }}</span>
    </div>
    
    <div class="tabs-content">
        <div class="tabs-content__container">
            {{ $tabs_body }}
        </div>
    </div>
</div>

@push('scripts')
    <script src={{ mix('js/tabs.js') }}></script>
    <script src={{ mix('js/carousel.js') }}></script>
@endpush
