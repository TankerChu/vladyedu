@component('mail::message')
	
#Khách hàng mới liên hệ thông qua form liên hệ!!!

<strong>Tên: </strong> {{ $data['name'] }} <br>
<strong>Email: </strong> {{ $data['email'] }} <br>
<strong>Số Điện Thoại: </strong> {{ $data['phone'] }} <br>
<strong>Tin Nhắn: </strong> <br>

{{ $data['message'] }} 


@endcomponent
