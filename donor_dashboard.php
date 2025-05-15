<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $admin_name = $_POST['admin_name'];
    $admin_password = $_POST['admin_password'];

    if ($admin_name === 'admin' && $admin_password === '1234') {
        // Valid credentials — show admin dashboard
        echo '
        <!DOCTYPE html>
        <html lang="en">
        <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Admin Dashboard</title>
          <style>
            body {
              margin: 0;
              font-family: Arial, sans-serif;
              background-color: #f5f5f5;
            }
            .header {
              display: flex;
              justify-content: space-between;
              align-items: center;
              background-color: #333;
              color: white;
              padding: 20px 40px;
            }
            .header .logo {
              font-size: 24px;
              font-weight: bold;
            }
            .nav-links a {
              color: white;
              text-decoration: none;
              margin-left: 20px;
              font-weight: bold;
            }
            .nav-links a:hover {
              text-decoration: underline;
            }
            .main-content {
              text-align: center;
              padding: 100px 20px;
              background-image: url("https://source.unsplash.com/1600x900/?admin,office");
              background-size: cover;
              background-position: center;
              height: calc(100vh - 80px);
              color: white;
            }
            .main-content h1 {
              background-color: rgba(0, 0, 0, 0.6);
              display: inline-block;
              padding: 20px 40px;
              border-radius: 8px;
              font-size: 48px;
            }
          </style>
        </head>
        <body>
          <div class="header">
            <div class="logo">Hand2Hope</div>
            <div class="nav-links">
              <a href="#">Home</a>
              <a href="#">Donor Details</a>
              <a href="#">Charity Details</a>
              <a href="#">Donations</a>
              <a href="#">Campaigns</a>
              <a href="#">Transactions</a>
              <a href="#">Logout</a>
            </div>
          </div>
          <div class="main-content">
            <h1>ADMIN HOME</h1>
          </div>
        </body>
        </html>';
    } else {
        echo "<script>alert('Invalid credentials!'); window.location.href='admin_login.html';</script>";
    }
}
?>
