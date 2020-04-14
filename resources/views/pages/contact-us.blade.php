@extends('layouts.main')

@push('scripts')
<script src="https://www.google.com/recaptcha/api.js?render=GOOGLE_SITE_KEY"></script>
<script>
grecaptcha.ready(function() {
  grecaptcha.execute('GOOGLE_SITE_KEY', { action: 'contact_us' }).then(function(token) {
    if (token) {
      document.getElementById('recaptcha').value = token
    }
  })
})
</script>
@endpush

@section('content')
<div class="content">
  <div class="content__wrapper">
    <div class="content__block">
      <div class="content__block__left">
        <div class="content__block__left__box">
          <h1>Contact Details</h1>
        </div>
      </div>
      <div class="content__block__right">
        <div class="content__panel">
          <div class="contacts__details">
            <h3>Makati Head Office</h3>
            <p>Unit 26N Burgundy Corporate Tower, 252 Sen. Gil Puyat Avenue, Makati City</p>
            <p>Mobile: +63 917-731-8821</p>
            <p>Phone: +632 8831-3568</p>
            <p>Email: info@revlv.com / sales@revlv.com</p>
          </div>
        </div>
        <div class="content__panel">
          <div class="contacts__details">
            <h3>Las Piñas Office</h3>
            <p>#19 Primrose Street, Talon Quatro Village, Las Piñas City</p>
            <p>Mobile: +63 917-731-8821</p>
            <p>Phone: +632 8831-3568</p>
          </div>
        </div>
      </div>
    </div>
    <div class="content__block">
      <div class="content__block__left">
        <div class="content__block__left__box">
          <h1>Inquiry Form</h1>
        </div>
      </div>
      <div class="content__block__right">
        <div class="content__panel">
          {{ Form::open(['route' => 'contact.submit', 'id' => 'inquiry-form']) }}
            @if($errors->count() && !$errors->has('captcha'))
            <div class="alert alert--error">
              <p>{{ trans('responses.inquiry_validation_error') }}</p>
            </div>
            @endif

            @if ($errors->has('captcha'))
            <div class="alert alert--error">
              <p>{{ $errors->first('captcha') }}</p>
            </div>
            @endif

            @if(session()->has('notification'))
            <div class="alert"><p>{{ session()->get('notification') }}</p></div>
            @endif
            <input type="hidden" name="recaptcha" id="recaptcha">
            {{ Scribe::txt('name', 'Full Name', true) }}
            {{ Scribe::txt('company', 'Company', true) }}
            {{ Scribe::txt('email', 'Email', true) }}
            {{ Scribe::txt('contact_number', 'Contact No.', true) }}
            {{ Scribe::sel('inquiry', 'Inquiry', 'InquiryTypes', 'Select Inquiry', true) }}
            {{ Scribe::txtarea('message', 'Message', true) }}

            <div class="form-group form-group--recaptcha">
              <p>This site is protected by reCAPTCHA and the Google
              <a target="_blank" href="https://policies.google.com/privacy">Privacy Policy</a> and
              <a target="_blank" href="https://policies.google.com/terms">Terms of Service</a> apply.</p>
            </div>

            <div class="form-group">
              <button
                id="submit-inquiry"
                type="submit"
                class="button">Submit Inquiry</button>
            </div>
          {{ Form::close() }}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

