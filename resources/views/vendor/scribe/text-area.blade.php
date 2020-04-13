<div class="form-group {{ $required ? ' form-group--required': null }} {{ $errors->has($name) ? 'form-group--error' : null }}">
  <label for="{{$name}}" class="label">{{ $label }}</label>
  @php
   $options = [
      'class' => 'input u-border-radius u-text-upper',
      'id' => $name,
      'data-vv-as' => strtolower($label),
      'placeholder' => '&mdash;'
    ];

    if (isset($rules)) {
      $options['v-validate'] = sprintf('\'%s\'', implode('|', $rules));
    }
  @endphp

  {{ Form::textarea($name, null, $options)}}

  {{-- <span class="help-text" v-if="fields['{{ $name }}'] && !fields['{{ $name }}'].dirty">{{ $errors->first($name) }}</span> --}}
  @if($errors->has($name))
  <span class="help-text">{{ $errors->first($name) }}</span>
  @endif
  {{-- <span class="help-text" v-html="errors.first('{{ $name }}')"></span> --}}
</div>
