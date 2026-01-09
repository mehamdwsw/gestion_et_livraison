<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>الحساب محظور | تم تعليق حسابك</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.rtl.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0;
        }

        .ban-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            padding: 40px;
            max-width: 550px;
            width: 90%;
            text-align: center;
            border-top: 8px solid #dc3545;
        }

        .ban-icon {
            font-size: 80px;
            color: #dc3545;
            margin-bottom: 20px;
            animation: shake 0.5s ease-in-out infinite alternate;
        }

        @keyframes shake {
            0% { transform: rotate(-5deg); }
            100% { transform: rotate(5deg); }
        }

        .ban-title {
            font-weight: 700;
            color: #343a40;
            margin-bottom: 15px;
        }

        .ban-message {
            color: #6c757d;
            line-height: 1.8;
            margin-bottom: 30px;
        }

        .info-box {
            background-color: #fff5f5;
            border: 1px solid #feb2b2;
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 25px;
            text-align: right;
        }

        .info-box ul {
            margin: 0;
            padding-right: 20px;
            list-style-type: none;
        }

        .info-box ul li::before {
            content: "\f057";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            margin-left: 10px;
            color: #dc3545;
        }

        .btn-contact {
            background-color: #343a40;
            color: white;
            padding: 12px 30px;
            border-radius: 10px;
            text-decoration: none;
            transition: 0.3s;
            display: inline-block;
        }

        .btn-contact:hover {
            background-color: #000;
            color: white;
            transform: translateY(-2px);
        }

        .logout-link {
            display: block;
            margin-top: 20px;
            color: #6c757d;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <div class="ban-card">
        <div class="ban-icon">
            <i class="fas fa-user-slash"></i>
        </div>
        
        <h2 class="ban-title">عذراً، حسابك محظور حالياً</h2>
        
        <p class="ban-message">
            تم تعليق وصولك إلى التطبيق بواسطة الإدارة لمخالفتك شروط الاستخدام أو بسبب نشاط غير طبيعي على الحساب.
        </p>

        <div class="info-box">
            <strong>ماذا يعني هذا؟</strong>
            <ul class="mt-2">
                <li>لا يمكنك إنشاء طلبات جديدة.</li>
                <li>لا يمكنك تقديم عروض توصيل.</li>
                <li>تم إيقاف جميع ميزات لوحة التحكم الخاصة بك.</li>
            </ul>
        </div>

        <a href="mailto:support@deliveryapp.com" class="btn-contact">
            <i class="fas fa-envelope me-2"></i> مراسلة الدعم الفني
        </a>

        <a href="../Service/logout.php" class="logout-link">تسجيل الخروج</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>