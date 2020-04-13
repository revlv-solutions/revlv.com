<div class="form-group {{ $required ? 'form-group--required': null }} {{ $errors->has($name) ? 'form-group--error' : null }}">
  @php
   $options = [
      'id' => $name,
      'class' => 'u-border-radius u-text-upper',
      'data-vv-as' => strtolower($label)
    ];

    if (isset($rules)) {
      $options['v-validate'] = sprintf('\'%s\'', implode('|', $rules));
    }
  @endphp
  <label for="{{$name}}" class="label">{{ $label }}</label>
  <div class="select">
    @if($collection instanceof \Illuminate\Support\Collection)
    {{ Form::select($name,
        [null => $placeholder] + $collection->toArray(),
        $value ?? null,
        $options,
        [null => ['disabled' => true]
    ]) }}
    @elseif(is_string($collection))
    {{ Form::select($name,
        [null => $placeholder] + Selection::get($collection)->list(),
        $value ?? null,
        $options,
        [null => ['disabled' => true]
    ]) }}
    @else
    {{ Form::select($name,
        [null => $placeholder] + $collection,
        $value ?? null,
        $options,
        [null => ['disabled' => true]
    ]) }}
    @endif
  </div>

  @if($errors->has($name))
  <span class="help-text" >{{ $errors->first($name) }}</span>
  @endif
  {{-- <span class="help-text" v-if="fields['{{ $name }}'] && !fields['{{ $name }}'].dirty">{{ $errors->first($name) }}</span> --}}
  {{-- <span class="help-text" v-html="errors.first('{{ $name }}')"></span> --}}
</div>
