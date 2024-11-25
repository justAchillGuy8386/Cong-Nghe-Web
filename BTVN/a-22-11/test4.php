<?php
session_start();

// Lấy danh sách sản phẩm từ session
$products = $_SESSION['products'] ?? [];
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Danh sách sản phẩm</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        tr:hover {
            background-color: #f2f2f2;
        }

        .header{
            display: flex; /* Sử dụng Flexbox để căn chỉnh các item */
            justify-content: space-between; /* Căn đều các mục từ trái sang phải */
            align-items: center; /* Căn giữa các mục theo chiều dọc */
            background-color: #333; /* Màu nền cho header */
            color: white; /* Màu chữ trắng */
            padding: 10px 20px;
        }

        .header-item {
    padding: 10px 20px; /* Khoảng cách giữa các mục */
    text-transform: uppercase; /* Viết hoa các chữ cái */
    font-weight: bold; /* Đậm chữ */
    cursor: pointer; /* Thêm hiệu ứng con trỏ khi di chuột */
    transition: background-color 0.3s ease; /* Thêm hiệu ứng khi hover */
}

/* Hiệu ứng hover khi người dùng di chuột */
.header-item:hover {
    background-color: #555; /* Đổi màu nền khi hover */
}

/* Căn giữa cho các mục chính */
.header-item:first-child {
    font-size: 1.2em; /* Lớn hơn cho mục đầu tiên (Administration) */
    font-weight: bold;
}
    </style>
</head>

<body>
    <div class = "header">
        <div class="header-item"> Adminstration</div>
        <div class="header-item"> Trang chu</div>
        <div class="header-item"> Trang ngoai</div>
        <div class="header-item"> The loai</div>
        <div class="header-item"> Tac gia</div>
        <div class="header-item"> Bai viet</div>
    </div>

    <h1>Danh sách sản phẩm</h1>

    <form action="test5.php?action=add" method="get">
        <button class = "btn btn-success">Add new</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $id => $product): ?>
                <tr>
                    <td><?= htmlspecialchars($product['name']) ?></td>
                    <td><?= number_format($product['price'], 0, ',', '.') ?> VNĐ</td>
                    <td>
                        <a href="test5.php?action=edit&id=<?= $id ?>">
                            <i class="fa-solid fa-wrench"></i>
                        </a>
                      
                    </td>
                    <td>
                          <a href="test5.php?action=delete&id=<?= $id ?>"
                            onclick="return confirm('Bạn có chắc muốn xóa sản phẩm này?')">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>