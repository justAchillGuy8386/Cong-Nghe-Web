<?php
session_start(); // khởi tạo phiên session, lưu thông tin người dùng truy cập

// Lấy danh sách sản phẩm từ session
$products = $_SESSION['products'] ?? [];

// Kiểm tra tham số action và id
$action = $_GET['action'] ?? 'add';
$id = $_GET['id'] ?? null;

// Giá trị mặc định cho form
$name = '';
$price = '';

if ($action === 'edit' && isset($id)) {
    // Lấy thông tin sản phẩm từ session nếu đang sửa
    $name = $products[$id]['name'] ?? '';
    $price = $products[$id]['price'] ?? '';
}

// Xử lý khi form được gửi
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $price = $_POST['price'] ?? '';

    if ($action === 'edit' && isset($id)) {
        // Cập nhật sản phẩm
        $products[$id] = ['name' => $name, 'price' => (int)$price];
    } else {
        // Thêm sản phẩm mới
        $products[] = ['name' => $name, 'price' => (int)$price];
    }

    // Lưu danh sách sản phẩm vào session
    $_SESSION['products'] = $products;

    // Quay lại trang danh sách
    header('Location: test4.php');
    exit();
}

// Kiểm tra yêu cầu xóa sản phẩm từ URL
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['id'])) {
    $id = $_GET['id'];

    // Kiểm tra xem sản phẩm có tồn tại trong session không
    if (isset($_SESSION['products'][$id])) {
        // Xóa sản phẩm
        unset($_SESSION['products'][$id]);
        // Sau khi xóa, chuyển hướng về trang danh sách sản phẩm (hoặc trang hiện tại)
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <!-- Include header -->
    <?php include 'test6.php'; ?>
    <title><?= $action === 'edit' ? 'Sửa sản phẩm' : 'Thêm sản phẩm mới' ?></title>
</head>
<body>


    <h1><?= $action === 'edit' ? 'Sửa sản phẩm' : 'Thêm sản phẩm mới' ?></h1>

    <form action="test5.php?action=<?= $action ?>&id=<?= htmlspecialchars($id) ?>" method="post">
        <label for="name">Tên sản phẩm:</label>
        <input type="text" name="name" id="name" value="<?= htmlspecialchars($name) ?>" required>
        <br><br>
        <label for="price">Giá thành:</label>
        <input type="text" name="price" id="price" value="<?= htmlspecialchars($price) ?>" required>
        <br><br>
        <button type="submit"><?= $action === 'edit' ? 'Cập nhật' : 'Thêm mới' ?></button>
    </form>
</body>
</html>
You sent
