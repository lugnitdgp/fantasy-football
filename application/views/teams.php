<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Perspective Page View Navigation</title>
    <meta name="description" content="Perspective Page View Navigation: Transforms the page in 3D to reveal a menu" />
    <meta name="keywords" content="3d page, menu, navigation, mobile, perspective, css transform, web development, web design" />
    <meta name="author" content="Codrops" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/normalize.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/demo.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/component.css" />
    <!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load -->
    <script src="<?php echo base_url();?>js/modernizr.custom.25376.js"></script>
    <style>
        .outer-nav{
            font-size: 100%;
        }
    </style>
</head>
<body>
<div id="perspective" class="perspective effect-rotateleft">
    <div class="container">
        <div class="wrapper"><!-- wrapper needed for scroll -->
            <!-- Top Navigation -->
            <header class="codrops-header">
                <h1><?php
                        if($team==0)
                            echo "Select Team<span>To show details</span>";
                        else
                        {
                            echo "Team $team<span>Details</span>";
                        }
                    ?>
                </h1>
            </header>
            <div class="main clearfix">
                <div class="column">
                    <p><button id="showMenu">Show teams / Go Back</button></p>
                    <p>
                        <?php
                            if($team!=0)
                            {
                                echo "Goalkeepers:".$tquery->row()->goalkeeper;
                                echo "<br>Defenders:".$tquery->row()->defender;
                                echo "<br>Midfielders:".$tquery->row()->midfielder;
                                echo "<br>Strikers:".$tquery->row()->striker;
                                echo "<br>Budget left:".$tquery->row()->budget;
                                echo "<br>Marquee Player:".$tquery->row()->marquee;
                                echo "<br>Penalties:".$tquery->row()->penalty;

                            }
                        ?>
                    </p>
                </div>
                <div class="column">
                    <nav class="codrops-demos">
                        <?php
                            if($team!=0)
                            {
                                foreach($pquery->result() as $row)
                                {
                                    echo '<a href="#">'.$row->name.'</a>';
                                }
                            }
                        ?>
                    </nav>
                </div>
            </div><!-- /main -->
        </div><!-- wrapper -->
    </div><!-- /container -->
    <nav class="outer-nav right vertical">
        <a href="<?php echo base_url();?>index.php/Teams/show_teams/1" >Team 1</a>
        <a href="<?php echo base_url();?>index.php/Teams/show_teams/2" >Team 2</a>
        <a href="<?php echo base_url();?>index.php/Teams/show_teams/3" >Team 3</a>
        <a href="<?php echo base_url();?>index.php/Teams/show_teams/4" >Team 4</a>
        <a href="<?php echo base_url();?>index.php/Teams/show_teams/5" >Team 5</a>
        <a href="<?php echo base_url();?>index.php/Teams/show_teams/6" >Team 6</a>
        <a href="<?php echo base_url();?>index.php/Teams/show_teams/7" >Team 7</a>
        <a href="<?php echo base_url();?>index.php/Teams/show_teams/8" >Team 8</a>
        <a href="<?php echo base_url();?>index.php/Select" style="color: #0b1319">Go Back</a>
        <a href="<?php echo base_url();?>index.php/Captain" style="color: #0b1319">Finish</a>
    </nav>
</div><!-- /perspective -->
<script src="<?php echo base_url();?>js/classie.js"></script>
<script src="<?php echo base_url();?>js/menu.js"></script>
</body>
</html>