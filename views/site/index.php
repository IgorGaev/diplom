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
    <section class="cd-faq">
        <ul class="cd-faq-categories">
            <?php foreach($categoryList as $categoryItem):?>
            <li><a class="selected" href="/cat/<?=$categoryItem['id']?>">
                    <?=$categoryItem['catName']?></a></li>
            <?php endforeach;?>
        </ul> <!-- cd-faq-categories -->

        <div class="cd-faq-items">

        <?php foreach($categoryList as $categoryItem):?>
            <?php foreach($questionsListById as $questionsListItem):?>
            <ul id="<?=$categoryItem['id']?>" class="cd-faq-group">
                <li class="cd-faq-title"><h2><?=$categoryItem['catName']?></h2></li>
                <li>
                    <a class="cd-faq-trigger" href="/quest/<?=$questionsListItem['id']?>">
                    <?=$questionsListItem['question']?></a>
                    <div class="cd-faq-content">
                        <p><?=$questionsListItem['answer']?></p>
                    </div> <!-- cd-faq-content -->
                </li>			
                <?php endforeach; ?>
            </ul> <!-- cd-faq-group -->
        <?php endforeach; ?>

        </div> <!-- cd-faq-items -->
        <a href="#0" class="cd-close-panel">Close</a>
    </section> <!-- cd-faq -->
    <script src="template/js/jquery-2.1.1.js"></script>
    <script src="template/js/jquery.mobile.custom.min.js"></script>
    <script src="template/js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>

