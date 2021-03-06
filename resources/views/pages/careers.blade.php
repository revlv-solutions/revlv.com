@extends('layouts.main')
@section('title', ' — Careers')

@section('content')
<div class="content">
  <div class="content__wrapper">
    <div class="careers__blank">
      <div class="careers__blank__wrapper">
        <h3>No vacant positions available</h3>
        <p>We still have full complement of team members, but that could change soon, as pursuit of the future needs a lot of talented, passionate, and focused members. Bank your profiles and resumes with us via <a href="{!! email_obfuscate('recruitment@revlv.com', true) !!}">{!! email_obfuscate('recruitment@revlv.com') !!}</a> and <a href="{!! email_obfuscate('internship@revlv.com', true) !!}">{!! email_obfuscate('internship@revlv.com') !!}</a></p>
      </div>
    </div>
  </div>
</div>
@endsection
