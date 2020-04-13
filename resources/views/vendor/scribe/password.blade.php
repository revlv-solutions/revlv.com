<div class="c-form-group {{ $required ? 'c-form-group--required': null }} {{ $errors->has($name) ? 'form-group--error' : null }}">
  @php
   $options = [
      'class' => 'c-input u-border-radius',
      'id' => $name,
      'data-vv-as' => strtolower($label),
      'placeholder' => '&mdash;'
    ];

    if (isset($rules)) {
      $options['v-validate'] = sprintf('\'%s\'', implode('|', $rules));
    }
  @endphp
  <label for="{{$name}}" class="c-label">{{ $label }}</label>
  {{ Form::password($name, $options)}}

  {{-- {{ Form::password($name, null, $options)}} --}}

  {{-- <span class="help-text" v-if="fields['{{ $name }}'] && !fields['{{ $name }}'].dirty">{{ $errors->first($name) }}</span>
  <span class="help-text" v-html="errors.first('{{ $name }}')"></span> --}}
  @if($errors->has($name))
    <span class="c-help-text">{{ $errors->first($name) }}</span>
  @endif
</div>
