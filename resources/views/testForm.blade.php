<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý phòng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-4">
        <h4 class="fw-bold text-warning">Form nhập dữ liệu</h4>
        <div class="card p-4 border-dark">
            <h5 class="fw-bold">Quản lý phòng</h5>
            <div class="d-flex gap-2 mb-3">
                <button class="btn btn-danger">Hiển Thị</button>
                <button class="btn btn-warning">Thêm mới phòng <i class="bi bi-plus-square"></i></button>
            </div>
            <form>
                <div class="row mb-3">
                    <div class="col">
                        <label class="form-label">Tên phòng</label>
                        <input type="text" class="form-control" placeholder="Tên phòng">
                    </div>
                    <div class="col">
                        <label class="form-label">Mô tả phòng</label>
                        <input type="text" class="form-control" placeholder="Mô tả phòng">
                    </div>
                    <div class="col">
                        <label class="form-label">Giá</label>
                        <input type="text" class="form-control" placeholder="Giá phòng">
                    </div>
                    <div class="col">
                        <label class="form-label">📷 Chọn hình ảnh</label>
                        <input type="file" class="form-control" placeholder="Giá phòng">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>