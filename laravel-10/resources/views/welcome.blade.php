<!DOCTYPE html>
<html lang="bn">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home - Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div class="logo">আমাদের সাইট</div>
        <ul>
            <li><a href="{{route('welcomepage')}}">হোম</a></li>
            <li><a href="about.html">আমাদের সম্পর্কে</a></li>
            <li><a href="services.html">সেবাসমূহ</a></li>
            <li><a href="contact.html">যোগাযোগ</a></li>
        </ul>
    </nav>
    
    <div class="welcome-container">
        <h1>স্বাগতম!</h1>
        <p>আমাদের ওয়েবসাইটে আপনাকে স্বাগতম। নিচের ফর্মটি পূরণ করে আমাদের সাথে যোগাযোগ করুন।</p>
        <a href="#contact" class="welcome-btn">যোগাযোগ করুন</a>
    </div>

    <footer>
        <p>যোগাযোগ করুন: info@example.com | ফোন: ০১২৩৪৫৬৭৮৯</p>
        <div class="social-links">
            <a href="#">ফেসবুক</a>
            <a href="#">টুইটার</a>
            <a href="#">লিঙ্কডইন</a>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>
