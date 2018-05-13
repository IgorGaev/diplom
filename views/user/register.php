<!doctype html>
<html lang="en" class="no-js">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="template/css/reset.css"> <!-- CSS reset -->
        <link rel="stylesheet" href="template/css/style.css"> <!-- Resource style -->
        <script src="template/js/modernizr.js"></script> <!-- Modernizr -->
        <title>FAQ</title>
    </head>
    <body>
        <header>
            <h1>FAQ</h1>
        </header>
        <section>
            <?php if ($result): ?>
                    <p>Вы зарегистрированы!</p>
                    <a href="/list">Войти</a>
            <?php else: ?>
            <?php if (isset($errors) && is_array($errors)): ?>
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> - <?php echo $error; ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
            <div ><!--sign up form-->
                <h2>Регистрация на сайте</h2>
                <form action="#" method="post">
                    <input type="text" name="name" placeholder="Имя" />
                    <input type="email" name="email" placeholder="E-mail"/>
                    <input type="submit" name="submit" class="btn btn-default" value="Регистрация" />
                </form>
            </div><!--/sign up form-->
            <?php endif; ?>    
            <br/>
            <br/>
        </div>
    </section>

    <script src="template/js/jquery-2.1.1.js"></script>
    <script src="template/js/jquery.mobile.custom.min.js"></script>
    <script src="template/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>


