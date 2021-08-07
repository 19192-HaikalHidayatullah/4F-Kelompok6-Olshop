<!DOCTYPE html>
<html>

<head>
    <title><?= $title; ?></title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style4.css">
</head>

<body>
    <header class="container-fluid text-black">
        <div class="row">
            <div class="col-12 text-center">
                <h1 class="display-1">Online Tech Shop</h1>
                <div style="text-align: right;">
                    <a class="btn btn-primary" href="/home" name="home">Home</a>
                    <a class="btn btn-primary" href="<?= base_url('logout'); ?>" name="logout">Logout</a>
                </div>
            </div>
        </div>
    </header>
    <div class="container-border">

        <?= $this->renderSection('konten'); ?>

        <div class="container-fluid text-center">
            <div class="row">
                <div class="col-12 py-4 footer">
                    &copy;2021 Online Tech Shop
                </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>