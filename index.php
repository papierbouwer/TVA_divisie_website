<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="nl" http-equiv="Content-Language">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/normalize.css">
        <link rel="stylesheet" type="text/css" href="css/main.css">
        <title>TVA divisie Triathlon</title>
    </head>
    <body>
        <?php

        if(!isset($_GET['test']))
        {
            echo "<h1>TVA divisie Triathlon</h1><p>Op deze website komt over een korte tijd alles over het divisie-team van TVAlmere. <br><a href=\"http://tvalmere.nl\">Terug naar TVAlmere.nl</a></p>";
        } else
        {
        ?>
        <div class="container">
            <header>
                <div class="afbeelding">
                    <img src="http://placehold.it/1400x300">
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li>
                            <a href="./?nieuws">Nieuws</a>
                        </li>
                        <li>
                            <a href="./?teams=overzicht">Teams</a>
                            <ul>
                                <li>
                                    <a href="./?teams=eredivisie">Eredivisie</a>
                                </li>
                                <li>
                                    <a href="./?teams=1edivisie">1eDivisie</a>
                                </li>
                                <li>
                                    <a href="./?teams=2edivisie">2eDivisie</a>
                                </li>
                                <li>
                                    <a href="./?teams=3edivisie">3eDivisie</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="./?sponsoren">Sponsoren</a>
                        </li>
                        <li>
                            <a href="http://tvalmere.nl">TV Almere</a>
                        </li>
                    </ul>
                </nav>
            </header>
            <article>
            </article>
            <aside>
            </aside>
            <div class="advertenties">
            </div>
            <footer>
                &copy; 2016 - <?=date("Y");?> Erik Baalbergen
            </footer>
        </div>
        <?php
        }
        ?>


    </body>
</html>
