<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // フォームから送信されたデータをCSVに保存
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $file = fopen('contact_form.csv', 'a');
    fputcsv($file, [$name, $email, $message]);
    fclose($file);

    $success_message = "お問い合わせありがとうございます！";
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>株式会社Jecコンサルティング</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEJG3QhqLMpG8r+KnujsR9fEXpksdA++KneEdwwR+IZ3zce3T7nmT8kpwXI6s" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Arial', sans-serif;
        }
        .navbar {
            margin-bottom: 50px;
        }
        .hero-section {
            background: #007bff;
            color: white;
            padding: 100px 0;
            text-align: center;
        }
        .contact-section {
            background: #f8f9fa;
            padding: 50px 0;
        }
        .footer {
            background: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

<!-- ナビゲーションバー -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Jecコンサルティング</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">会社情報</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">サービス</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">お問い合わせ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ヒーローセクション -->
<section class="hero-section">
    <div class="container">
        <h1>株式会社Jecコンサルティング</h1>
        <p>企業の成長をサポートします</p>
    </div>
</section>

<!-- 会社情報セクション -->
<section id="about" class="container">
    <h2 class="text-center mb-5">会社情報</h2>
    <p>株式会社Jecコンサルティングは、企業の成長を支援するためのコンサルティングサービスを提供します。経験豊富なスタッフが、お客様に最適なソリューションを提案します。</p>
</section>

<!-- サービスセクション -->
<section id="services" class="container">
    <h2 class="text-center mb-5">サービス</h2>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">コンサルティングサービス</h5>
                    <p class="card-text">企業の課題を解決するための戦略的なアドバイスを提供します。</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">市場調査</h5>
                    <p class="card-text">企業の成長に必要な市場データを提供し、戦略策定をサポートします。</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">人材育成</h5>
                    <p class="card-text">社員のスキルアップを支援するための研修プログラムを提供します。</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- お問い合わせフォームセクション -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="text-center mb-5">お問い合わせ</h2>
        <?php if (isset($success_message)) { ?>
            <div class="alert alert-success" role="alert">
                <?php echo $success_message; ?>
            </div>
        <?php } ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="name" class="form-label">お名前</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">メールアドレス</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">お問い合わせ内容</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <button type="submit" class="btn btn-primary">送信</button>
        </form>
    </div>
</section>

<!-- フッター -->
<footer class="footer">
    <p>&copy; 2025 株式会社Jecコンサルティング</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+ua7Kw1TIq0y5wM5yENh0a1RYxwpnnsr/k8YdUyIUuNlBO6JSCNS3Eq+ZG" crossorigin="anonymous"></script>

</body>
</html>
