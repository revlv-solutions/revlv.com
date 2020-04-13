<div class="c-form-group {{ $required ? 'c-form-group--required': null }} {{ $errors->has($name) ? 'c-form-group--error' : null }}">
  @php
   $options = [
      'class' => 'c-input',
      'id' => $name,
      'data-vv-as' => strtolower($label)
    ];

    if (isset($rules)) {
      $options['v-validate'] = sprintf('\'%s\'', implode('|', $rules));
    }
  @endphp
  <label for="{{$name}}" class="c-label">{{ $label }}</label>
  {{ Form::date($name, null, $options)}}
  @if($errors->has($name))
  <span class="c-help-text">{{ $errors->first($name) }}</span>
  @endif
</div>
