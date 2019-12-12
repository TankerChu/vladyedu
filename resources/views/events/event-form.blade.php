<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name"></label>
            <input type="text" name="name" class="form-control" value="{{old ('name') }}"
                placeholder="Tên Đầy Đủ Của Bạn">
            @if ($errors->has('name'))
            <small class="invalid-feedback">{{ $errors -> first('name') }}</small>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="phone"></label>
            <input type="text" name="phone" class="form-control" value="{{old ('phone') }}"
                placeholder="Số điện thoại của bạn">
            @if ($errors->has('phone'))
            <small class="invalid-feedback">{{ $errors -> first('phone') }}</small>
            @endif
        </div>
    </div>
</div>
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="form-group">
            <label for="email"></label>
            <input type="text" name="email" class="form-control" value="{{old ('email') }}" placeholder="Email Của Bạn">
            @if ($errors->has('email'))
            <small class="invalid-feedback">{{ $errors -> first('email') }}</small>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="city"></label>
            <input type="text" name="city" class="form-control" value="{{old ('city') }}"
                placeholder="Thành phố hiện tại của bạn">
            @if ($errors->has('city'))
            <small class="invalid-feedback">{{ $errors -> first('city') }}</small>
            @endif
        </div>
    </div>
</div>
<div class="form-group">
    <label for="event"></label>
    <input type="text" name="event" class="form-control" value="{{old ('event') }}"
        placeholder="Điền lại tên sự kiện bạn muốn đăng kí">
    @if ($errors->has('event'))
    <small class="invalid-feedback">{{ $errors -> first('event') }}</small>
    @endif
</div>
<div class="form-group">
    <label for="quantity"></label>
    <input type="number" name="quantity" class="form-control" value="{{old ('quantity') }}" placeholder="Số lượng vé">
    @if ($errors->has('quantity'))
    <small class="invalid-feedback">{{ $errors -> first('quantity') }}</small>
    @endif
</div>
<div class="form-group">
    <label for="message"></label>
    <textarea name="message" id="message" cols="30" rows="7" class="form-control"
        placeholder="Tin Nhắn Của Bạn Cho Chúng Tôi"></textarea>
</div>
<div class="row justify-content-center">
    <div class="form-group">
        @csrf
        <button type="submit" class="btn btn-primary py-3 px-5">Gửi Đi</button>
    </div>
</div>