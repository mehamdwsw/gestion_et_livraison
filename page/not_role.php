<?php
include_once("../vendor/autoload.php");
use Tols\Request;
 Request::Method_test();


?>
    <title>بانتظار الموافقة</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f4f7f6;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }
        .status-card {
            background: white;
            padding: 50px;
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.08);
            text-align: center;
            max-width: 550px;
            width: 100%;
            border-top: 6px solid #ffc107; /* لون التنبيه */
        }
        .icon-wrapper {
            width: 100px;
            height: 100px;
            background: #fff9e6;
            color: #ffc107;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 25px;
            font-size: 50px;
        }
        h2 {
            color: #333;
            font-weight: 700;
            margin-bottom: 15px;
        }
        p {
            color: #777;
            line-height: 1.8;
            margin-bottom: 30px;
        }
        .btn-refresh {
            background-color: #ffc107;
            border: none;
            color: #000;
            font-weight: bold;
            padding: 12px 35px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        .btn-refresh:hover {
            background-color: #e0a800;
            transform: scale(1.05);
        }
        .btn-logout {
            color: #dc3545;
            text-decoration: none;
            font-weight: 600;
            margin-top: 20px;
            display: inline-block;
        }
    </style>
</head>
<body>

    <div class="status-card">
        <div class="icon-wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="60" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-1.347 1.767c.292-.185.565-.392.818-.617l.662.748c-.285.252-.592.484-.913.696l-.567-.827zm-1.91 1.25c.343-.083.674-.191.989-.322l.383.924a7.996 7.996 0 0 1-1.218.411l-.154-.913zM4 11V10h1v1c0 .276.224.5.5.5s.5-.224.5-.5V8h1v3a1.5 1.5 0 0 1-3 0z"/>
            </svg>
        </div>
        
        <h2>بانتظار مراجعة الإدارة</h2>
        
        <p>
            حسابك مسجل بنجاح، ولكن الوصول إلى هذه المميزات يتطلب موافقة الأدمن على صلاحياتك.
            <br>
            <strong>يرجى الانتظار قليلاً أو المحاولة مرة أخرى لاحقاً.</strong>
        </p>
        
        <div class="d-grid gap-2">
            <button onclick="window.location.reload();" class="btn btn-refresh">
                تحديث الحالة
            </button>
            <a href="../Service/logout.php" class="btn-logout">تسجيل الخروج</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>