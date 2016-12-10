<!DOCTYPE html>
<html lang="en">
    <head>
        <title>I don't care</title>
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="style.css"/>
        <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var section = document.getElementById('section');
            setTimeout(function(){ section.setAttribute("style","background-image:url('res/3.jpg');"); }, 4500);
        });
        </script>
    </head>
    <body>
        <section id="section"></section>
    </body>
</html>
