<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <script charset="utf-8" src="//apps.aviakassa.ru/partner.form.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.0.min.js" integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="./css/style.css" media="screen" />
        
    </head>
    <body>
        <div class="search-form">
            <div id="ak-app-7c578f4834a92"></div>
        </div>
        
    </body>
    <script>
        new Aviakassa.Form(
            "ak-app-7c578f4834a92", {
                "client_key":579501,
                "utm_source":"7c578f4834a92",
                "showTitle":0,
                "showAviakassaLogo":0,
                "showLocaleSelect":0,
                "showCurrencySelect":0,
                "locales":["ru_RU","en_US"],
                "aviaShowComplexRoute":0
            })
    </script>
    <script>
        $(document).ready(function(){
            $('.ak-app-7c578f4834a92 iframe').ready(function(){
                $('.akf-AviaSearchForm__Field--from').css('width', '500');
            });
        });
        </script>
</html>
