<?php
// register.php - Registration Page with Server-side Validation
$errors = [];
$success = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Extract fields (example; add all as needed)
    $profile_created_by = $_POST['profile_created_by'] ?? '';
    $email = trim($_POST['email'] ?? '');
    $confirm_email = trim($_POST['confirm_email'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm_password'] ?? '';

    if (empty($profile_created_by)) $errors[] = 'Profile created by is required.';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Valid email is required.';
    if ($email !== $confirm_email) $errors[] = 'Emails do not match.';
    if (empty($password) || strlen($password) < 6) $errors[] = 'Password must be at least 6 characters.';
    if ($password !== $confirm_password) $errors[] = 'Passwords do not match.';
    // Add checks for other fields...

    if (empty($errors) && !isset($_POST['agree'])) $errors[] = 'You must agree to the privacy policy.';

    if (empty($errors)) {
        // Simulate save (e.g., insert into DB)
        $success = true;
        // header('Location: login.php'); // Redirect on success
    }
}
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a New Profile - Bibahabd.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Noto Sans Bengali', sans-serif; background-color: #F0F4C3; padding: 20px; }
        .container { max-width: 1200px; margin: auto; display: flex; }
        .form-section { flex: 3; background-color: #DCEDC8; padding: 20px; border-radius: 10px; }
        .sidebar { flex: 1; margin-left: 20px; background-color: #DCEDC8; padding: 20px; border-radius: 10px; }
        .section-header { background-color: #8BC34A; color: white; padding: 10px; margin-bottom: 10px; }
        .form-group { margin-bottom: 15px; display: flex; align-items: center; }
        .form-group label { flex: 1; font-weight: bold; }
        .form-group select, .form-group input { flex: 2; padding: 8px; border: 1px solid #CCC; border-radius: 5px; }
        .btn-submit { background-color: #4CAF50; color: white; border: none; padding: 10px; width: 100%; border-radius: 5px; }
        .errors { color: red; }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-section">
            <h2>Create a new profile</h2>
            <?php if (!empty($errors)): ?>
                <ul class="errors alert alert-danger">
                    <?php foreach ($errors as $error): ?>
                        <li><?= htmlspecialchars($error) ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <?php if ($success): ?>
                <div class="alert alert-success">Registration successful! Please log in.</div>
            <?php endif; ?>
            <form method="POST" id="registerForm">
                <div class="section-header">Basic Information</div>
                <div class="form-group">
                    <label>Profile created by</label>
                    <select name="profile_created_by" required>
                        <option>Self</option>
                        <option>Parent</option>
                        <!-- Add more options -->
                    </select>
                </div>
                <div class="form-group">
                    <label>Looking For</label>
                    <select name="looking_for" required>
                        <option>Self</option>
                        <option>Son</option>
                        <!-- Add more -->
                    </select>
                </div>
                <!-- Add other fields like Candidate First Name, Last Name, Community/Religion, etc. similarly -->
                <!-- Example: -->
                <div class="form-group">
                    <label>Candidate First Name</label>
                    <input type="text" name="first_name" required>
                </div>
                <!-- ... Repeat for all fields in screenshot ... -->

                <div class="section-header">Present Location</div>
                <!-- Add fields like Country, Division, etc. -->

                <div class="section-header">Account Information</div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" required>
                </div>
                <div class="form-group">
                    <label>Confirm Email Address</label>
                    <input type="email" name="confirm_email" required>
                </div>
                <div class="form-group">
                    <label>Candidate Phone Number</label>
                    <input type="tel" name="candidate_phone">
                </div>
                <div class="form-group">
                    <label>Guardian Phone Number</label>
                    <input type="tel" name="guardian_phone">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" required minlength="6">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="confirm_password" required>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="agree" required>
                    <label>I affirm that I have read and agreed to the Privacy Policy and Terms & Conditions of Bibahabd.com for your convenience, these documents.</label>
                </div>
                <button type="submit" class="btn-submit">SUBMIT</button>
            </form>
        </div>
        <div class="sidebar">
            <h4>RELATED LINKS</h4>
            <ul>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Payment Mode</a></li>
                <li><a href="#">Terms & Condition</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Legal Support</a></li>
                <!-- Add more from screenshot -->
            </ul>
            <h4>SUPPORT CENTER</h4>
            <!-- Add addresses, phones -->
        </div>
    </div>
    <script>
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            let valid = true;
            const email = this.querySelector('[name="email"]').value;
            const confirmEmail = this.querySelector('[name="confirm_email"]').value;
            const pwd = this.querySelector('[name="password"]').value;
            const confirmPwd = this.querySelector('[name="confirm_password"]').value;
            const agree = this.querySelector('[name="agree"]').checked;

            if (email !== confirmEmail) {
                alert('Emails do not match.');
                valid = false;
            }
            if (pwd !== confirmPwd || pwd.length < 6) {
                alert('Passwords do not match or too short.');
                valid = false;
            }
            if (!agree) {
                alert('You must agree to the policy.');
                valid = false;
            }
            // Check required fields
            this.querySelectorAll('[required]').forEach(input => {
                if (!input.value.trim()) valid = false;
            });
            if (!valid) e.preventDefault();
        });
    </script>
</body>
</html>