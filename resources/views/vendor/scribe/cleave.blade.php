<div class="c-form-group  {{ $required ? ' c-form-group--required': null }} {{ $errors->has($name) ? 'c-form-group--error' : null }}">
  <label for="{{$name}}" class="c-label">{{ $label }}</label>
  @php
    $o = [
      'class' => 'c-input u-border-radius',
      'id' => ($name . '_placeholder'),
      'data-vv-as' => strtolower($label),
      'placeholder' => '&mdash;'
    ];

    $o['v-cleave'] = json_encode($options);

    if (isset($rules)) {
      $o['v-validate'] = sprintf('\'%s\'', implode('|', $rules));
    }

    // dd($value);
  @endphp

  {{ Form::text($name . '_placeholder', old($name), $o) }}
  {{ Form::hidden($name) }}

  {{-- <span class="c-help-text" v-if="fields['{{ $name }}'] && !fields['{{ $name }}'].dirty">{{ $errors->first($name) }}</span> --}}
  @if($errors->has($name))
  <span class="c-help-text">{{ $errors->first($name) }}</span>
  @endif
  {{-- <span class="c-help-text" v-html="errors.first('{{ $name }}')"></span> --}}
</div>
