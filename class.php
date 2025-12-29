<?php

class FormHandler
{
  private $data = array();
  private $errors = array();

  public function __construct()
  {
    // Initialize
  }

  // Thêm dữ liệu vào form
  public function addData($name, $email, $phone, $message)
  {
    if (empty($name)) {
      $this->errors[] = "Tên không được để trống";
    } else {
      $this->data['name'] = htmlspecialchars($name);
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $this->errors[] = "Email không hợp lệ";
    } else {
      $this->data['email'] = htmlspecialchars($email);
    }

    if (empty($phone)) {
      $this->errors[] = "Điện thoại không được để trống";
    } else {
      $this->data['phone'] = htmlspecialchars($phone);
    }

    if (empty($message)) {
      $this->errors[] = "Tin nhắn không được để trống";
    } else {
      $this->data['message'] = htmlspecialchars($message);
    }

    return $this;
  }

  // Kiểm tra có lỗi không
  public function hasErrors()
  {
    return count($this->errors) > 0;
  }

  // Lấy lỗi
  public function getErrors()
  {
    return $this->errors;
  }

  // In ra dữ liệu
  public function displayData()
  {
    if ($this->hasErrors()) {
      echo "<div style='color: red;'>";
      echo "<h3>Lỗi:</h3>";
      foreach ($this->errors as $error) {
        echo "- " . $error . "<br>";
      }
      echo "</div>";
    } else {
      echo "<div style='border: 1px solid #ccc; padding: 15px; margin-top: 20px;'>";
      echo "<h3>Thông tin đã nhập:</h3>";
      echo "Tên: <strong>" . $this->data['name'] . "</strong><br>";
      echo "Email: <strong>" . $this->data['email'] . "</strong><br>";
      echo "Điện thoại: <strong>" . $this->data['phone'] . "</strong><br>";
      echo "Tin nhắn: <strong>" . nl2br($this->data['message']) . "</strong>";
      echo "</div>";
    }
  }

  // Lấy dữ liệu dưới dạng mảng
  public function getData()
  {
    return $this->data;
  }
}
