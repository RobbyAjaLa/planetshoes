<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<head>
    <link rel="stylesheet" href="/css/paymentsuccessCSS.css">
</head>


<body>
    <div class="payment-page">
        <img class="foto1" src="/img/paymentsuccess.png" alt="">
        <h1>Your Payment is Successfull</h1>
        <p>Thank you for your payment.An automated payment receipt will be sent to your registered email.</p>
        <br>
        <br>
        <a class="btn btn-light tombolhome" href="/pages/" role="button">Back to home</a>
        <br>
        <br>
        <br>
    </div>
    <?= $this->endSection('content'); ?>
</body>