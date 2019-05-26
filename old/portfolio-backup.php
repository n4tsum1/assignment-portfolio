<!DOCTYPE html>
<html>

<head> <?php include 'headings.html'?>
    
    <style>
        div.gallery:hover {
            opacity: 0.8;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 33.2999%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }

    </style>
</head>


<body>
    <nav><?php include 'nav.html'?></nav>


    <main>

        <div class="responsive">
            <div class="gallary">
                <a href=work-1.php><img src="img/artH.png" style="width:100%"></a>
                <h3>Interior Design Poster</h3>
                <p></p>
            </div>
        </div>

        <div class="responsive">
            <div class="gallary">
                <a href=work-2.php><img src="img/caelorum-01.png" style="width:100%"></a>
                <h3>Art Concept Poster</h3>
                <p></p>
            </div>
        </div>

        <div class="responsive">
            <div class="gallary">
                <a href=work-3.php><img src="img/chemist-1.png" style="width:100%">
                </a>
                <h3>Chemist Flyer</h3>
                <p></p>
            </div>
        </div>

        <div class="responsive">
            <div class="gallary">
                <a href=work-4.php><img src="img/vibremotion.jpg" style="width:100%"></a>
                <h3>Vibremotion</h3>
                <p></p>
            </div>
        </div>

        <div class="responsive">
            <div class="gallary">
                <a href=work-5.php><img src="img/weatherCon-3.jpg" style="width:100%"></a>
                <h3>Weather Conditioner</h3>
                <p></p>
            </div>
        </div>

        <div class="responsive">
            <div class="gallary">
                <a href=work-6.php><img src="img/lipsmacker-7.JPG" style="width:100%">
                </a>
                <h3>LipSmacker</h3>
                <p></p>
            </div>
        </div>

        <div class="responsive">
            <div class="gallary">
                <a href=work-7.php><img src="img/EMOIZA-1.PNG" style="width:100%"></a>
                <h3>EMOIZA</h3>
                <p></p>
            </div>
        </div>

        <div class="responsive">
            <div class="gallary">
                <a href=work-8.php><img src="img/lava.png" style="width:100%"></a>
                <h3>vector logo</h3>
                <p></p>
            </div>
        </div>

        <div class="responsive">
            <div class="gallary">
                <a href=work-9.php><img src="img/qca.png" style="width:100%">
                </a>
                <h3>QCA Campus Poster</h3>
                <p></p>
            </div>
        </div>

        <div class="responsive">
            <div class="gallary">
                <a href=work-10.php><img src="img/tribe-0.png" style="width:100%"></a>
                <h3>Tribe Festival Branding</h3>
                <p></p>
            </div>
        </div>

        <div class="responsive">
            <div class="gallary">
                <a href=work-11.php><img src="img/celebPoster.jpg" style="width:100%"></a>
                <h3>Media Critique Poster</h3>
                <p></p>
            </div>
        </div>

        <div class="responsive">
            <div class="gallary">
                <a href=work-12.php><img src="img/ARcard.png" style="width:100%">
                </a>
                <h3>ARcard</h3>
                <p></p>
            </div>
        </div>

        <!-- END GRID -->

    </main>

    <footer><?php include 'footer.html'?></footer>

</body>

</html>
