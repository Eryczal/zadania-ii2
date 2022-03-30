<!DOCTYPE html>
<html lang="pl">
	<head>
		<title>{$page_title|default:"tytuł"}</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <meta name="description" content="{$page_description|default:"opis"}" />
		<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="{$conf->app_url}/assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">
        {block name=content} Domyślna treść zawartości .... {/block}

        <script src="{$conf->app_url}/assets/js/jquery.min.js"></script>
        <script src="{$conf->app_url}/assets/js/jquery.scrollex.min.js"></script>
        <script src="{$conf->app_url}/assets/js/jquery.scrolly.min.js"></script>
        <script src="{$conf->app_url}/assets/js/browser.min.js"></script>
        <script src="{$conf->app_url}/assets/js/breakpoints.min.js"></script>
        <script src="{$conf->app_url}/assets/js/util.js"></script>
        <script src="{$conf->app_url}/assets/js/main.js"></script>
    </body>
</html>