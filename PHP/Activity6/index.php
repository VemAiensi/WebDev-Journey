<!DOCTYPE html>
<html>
    <head>
        <title>Scroll Spy</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      
        <!-- Optional theme -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        
        <script
            src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

        <style>
            section{
                width:100vw;
                height: 100vw;
                padding-top: 50px;
            }
            h1 {
                padding: 0;
                margin: 0;
                color: white;
            }
        </style>
    </head>
    <body data-spy="scroll" data-target=".navbar">
        <nav class="navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav">
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#products">PRODUCTS</a></li>
                <li><a href="#contact">CONTACT US</a></li>
            </ul>
        </nav>

        <nav class="navbar navbar-inverse navbar-fixed-bottom">
            <ul class="nav navbar-nav">
                <li><a href="#home">HOME</a></li>
                <li><a href="#about">ABOUT</a></li>
                <li><a href="#products">PRODUCTS</a></li>
                <li><a href="#contact">CONTACT US</a></li>
            </ul>
        </nav>

        <section id="home" style="background-color: green;">
            <h1>HOME</h1>
        </section>

        <section id="about" style="background-color: blue;">
            <h1>ABOUT US</h1>
        </section>

        <section id="products" style="background-color: gray;">
            <h1>PRODUCTS</h1>
        </section>

        <section id="contact" style="background-color: yellow;">
            <h1>CONTACT US</h1>
        </section>

    </body>
</html>