@push('styles')
    <link rel="stylesheet" href={{ mix('css/card-digital.css') }}>
@endpush

<div class="card-digital-file">
    <label for="imageUpload" class="card-digital-file__label">{{ $title }}</label>
    <div class="card-digital-file__wrapper">
      <input type="file" name="{{ $name }}" class="card-digital-file__input"/> 
      <div class="card-digital-file__background {{ $name }}"><span>+</span></div>
      <img src="" width="200px" class="card-digital-file__preview-img {{ $name }}"/>
    </div>
</div>


@push('scripts')
    <script src={{ mix('js/card-digital.js') }}></script>
@endpush
