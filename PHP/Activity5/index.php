<!DOCTYPE html>
<html>
    <head>
        <title>Bootstrap | Activity 5</title>	
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/jquery.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </head>

    <body>
        <h1>Activity 5</h1>
                
        <div class="container">
            <ul class="list-inline"><!--Popover-->
                <li><a href="#" data-toggle="popover" data-placement="top" title="Top popover" data-content="Some content here in popover">Top</a></li>
                <li><a href="#" data-toggle="popover" data-placement="bottom" title="Bottom popover" data-trigger="focus" data-content="Some content here in popover">Bottom</a></li>
                <li><a href="#" data-toggle="popover" data-placement="left" title="Left popover" data-trigger="hover" data-content="Some content here in popover">Left</a></li>
                <li><a href="#" data-toggle="popover" data-placement="right" title="Right popover">Right</a></li>
            </ul>

            <ul class="list-inline"><!--Tool Tip-->
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Top Tool Tip">Top</a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="bottom" title="Bottom Tool Tip">Bottom</a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="left" title="Left Tool Tip">Left</a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="right" title="Right Tool Tip">Right</a></li>
            </ul>
        </div>
        <script>
            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();
                $('[data-toggle="popover"]').popover();
            });
        </script>

        <br><hr><br>

        <!--Carousel-->
        <div class="container">
            <div id="mycarousel" class="carousel slide" data-ride="carousel" style="width: 1000px">
                <ol class="carousel-indicators">
                    <li data-target="#mycarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="1" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="2" class="active"></li>
                    <li data-target="#mycarousel" data-slide-to="3" class="active"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="pic/Final hd.jpg" >
                        <div class="carousel-caption">
                            <h3>Featured Art 2020</h3>
                            <p>My first digital art</p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="pic/Close Your Eyes (March 1, 2021).jpg">
                        <div class="carousel-caption">
                            <h3>Featured Art 2021</h3>
                            <p>My first digital art using mobile phone</p>
                        </div>
                    </div>
                    <div class="item" >
                        <img src="pic/My Heart 1.jpg">
                        <div class="carousel-caption">
                            <h3>Featured Art 2021</h3>
                            <p>Replicating concept art of Kingdom Hearts</p>
                        </div>
                    </div>
                    <div class="item" >
                        <img src="pic/march 2.jpg">
                        <div class="carousel-caption">
                            <h3>Featured Art 2022</h3>
                            <p>A self-gift for my birthday</p>
                        </div>
                    </div>

                    <a class="left carousel-control" href="#mycarousel" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#mycarousel" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>
        </div>

        <br><hr><br>

        <!--Modal-->
        <div class="container">
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal">Open Modal Box</button>
            
            <div class="modal fade" id="myModal" >
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button class="close" data-dismiss="modal">&times; </button>
                            <h4>This is my modal header</h4>
                        </div>

                        <div class="modal-body">
                            <p>
                                Your viewing this text in a modal content
                            </p>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-info" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
</html>