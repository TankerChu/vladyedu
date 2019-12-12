@component('mail::message')

#Khách hàng mới đăng kí lớp học!!!

<strong>Tên: </strong> {{ $data['name'] }} <br>
<strong>Email: </strong> {{ $data['email'] }} <br>
<strong>Thành Phố: </strong> {{ $data['city']}} <br>
<strong>Số Điện Thoại: </strong> {{ $data['phone'] }} <br>
<strong>Lớp Học Đăng Kí: </strong> {{ $data['classes'] }} <br>
<strong>Tin Nhắn: </strong> <br>

{{ $data['message'] }} 


@endcomponent
