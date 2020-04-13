<div class="form-group {{ $errors->has($name) ? 'form-group--error' : null }}">
  @php
   $options = [
      'class' => 'c-checkbox__input',
      'id' => $name,
      'data-vv-as' => strtolower($label)
    ];

    if (isset($rules)) {
      $options['v-validate'] = sprintf('\'%s\'', implode('|', $rules));
    }
  @endphp
  <div class="c-checkbox u-border-radius">
    {{ Form::hidden($name, 'false') }}
    {{ Form::checkbox($name, 'true', null, $options)}}
    <label for="{{$name}}" class="c-checkbox__label">{{ $label }}</label>
  </div>

  {{-- <span class="help-text" v-if="fields['{{ $name }}'] && !fields['{{ $name }}'].dirty">{{ $errors->first($name) }}</span> --}}
  {{-- <span class="help-text" v-html="errors.first('{{ $name }}')"></span> --}}
</div>
