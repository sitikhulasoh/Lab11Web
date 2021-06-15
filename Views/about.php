<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="introduce">
        <div class="row">
            <img src="akucantik.jpg" title="Siti Khulasoh" alt="Siti Khulasoh" class="image-circle" width="230"
            style="float: left; border: 2px solid black;">
            <h1>Hello!</h1>
            <p>Saya Siti Khulasoh <i>mahasiiswi Teknik Informatika dari kelas TI.19.A2</i> saat ini saya sedang menempuh semester 4 <i>Pemrograman Web</i>.</p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>