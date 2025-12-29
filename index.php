<!DOCTYPE html>
<html>

<head>
    <title>Form Insert</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 50px auto;
        }

        form {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 5px;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 10px;
        }

        button:hover {
            background-color: #45a049;
        }

        h2 {
            color: #333;
        }
    </style>
</head>

<body>
    <h2>Form Nhập Thông Tin</h2>

    <form method="POST">
        <label>Tên:</label>
        <input type="text" name="name" placeholder="Nhập tên của bạn">

        <label>Email:</label>
        <input type="email" name="email" placeholder="Nhập email">

        <label>Điện thoại:</label>
        <input type="text" name="phone" placeholder="Nhập số điện thoại">

        <label>Tin nhắn:</label>
        <textarea name="message" rows="5" placeholder="Nhập tin nhắn"></textarea>

        <button type="submit" name="submit">Gửi Thông Tin</button>
    </form>

    <?php
    require_once 'class.php';

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        $form = new FormHandler();
        $form->addData(
            $_POST['name'] ?? '',
            $_POST['email'] ?? '',
            $_POST['phone'] ?? '',
            $_POST['message'] ?? ''
        );
        $form->displayData();
    }
    ?>

</body>

</html>