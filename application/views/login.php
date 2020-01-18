<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.css') ?>">
    <script src="<?php echo base_url('assets/dist/js/adminlte.css') ?>"></script>
</head>
<body>
    <div class="container">
        <div class="card" style="width: 25rem;margin:auto;margin-top:15%;">
            <div class="card-body">
                <form action="<?php echo base_url('login/cek_login') ?>" method="post">
                    <div class="form-group">
                        <label>Email address</label>
                        <input name="email" type="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input name="password" type="password" class="form-control" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>