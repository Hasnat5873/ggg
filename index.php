<?php
// index.php - Homepage
?>
<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibahabd.com - Realizing Dreams</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Bengali:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Noto Sans Bengali', sans-serif;
        }
        /* Top Contact Bar */
        .top-bar {
            background-color: #8BC34A;
            color: white;
            font-size: 14px;
            padding: 5px 0;
        }
        .top-bar a {
            color: white;
            text-decoration: none;
            border:1px solid red;
            
        }
        .top-bar i {
            margin-right: 5px;
        }

        /* Navbar */
        .navbar {
            background-color: white;
            border-bottom: 1px solid #ddd;
        }
        .navbar-brand img {
            height: 50px;
        }
        .nav-link {
            color: #4CAF50 !important;
            font-weight: 600;
            padding: 8px 15px !important;
        }
        .nav-link:hover {
            background-color: #8BC34A;
            color: white !important;
            border-radius: 5px;
        }
        .nav-link.active {
            background-color: #8BC34A;
            color: white !important;
            border-radius: 5px;
        }

        /* Hero Section */
        .hero-section {
            background-color: #f5f5f5;
            padding: 40px 0;
        }
        .hero-text h2 {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
            line-height: 1.4;
        }
        .hero-text p {
            font-size: 1.1rem;
            margin-bottom: 20px;
        }
        .hero-btn {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            font-size: 16px;
            border-radius: 5px;
        }
        .hero-btn:hover {
            background-color: #45a049;
        }
        .hero-img img {
            max-width: 100%;
            height: auto;
        }

    </style>
</head>
<body>

<!-- Top Contact Bar -->
<div class="top-bar">
    <div class="container d-flex justify-content-between">
        <div>
            <i class="fas fa-phone-alt"></i> +88 0960 66 65 555
            &nbsp; | &nbsp;
            <i class="fas fa-envelope"></i> info@bibahabd.com
            &nbsp; | &nbsp;
            <i class="fas fa-calendar-alt"></i> ২৯ শ্রাবণ ১৪৩২
        </div>
        <div>
            <a href="#"><i class="fas fa-lock"></i> লগ ইন</a>
            &nbsp; | &nbsp;
            <a href="#"><i class="fas fa-user"></i> রেজিস্ট্রেশন</a>
        </div>
    </div>
</div>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="logo.png" alt="Bibahabd Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link active" href="#">HOME</a></li>
                <li class="nav-item"><a class="nav-link" href="#">PROCESS</a></li>
                <li class="nav-item"><a class="nav-link" href="#">SEARCH</a></li>
                <li class="nav-item"><a class="nav-link" href="#">PACKAGES</a></li>
                <li class="nav-item"><a class="nav-link" href="#">APPOINTMENT</a></li>
                <li class="nav-item"><a class="nav-link" href="#">PAGES</a></li>
                <li class="nav-item"><a class="nav-link" href="#">CONTACT</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<div class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 hero-text">
                <h2>বিশ্বব্যাপী যোগ্য জীবনসঙ্গীর খোঁজ করুন এখনি</h2>
                <p>অবিবাহিত, ডিভোর্স, বিধবা, বিপত্নীক</p>
                <button class="hero-btn">জীবনসঙ্গী খুঁজুন!</button>
            </div>
            <div class="col-md-6 hero-img text-center">
                <img src="banner-woman.png" alt="Woman in green sari">
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
