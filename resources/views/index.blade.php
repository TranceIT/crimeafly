<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css" media="screen" />
        <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">

        <script charset="utf-8" src="//apps.aviakassa.ru/partner.form.js"></script>
        <script charset="utf-8" src="//apps.aviakassa.ru/partner.bestprice.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.0.min.js" integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I=" crossorigin="anonymous"></script>
        <script type="text/javascript" src='./js/widget.js'></script>
    </head>
    <body>
        <div class="top">
            <div class="main-wrapper wrapper-top">
                <div class="top-container">
                    <img src="./img/crimeafly-logo.png">
                    <span class="name blue">Crimea</span><span class="name darkblue">Sky</span>
                    <div class="top-menu">
                        <ul>
                            <li><a href="/get-to-simferopol/">Путь в Симферополь</a></li>
                            <li><a href="#">Авиабилеты</a></li>
                            <li><a href="/i-want-to-crimea/">Хочу в Крым!</a></li>
                            <li><a href="#">Подробно</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-block">
            <div class="main-wrapper">
                <div class="search-form">
                    <div id="ak-app-7c578f4834a92"></div>
                </div>
            </div>
        </div>
        <div class="best-price">
            <div class="main-wrapper">
                <div id="ak-app-33ac922c8207e"></div>
            </div>
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
                "aviaShowComplexRoute":0,
                "redirectToResultPage":1,
                "aviaDefaultFrom":{
                    "ccode":"ru",
                    "iata":"SIP",
                    "country":"Россия",
                    "value":"Симферополь"
                },
                "buttonExtraBgColor": "#44b3ff",
                "buttonPrimaryHoverBgColor": "#44b3ff",
                "buttonPrimaryActiveBgColor":"#44b3ff",
            })
    </script>
    <script>
        new Aviakassa.Bestprice(
            "ak-app-33ac922c8207e",{
                "client_key":579501,
                "utm_source":"33ac922c8207e",
                "routes":[{
                    "from":{
                        "ccode":"ru",
                        "iata":"SIP",
                        "country":"Россия",
                        "value":"Симферополь"
                    },"to":{
                        "ccode":"ru",
                        "iata":"MOW",
                        "country":"Россия",
                        "value":"Москва"
                    }
                }],
                "buttonBgColor":"#44b3ff",
                "buttonHoverBgColor":"#44b3ff",
                "buttonActiveBgColor":"#44b3ff",
            }
        )
    </script>
</html>
