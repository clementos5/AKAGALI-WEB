@extends('layouts.head')

@section('content')
<div class="akagali-main"> 
  <div class="contact-us-left-side">
    <h1 style="color: green;">Iterambere Ni Iryacu Twese</h1>
    <hr class="dotted">
    <p>
      Twiyubakire igihugu duhuriza hamwe ibitekerezo byubaka, tugira uruhare mu bidukorerwa.
    </p>
    <p style="color: #ff04ac;">
      Tanga igitekerezo cyawe ufatanye n'abandi kubaka igihugu.
    </p>
    @if(session('message'))
      <div class="alert alert-success">{{ session('message') }}</div>
    @endif

    <form action="/suggestions/store" method="post">
      {{ csrf_field() }}
      <input type="hidden" name="cell_id" value="{{$cell_id}}" />
      <label>Name</label> 
      <input type="text" name="name">
      <label>Email Address</label>
      <input type="text" name="email">
      <label>Contact Number</label>
      <input type="text" name="phone" />
      <label>Message</label>
      <textarea name="message"></textarea>
      <input type="submit" value="Send Message" class="btn1">
    </form>
  </div>

</div>
@endsection