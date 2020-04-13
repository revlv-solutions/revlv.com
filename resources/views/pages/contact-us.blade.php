@extends('layouts.main')

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
          {{ Form::open() }}
            <div class="alert">
              <p>Dicta minima, quos, consequatur eligendi accusantium</p>
            </div>
            {{ Scribe::txt('name', 'Full Name', true) }}
            {{ Scribe::txt('company', 'Company', true) }}
            {{ Scribe::txt('email', 'Email', true) }}
            {{ Scribe::txt('contact_number', 'Contact No.', true) }}
            {{ Scribe::sel('inquiry', 'Inquiry', 'InquiryTypes', 'Select Inquiry', true) }}
            {{ Scribe::txtarea('message', 'Message', true) }}

            <div class="form-group">
              <button
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
