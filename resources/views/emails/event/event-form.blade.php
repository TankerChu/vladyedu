@component('mail::message')
#Khách hàng mới đăng kí tham dự sự kiện!!!

<strong>Tên: </strong> {{ $data['name'] }} <br>
<strong>Email: </strong> {{ $data['email'] }} <br>
<strong>Thành Phố: </strong> {{ $data['city']}} <br>
<strong>Số Điện Thoại: </strong> {{ $data['phone'] }} <br>
<strong>Sự Kiện: </strong> {{ $data['event'] }} <br>
<strong>Số Lượng Vé: </strong> {{ $data['quantity'] }} <br>
<strong>Tin Nhắn: </strong> <br>

{{ $data['message'] }}
@endcomponent