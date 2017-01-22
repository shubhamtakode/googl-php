<!DOCTYPE html>
<!--  AIzaSyCgTPXfCDTogjF36To3FqXrUQP5UyJQyAg-->
<html lang="en">
<head>
    <title>Tiny Google URL Shortener</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Tiny Google URL Shortener is use to create short URLs that can be easily shared, tweeted, or emailed to friends. It uses Google URL Shortner API">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body style=" text-shadow: 0 2px 5px rgba(0,0,0,.26);   background-color: #00bcd4;">
<div class="container" style="  box-shadow: 0 2px 5px rgba(0,0,0,.26);     border-radius: 15px;   margin-top: 4%; background: white">
    <header class="navbar-header">
        <div class="col-xs-12">
            <h1 style="font-weight: bolder; font-size: 50px;">Tiny Google URL Shortener</h1>
            <span>
                <p style="padding: 9px;">Tiny Google URL Shortener is use to create short URLs that can be easily shared, tweeted, or emailed to friends. It uses Google URL Shortner API to create short URLs</p>
            </span>
        </div>
    </header>
    <div class="clearfix" style="margin-bottom: 50px;"></div>
    <div class="col-xs-10 col-xs-offset-1">
        <form action="index.php" method="POST">
            <?php if(isset($short_url)) { ?>
                <div class="form-group col-xs-12">
                    <label>Generated Short URL : </label>
                    <a href="<?php echo $short_url; ?>" target="new"><?php echo $short_url; ?></a>
                </div>
            <?php } ?>

            <div class="form-group col-xs-11">
                <label for="url">Enter Long URL</label>
                <input type="url" value="<?php echo $POST[(string)$_SESSION['form_field_name']]; ?>"name="<?php echo $_SESSION['form_field_name']; ?>" class="form-control" id="url" placeholder="http://example.com">
            </div>
            <div class="form-group col-xs-12">
                <button type="submit" class="btn btn-default">Get Short URL</button>
            </div>
        </form>
    </div>
    <div class="col-xs-12">
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <!-- inrupy -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-0605139645921868"
             data-ad-slot="8253182131"
             data-ad-format="auto"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    <div class="col-xs-12">
            <label class="pull-right">Powered By Google APIs. &copy; All Rights are Reserved.</label>
    </div>
</div>
</body>
</html>