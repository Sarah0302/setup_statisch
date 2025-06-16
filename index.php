<!doctype html>
<html lang="de">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="./assets/js/jquery-3.7.1.min.js"></script>
        <script src="./assets/js/main.js"></script>
        <link rel="stylesheet" href="./assets/css/main.css">
        <link rel="stylesheet" href="./assets/css/flexboxgrid.min.css">
            <!-- favicon -->
        <title>Setup</title>
    </head>
<body>
    <?php require_once 'components/base/header.php'; ?>
    <?php require_once 'components/page/home.php'; ?> <!-- Hier die passende page laden -->
    <?php require_once 'components/base/footer.php'; ?>
<!-- Für gulp -->
<script id="__bs_script__">//<![CDATA[
  (function() {
    try {
      var script = document.createElement('script');
      if ('async') {
        script.async = true;
      }
      script.src = 'http://HOST:3000/browser-sync/browser-sync-client.js?v=3.0.4'.replace("HOST", location.hostname);
      if (document.body) {
        document.body.appendChild(script);
      } else if (document.head) {
        document.head.appendChild(script);
      }
    } catch (e) {
      console.error("Browsersync: could not append script tag", e);
    }
  })()
//]]></script>
</body>
</html>