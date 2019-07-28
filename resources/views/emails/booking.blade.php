{{--@component('mail::message')--}}
Dear {{ $booking_mails['0']['name'] }},
<p>Thank you for your submitted details. Here’s a summary of your request, which has been processed.
    We’ll notify you when your booking is ready.</P>
<h5> Name::{{ $booking_mails['0']['name'] }}</h5>
<h4> Mobile::{{ $booking_mails['0']['mobile'] }}</h4>
<h4> Email::{{ $booking_mails['0']['email'] }}</h4>
<h4> Date::{{ $booking_mails['0']['date'] }}</h4>
<h4> Family::{{ $booking_mails['0']['noofvisitors'] }}</h4>
<h4> Children::{{ $booking_mails['0']['noofchildren'] }}</h4>
<h4>Package Details</h4>
<h4>Title:{{ $booking_mails['package']->title }}</h4>
<p>Itineraries:{!!  $booking_mails['package']->itineraries !!} </p>
Thank you,
Visit us on www.allflags.com
{{--  @endcomponent--}}



