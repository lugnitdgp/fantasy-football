<!DOCTYPE html>
<html>
<head>
    <title>Ethos Login Form Flat Responsive widget Template :: w3layouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <meta name="keywords" content="Ethos Login Form Responsive Templates, Iphone Widget Template, Smartphone login forms,Login form, Widget Template, Responsive Templates, a Ipad 404 Templates, Flat Responsive Templates" />
    <link href="<?php echo base_url();?>css/captain_page.css" rel='stylesheet' type='text/css' />

</head>
<body>
<?php
    $teams=array(array(),array(),array(),array(),array(),array(),array(),array());
    foreach($query->result() as $row)
    {
        array_push($teams[$row->team-1],$row->name);
    }
?>

<div class="main">
    <div class="login">
        <h1>Choose Captains</h1>
        <div class="inset">
            <!--start-main-->
            <form method="post" action="<?php echo base_url();?>index.php/Result">
                <?php
                    for($i=0;$i<8;$i++)
                    {
                        echo "<div>";
                        echo "<span ><label > Team ".($i+1)." </label ></span >";
                        echo "<span>";
                        echo "<select name='team".($i+1)."'>";
                        echo "<option value='' disabled selected>Select Captain</option>";
                        foreach($teams[$i] as $val)
                        {
                            echo '<option value="'.$val.'">'.$val.'</option>';
                        }
                        echo "</select>";
                        echo "</span>";
                        echo "</div>";
                    }
                ?>
                <button type="submit" class="button">Submit</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>