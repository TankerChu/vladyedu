<div class="row">
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
<div class="form-group">
    <label for="email"></label>
    <input type="text" name="email" class="form-control" value="{{old ('email') }}" placeholder="Email Của Bạn">
    @if ($errors->has('email'))
    <small class="invalid-feedback">{{ $errors -> first('email') }}</small>
    @endif
</div>
<div class="form-group">
    <label for="message"></label><textarea name="message" id="message" cols="30" rows="7" class="form-control"
        placeholder="Tin Nhắn Của Bạn Cho Chúng Tôi"></textarea>
</div>
<div class="form-group">
    @csrf
    <button type="submit" class="btn btn-primary py-3 px-5">Gửi Đi</button>
</div>