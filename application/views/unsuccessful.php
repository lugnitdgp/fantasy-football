<!doctype html>
<html>
<head>
    <link href='<?php echo base_url();?>css/mybutton.css' rel='stylesheet' type='text/css'>
    <style>
        .container{
            position: fixed;
            top: 100px;
            left: 450px;
            text-align:center;
            
            color: red;
            font-size: 30px;
            font-style: normal;
            padding-top:50px;
            width:500px;
            height:300px;
            margin: 20px 5px;
            z-index: 0;
        }
        body {
            background:url("<?php echo base_url();?>images/sliderimage.jpg") no-repeat center center fixed #000;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: 100% 100%;
            opacity:0.9;
        }
        .myButton{
            position:absolute;
            left:40px;
            bottom:20px;
            color:red;
        }
        .team{
            position:absolute;
            left:310px;
            bottom:0px;
            color: green;
        }
    </style>
</head>
<body>
<div class="container">
    <h1>Penalty</h1>
    <a href="<?php echo base_url();?>index.php/Select" class='myButton'>BACK</a>
    <div class='team'><a href="<?php echo base_url();?>index.php/Teams" class='myButton'>TEAMS</a></div>
</div>
</body>
</html>