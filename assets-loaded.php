
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <script src="resources/js/jquery-2.1.3.min.js"></script>
        <script src="resources/js/components/jquery.html5Loader.min.js"></script>
        <style type="text/css">
            html, body {
                background-color: #beae8c;
            }

        </style>
    </head>
    <body>

        <script type="text/javascript">
            //var loaderAnimation = $("#html5Loader").LoaderAnimation();
            $.html5Loader({filesToLoad: 'files.json',
                //onUpdate: loaderAnimation.update,
                onUpdate: function () {
                    console.log("Assets updated!");
                },
                onElementLoaded: function () {
                    /* $("body").fadeOut(function () {*/
                    console.log("Assets loaded!");
                    window.location.href = "pages/home.php"
                        /*}) */ ;
                },
                onMediaError: function () {
                    console.log("wtf!");
                },
                debugMode: true
            });
        </SCRIPT>
    </body>
</html>



