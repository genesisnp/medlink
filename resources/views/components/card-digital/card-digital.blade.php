@push('styles')
    <link rel="stylesheet" href={{ mix('css/card-digital.css') }}>
@endpush

<div class="card-digital-file">
    <div class="card-digital-file__label">{{ $title }}</div>
    <div class="card-digital-file__wrapper">
      <input type="file" name="{{ $name }}" class="card-digital-file__input" aria-label="seleccionar imagen"/> 
      <div class="card-digital-file__background {{ $name }}"><span>+</span></div>
      <img src="" width="200px" class="card-digital-file__preview-img {{ $name }}" alt="Image card digital"/>
    </div>
</div>


@push('scripts')
    <script src={{ mix('js/card-digital.js') }}></script>
@endpush
