<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ich, Geiser</title>
        <style>
            body {
                background-color: black;
            }
            .bigcenter {
                font-size: 20vh;
                width: auto;
                height: auto;
                padding: 10vh;
                margin: 2vh;
                color: beige;
                text-align: center;
                font-family: "Garamond", sans-serif;
            }
            .smallcenter {
                font-size: 5vh;
                color: beige;
                text-decoration: none;
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js">
        </script>
        <script>
        $(document).ready(function(){
            $("#k1,#k2,#k3").each(function() {
                $(this).fadeTo("slow", 0.4);
            });
            
            $("#k1,#k2,#k3").each(function(){
                $(this).hover(function() {
                $(this).fadeTo("fast", 1);
            }, function() {
                $(this).fadeTo("fast", 0.4);
                });
            });
        });
        </script>
    </head>
    <body>
        <div class="bigcenter">
            ICH, GEISER
            <br>
            
                <a id="k1" href="kap1.php" class="smallcenter"><p>Der Mensch erscheint im Tal</p></a>
                <p id="k2" class="smallcenter"><s>Flucht und Umkehr</s></p>
                <p id="k3" class="smallcenter"><s>Wahnsinn</s></p>
                <p class="smallcenter"><br>Kapitel 2 und 3 im Bau</p>
            
        </div>
    </body>
</html>
