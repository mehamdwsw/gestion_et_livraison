<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>تم إنشاء الحساب بنجاح</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    
    <style>
        body {
            font-family: 'Cairo', sans-serif;
            background-color: #f8f9fa;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .success-card {
            background: white;
            padding: 40px;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            text-align: center;
            max-width: 500px;
            width: 90%;
        }
        .success-icon {
            font-size: 80px;
            color: #198754;
            display: inline-block;
            margin-bottom: 20px;
            animation: scaleUp 0.5s ease-out;
        }
        @keyframes scaleUp {
            0% { transform: scale(0); }
            80% { transform: scale(1.2); }
            100% { transform: scale(1); }
        }
        .btn-custom {
            padding: 10px 30px;
            border-radius: 10px;
            font-weight: bold;
            transition: all 0.3s;
        }
        .btn-custom:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body>

    <div class="success-card">
        <div class="success-icon">
            <i class="bi bi-check-circle-fill"></i>
        </div>
        
        <h2 class="fw-bold mb-3">تهانينا! 🎉</h2>
        <p class="text-muted mb-4">
            لقد تم إنشاء حسابك بنجاح في نظام إدارة التوصيل. يمكنك الآن البدء في استخدام كافة المميزات المتاحة.
        </p>

        <hr class="my-4">

        <div class="d-grid gap-2">
            <a href="../page/auth/login.php" class="btn btn-primary btn-custom btn-lg">
                <i class="bi bi-box-arrow-in-right ms-2"></i> الانتقال لتسجيل الدخول
            </a>
            <a href="../page/auth/login.php" class="btn btn-outline-secondary btn-custom">
                العودة للرئيسية
            </a>
        </div>
        
        <p class="mt-4 small text-secondary">
            سيتم توجيهك تلقائياً خلال <span id="timer">5</span> ثوانٍ...
        </p>
    </div>

    <script>
        let count = 5;
        const timerElement = document.getElementById('timer');
        
        const countdown = setInterval(() => {
            count--;
            timerElement.textContent = count;
            if (count <= 0) {
                clearInterval(countdown);
                window.location.href = '../page/auth/login.php'; // غير هذا الرابط لصفحة الدخول الخاصة بك
            }
        }, 1000);
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>