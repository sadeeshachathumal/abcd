<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body class="signin-body">

    <!-- Reset Password -->
    <div class="signin-box" id="signin-box">
        <h1 class="text-center">Reset Password</h1>

        <div class="d-none">
            <input type="hidden" id="vcode" value="<?php echo($_GET["vcode"]); ?>"/>
        </div>

        <div class="mt-2">
            <label for="form-label">Password</label>
            <input type="password" class="form-control" id="np" />
        </div>
        <div class="mt-2 mb-2">
            <label for="form-label">Re-enter Password</label>
            <input type="password" class="form-control" id="np2" />
        </div>
        <div class="d-none" id="msgDiv2">
            <div class="alert alert-danger" id="msg2"></div>
        </div>
        <div class="mt-2">
            <button class="btn btn-secondary col-12" onclick="resetPassword();">Update</button>
        </div>
    </div>
    <!-- Reset Password -->

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>