<!DOCTYPE html>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/radio.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/b.css">

    <style>
        p.small {
            line-height: 40%;
        }
    </style>
    <style>
        body {
            background: url(<?php echo base_url();?>images/teamspage.jpg) no-repeat center center fixed #000;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: 100% 100%;
           
        }
        .over{
            position:absolute;
            bottom: 10px;
            right:10px;
        }
    </style>
    <link rel="stylesheet" href="<?php echo base_url();?>css/button.css">
</head>
<body>
<?php
    echo "<h1><div align='center'><font color='white'>" . $query->row()->name . "</font></div></h1>";
    echo "<h3><div align='center'><font 400% color='white'> Base Price : " . $query->row()->price . "</font></div></h3>";
?>

<h3><font color='#A7FFE1'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select the Team</font></h3>
<p>
<form action="<?php echo base_url();?>index.php/Buy/index/<?php echo $query->row()->id?>" method="post">
    <?php

    for($i=1;$i<9;$i++)
    {
        echo"<div><input type='radio' name='tid' id='$i' class='radio' value='$i' required/><label for='$i'>Team $i</label></div></br>";
    }
    ?>

</p>
<DIV class="container">
    <p align="center">
        <section class="webdesigntuts-workshop">
            <form action="<?php echo base_url();?>index.php/Buy/index<?php echo $query->row()->id?>" method="POST">
                <input type="number" min="<?php echo $query->row()->price; ?>" name="pri" placeholder="Final Price..." required>
                <button>Buy Now</button>
            </form>
        </section>
</DIV>
</p>
<div class="over"><p><button><a href="<?php echo base_url();?>index.php/Select" style="color:white">BACK</a></button></p>;</div>
</body>
</html>

