<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.css') ?>">
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.slim.js') ?>"></script>
    <script src="<?php echo base_url('assets/dist/js/adminlte.js') ?>"></script>
</head>
<body>
    <div class="container">
        <div class="card" style="width: 25rem;margin:auto;margin-top:15%;">
            <div class="card-body">
                <?php
                if($this->session->flashdata('error')){
                  ?>
                    <div class="alert alert-danger fade show" role="alert">
                        <?php echo $this->session->flashdata('error'); ?>
                    </div>
                <?php  
                }
                ?>
                <form action="<?php echo base_url('login/cek_login') ?>" method="post">
                    <div class="form-group">
                        <label>Username</label>
                        <input name="username" type="text" class="form-control" placeholder="Enter email">
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