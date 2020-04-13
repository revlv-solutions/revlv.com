<div class="c-form-group {{ $required ? 'form-group--required': null }} {{ $errors->has($name) ? 'form-group--error' : null }}">
  @php
   $options = [
      'class' => 'c-input u-border-radius ',
      'id' => $name,
      'data-vv-as' => strtolower($label),
      'placeholder' => '&mdash;'
    ];

    if (isset($rules)) {
      $options['v-validate'] = sprintf('\'%s\'', implode('|', $rules));
    }
  @endphp
  <label for="{{$name}}" class="label">{{ $label }}</label>
  {{ Form::number($name, null, $options)}}

  @if($errors->has($name))
  <span class="c-help-text">{{ $errors->first($name) }}</span>
  @endif
</div>
