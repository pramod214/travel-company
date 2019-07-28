

{{--@component('mail::message')--}}
Hello!! {{$book->name}}<br>
Are you ready to visit {{$package->title}}??<br>
Congratulation!! your packge has been accepted.....<br>
<h4>Your Details</h4>
<p>Name:-{{$book->name}}</p>
<p>Phone:- {{$book->mobile}}</p>
<p>No of Visitors:-{{$book->noofvisitors}}</p>
<hr>
<h4>Package Details</h4>
<p>Package Title:-{{$package->title}}</p>
<p>Destination:-{{$package->destination}}</p>
<p>Duration:-{{$package->duration}}</p>
<p>Itineraries:-</p>
{!!$package->itineraries!!}
<p>Thank you,</p>
<p>Visit us on www.allflags.com</p>



{{--@endcomponent--}}
