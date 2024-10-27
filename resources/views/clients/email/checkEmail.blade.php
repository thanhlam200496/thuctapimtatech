<form action="{{ route('checkEmail') }}" method="get" class="registration-form"
    style="max-width: 600px;margin: 0 auto;padding: 20px;border: 1px solid #ccc;border-radius: 10px;background-color: #f9f9f9;">
    @csrf
    <p class="greeting" style="font-size: 16px;margin-bottom: 20px;color: #333;">Xin chào {{ $data['name'] }},
        đây là mail xác nhận đăng ký vào Web giáo dục, sau đây là thông tin đăng ký:</p>
    <div class="form-group" style="margin-bottom: 15px;">
        <label for="name" style="display: block;font-weight: bold;margin-bottom: 5px;color: #555;">Họ
            và tên:</label>
        <input type="text"
            style="width: 100%;padding: 8px;box-sizing: border-box;border: 1px solid #ccc;border-radius: 5px;background-color: #e9e9e9;"
            id="name" disabled name="name" value="{{ $data['name'] }}">
    </div>
    <div class="form-group" style="margin-bottom: 15px;">
        <label for="email" style="display: block;font-weight: bold;margin-bottom: 5px;color: #555;">Email:</label>
        <input type="text"
            style="width: 100%;padding: 8px;box-sizing: border-box;border: 1px solid #ccc;border-radius: 5px;background-color: #e9e9e9;"
            id="email" disabled name="email" value="{{ $data['email'] }}">
    </div>
    <div class="form-group" style="margin-bottom: 15px;">
        <label for="password" style="display: block;font-weight: bold;margin-bottom: 5px;color: #555;">Password:</label>
        <input type="text"
            style="width: 100%;padding: 8px;box-sizing: border-box;border: 1px solid #ccc;border-radius: 5px;background-color: #e9e9e9;"
            id="password" disabled name="password" value="{{ $data['password'] }}">
    </div>
    <input type="hidden" name="name" value="{{ $data['name'] }}">
    <input type="hidden" name="email" value="{{ $data['email'] }}">
    <input type="hidden" name="password" value="{{ $data['password'] }}">
    <p class="confirmation" style=" font-size: 16px; margin-top: 20px; color: #333;">Nếu như bạn là người đăng
        ký, Click <input type="submit"
            style="background-color: #4CAF50; color: white; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;"
            value="Vào đây" class="confirm-button"> để xác nhận đăng ký</p>
</form>

