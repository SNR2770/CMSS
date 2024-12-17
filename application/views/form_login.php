<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .login-container {
        width: 300px;
        padding: 40px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin: 100px auto;
    }

    .login-container h1 {
        text-align: center;
        color: #1abc9c; 
        font-size: 24px;
        margin-bottom: 20px;
    }

    .input-field {
        margin-bottom: 20px;
    }

    .input-field label {
        font-size: 14px;
        color: #555;
    }

    .input-field input {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 14px;
    }

    .input-field input:focus {
        border-color: #1abc9c; 
        outline: none;
    }

    .login-button {
        width: 100%;
        padding: 10px;
        background-color: #1abc9c; 
        color: white;
        border: none;
        border-radius: 4px;
        font-size: 16px;
        cursor: pointer;
    }

    .login-button:hover {
        background-color: #16a085;
    }

    .pesan {
        color: #e74c3c;
        font-size: 14px;
        margin-bottom: 10px;
    }
   </style>
</head>
<body>
    <center>
    <div class = "login-container">
    <h1>Login</h1>
        <div class="input-field">
            <p></p>
            <?php echo $this->session->flashdata('pesan')?>
            <form action="<?php echo base_url('auth/login')?>" method="POST">
                <label for="">username</label>
                <br>
                <input type="text" name="username" placeholder="username" > 
            <p></p> 
                <label for="">Password</label>
            <br>
            <input type="password" name="password" placeholder="password" >
            <p></p>
            <p>Belum punya akun?<?= anchor(site_url('user/registrasi'), 'Registrasi') ?></p>
            <p></p>
            <button type="submit" class = "login-button">LogIn</button>
        </div>
        </div>
    </center>
</body>
</html>