<?php
// login.php
$errors = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email_or_id = trim($_POST['email_or_id'] ?? '');
    $password = $_POST['password'] ?? '';

    if (empty($email_or_id)) $errors[] = 'Email ID or Profile ID is required.';
    if (empty($password)) $errors[] = 'Password is required.';
    if (strlen($password) < 6) $errors[] = 'Password must be at least 6 characters.';

    if (empty($errors)) {
        header('Location: index.php');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login - Bibahabd.com</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
<style>
    body {
        background-color: rgba(0,0,0,0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        font-family: Arial, sans-serif;
    }
    .login-modal {
        background: #fff;
        border: 4px solid #9AC63C;
        border-radius: 4px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.3);
        max-width: 600px;
        width: 100%;
    }
    .modal-header-custom {
        background-color: #9AC63C;
        color: white;
        font-weight: bold;
        padding: 10px 15px;
        font-size: 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .modal-header-custom .close {
        color: white;
        font-size: 20px;
        line-height: 20px;
        cursor: pointer;
        border: none;
        background: none;
    }
    .modal-body-custom {
        padding: 20px;
    }
    .form-label {
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .form-control {
        font-size: 14px;
        height: 38px;
        border-radius: 3px;
        border: 1px solid #ccc;
    }
    .login-btn {
        background-color: #9AC63C;
        border: none;
        color: white;
        font-weight: bold;
        padding: 6px 20px;
        font-size: 14px;
        border-radius: 2px;
    }
    .login-btn:hover {
        background-color: #88b030;
    }
    .right-box {
        border-left: 1px solid #ccc;
        padding-left: 20px;
    }
    .register-btn {
        background-color: #9AC63C;
        border: none;
        color: white;
        font-weight: bold;
        padding: 5px 15px;
        font-size: 14px;
        border-radius: 2px;
    }
    .register-btn:hover {
        background-color: #88b030;
    }
    .forgot-link {
        color: #7CB342;
        font-weight: bold;
        text-decoration: none;
    }
    .forgot-link:hover {
        text-decoration: underline;
    }
    .errors {
        color: red;
        font-size: 13px;
        margin-bottom: 10px;
        list-style: none;
        padding: 0;
    }
</style>
</head>
<body>

<div class="login-modal">
    <div class="modal-header-custom">
        Login To Continue...
        <button class="close" onclick="window.history.back();">&times;</button>
    </div>
    <div class="modal-body-custom">
        <div class="row">
            <div class="col-md-6">
                <?php if (!empty($errors)): ?>
                    <ul class="errors">
                        <?php foreach ($errors as $err): ?>
                            <li><?= htmlspecialchars($err) ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Email ID or Profile ID</label>
                        <input type="text" name="email_or_id" class="form-control" value="<?= htmlspecialchars($_POST['email_or_id'] ?? '') ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                    </div>
                    <button type="submit" class="login-btn">LOGIN</button>
                </form>
            </div>
            <div class="col-md-6 right-box">
                <p><strong>Not Our Member?</strong><br>Have not previously registered?</p>
                <button class="register-btn">REGISTER NOW</button>
                <p class="mt-3"><strong>Forgot Password?</strong><br>
                    <a href="#" class="forgot-link">Click here for Recover</a> a new password.
                </p>
            </div>
        </div>
    </div>
</div>

</body>
</html>
