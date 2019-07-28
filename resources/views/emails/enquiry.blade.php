{{--@component('mail::message')--}}
Dear {{ $enquiry['0']['name'] }},
<p>Thank you for sending your message..
    We’ll reply to your message soon.</P>
   <h4> Name::{{ $enquiry['0']['name'] }}</h4>
<h4> Email::{{ $enquiry['0']['email'] }}</h4>
<h4> Message::{{ $enquiry['0']['message'] }}</h4>
Thank you,
Visit us on www.allflags.com
{{--  @endcomponent--}}