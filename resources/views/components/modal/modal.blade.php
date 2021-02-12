@push('styles')
    <link rel="stylesheet" href={{ mix('css/modal.css') }}>
@endpush
<div class="modal {{ $dataLink }}">
    <div class="modal__container">
        <div class="modal__body">
            {{ $modal_body }}
            <div class="modal-close">
                <button class="modal-close__btn"><span>X</span></button>
            </div>
        </div>
        
    </div>
</div>
@push('scripts')
    <script src={{ mix('js/modal.js') }}></script>
@endpush