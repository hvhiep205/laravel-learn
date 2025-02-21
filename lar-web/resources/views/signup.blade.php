<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Màu nền nhẹ nhàng */
        }

        .container {
            background-color: #ffffff; /* Màu nền trắng cho vùng chứa */
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Đổ bóng nhẹ */
        }

        .form-label {
            font-weight: bold; /* In đậm nhãn */
        }

        .btn-primary {
            background-color: #007bff; /* Màu xanh cho nút */
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Màu khi hover */
            border-color: #0056b3;
        }

        .display-infor {
            margin-top: 20px; /* Khoảng cách phía trên */
            padding: 15px;
            background-color: #e9ecef; /* Màu nền cho thông tin hiển thị */
            border-radius: 5px;
        }

        .display-infor p {
            margin: 5px 0; /* Khoảng cách giữa các đoạn */
        }

        .text-danger {
            font-size: 0.875em; /* Kích thước chữ cho thông báo lỗi */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <form action="{{ route('signup.displayInfor') }}" method="post" style="width: 600px; margin: auto;">
            @csrf
            
            <div class="mb-3">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="name" value="{{ old('name') }}">
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label class="form-label">Age</label>
                <input type="text" class="form-control" name="age" value="{{ old('age') }}">
                @error('age')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label class="form-label">Date</label>
                <input type="date" class="form-control" name="date" value="{{ old('date') }}">
                @error('date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label class="form-label">Phone</label>
                <input type="tel" class="form-control" name="phone" value="{{ old('phone') }}">
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label class="form-label">Web</label>
                <input type="url" class="form-control" name="web" value="{{ old('web') }}">
                @error('web')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            
            <div class="mb-3"></div>
            <div class="mb-3">
                <button type="submit" class="btn btn-primary">OK</button>
            </div>
        </form>

        <div class="display-infor">
            @if(isset($user))
                <p>Name: {{ $user['name'] }}</p>
                <p>Age: {{ $user['age'] }}</p>
                <p>Date: {{ $user['date'] }}</p>
                <p>Phone: {{ $user['phone'] }}</p>
                <p>Website: {{ $user['web'] }}</p>
                <p>Address: {{ $user['address'] }}</p>
            @endif
        </div>
    </div>
</body>
</html>