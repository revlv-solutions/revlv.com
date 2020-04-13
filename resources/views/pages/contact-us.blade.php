@extends('layouts.main')

@section('content')


<div class="content">
  <div class="content__wrapper">
    <div class="content__block">
      <div class="content__block__left">
        <div class="content__block__left__box">
          <h1>Contact Details</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, voluptate</p>
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
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, voluptate</p>
        </div>
      </div>
      <div class="content__block__right">
        <div class="content__panel">
          <form action="" class="form">
            <!-- <div class="alert">
              <p>Dicta minima, quos, consequatur eligendi accusantium</p>
              </div> -->
            <div class="form-group">
              <label for="" class="label">Full Name</label>
              <input type="text" class="input" placeholder="John Doe">
            </div>
            <div class="form-group">
              <label for="" class="label">Company</label>
              <input type="text" class="input" placeholder="Microsoft">
            </div>
            <div class="form-group">
              <label for="" class="label">Email</label>
              <input type="text" class="input" placeholder="johndoe@email.com">
            </div>
            <div class="form-group">
              <label for="" class="label">Contact No.</label>
              <input type="text" class="input" placeholder="0915-XXXX-XXX">
            </div>
            <div class="form-group">
              <label for="" class="label">Inquiry</label>
              <div class="select">
                <select name="" id="">
                  <option>Request for a quote</option>
                  <option>Product inquiry</option>
                  <option>Solutions and other services</option>
                  <option>Company tie-up or business partnership</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="" class="label">Message</label>
              <textarea name="" id="" cols="30" rows="5" class="textarea"></textarea>
            </div>
            <div class="form-group">
              <button class="button">Submit Inquiry</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
