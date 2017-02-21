<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Table Style</title>
    <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <style>
        body {
            background-color: #3e94ec;
            font-family: "Roboto", helvetica, arial, sans-serif;
            font-size: 16px;
            font-weight: 400;
            text-rendering: optimizeLegibility;
        }

        div.table-title {
            display: block;
            margin: auto;
            max-width: 600px;
            padding:5px;
            width: 100%;
        }

        .table-title h3 {
            color: #fafafa;
            font-size: 30px;
            font-weight: 400;
            font-style:normal;
            font-family: "Roboto", helvetica, arial, sans-serif;
            text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
            text-transform:uppercase;
        }

        .myButton {
            background-color:#44c767;
            -moz-border-radius:17px;
            -webkit-border-radius:17px;
            border-radius:17px;
            border:2px solid #18ab29;
            display:inline-block;
            cursor:pointer;
            color:#ffffff;
            font-family:Times New Roman;
            font-size:25px;
            font-weight:bold;
            padding:16px 31px;
            text-decoration:none;
            text-shadow:0px 1px 0px #2f6627;
        }
        .myButton:hover {
            background-color:#5cbf2a;
        }
        .myButton:active {
            position:relative;
            top:1px;
        }

        /*** Table Styles **/

        .table-fill {
            background: white;
            border-radius:3px;
            border-collapse: collapse;
            height: 320px;
            margin: auto;
            max-width: 600px;
            padding:5px;
            width: 100%;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            animation: float 5s infinite;
        }

        th {
            color:#D5DDE5;;
            background:#1b1e24;
            border-bottom:4px solid #9ea7af;
            border-right: 1px solid #343a45;
            font-size:23px;
            font-weight: 100;
            padding:24px;
            text-align:left;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            vertical-align:middle;
        }

        th:first-child {
            border-top-left-radius:3px;
        }

        th:last-child {
            border-top-right-radius:3px;
            border-right:none;
        }

        tr {
            border-top: 1px solid #C1C3D1;
            border-bottom-: 1px solid #C1C3D1;
            color:#666B85;
            font-size:16px;
            font-weight:normal;
            text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
        }

        tr:hover td {
            background:#4E5066;
            color:#FFFFFF;
            border-top: 1px solid #22262e;
            border-bottom: 1px solid #22262e;
        }

        tr:first-child {
            border-top:none;
        }

        tr:last-child {
            border-bottom:none;
        }

        tr:nth-child(odd) td {
            background:#EBEBEB;
        }

        tr:nth-child(odd):hover td {
            background:#4E5066;
        }

        tr:last-child td:first-child {
            border-bottom-left-radius:3px;
        }

        tr:last-child td:last-child {
            border-bottom-right-radius:3px;
        }

        td {
            background:#FFFFFF;
            padding:20px;
            text-align:left;
            vertical-align:middle;
            font-weight:300;
            font-size:18px;
            text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
            border-right: 1px solid #C1C3D1;
        }

        td:last-child {
            border-right: 0px;
        }

        th.text-left {
            text-align: left;
        }

        th.text-center {
            text-align: center;
        }

        th.text-right {
            text-align: right;
        }

        td.text-left {
            text-align: left;
        }

        td.text-center {
            text-align: center;
        }

        td.text-right {
            text-align: right;
        }
    </style>
</head>

<body>
<?php $max=0;
      $maxt=0;
?>
<div class="table-title">
    <h3>Final Scores</h3>
</div>
<table class="table-fill">
    <thead>
    <tr>
        <th class="text-left">Team</th>
        <th class="text-left">Points</th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <tr>
        <td class="text-left">Team 1</td>
        <td class="text-left">
            <?php
                if($team1>$max) {
                    $max = $team1;
                    $maxt = 1;
                }
                echo $team1;
            ?>
        </td>
    </tr>
    <tr>
        <td class="text-left">Team 2</td>
        <td class="text-left">
            <?php
            if($team2>$max) {
                $max = $team2;
                $maxt = 2;
            }
            echo $team2;
            ?>
        </td>
    </tr>
    <tr>
        <td class="text-left">Team 3</td>
        <td class="text-left">
            <?php
            if($team3>$max) {
                $max = $team3;
                $maxt = 3;
            }
            echo $team3;
            ?>
        </td>
    </tr>
    <tr>
        <td class="text-left">Team 4</td>
        <td class="text-left">
            <?php
            if($team4>$max) {
                $max = $team4;
                $maxt = 4;
            }
            echo $team4;
            ?>
        </td>
    </tr>
    <tr>
        <td class="text-left">Team 5</td>
        <td class="text-left">
            <?php
            if($team5>$max) {
                $max = $team5;
                $maxt = 5;
            }
            echo $team5;
            ?>
        </td>
    </tr>
    <tr>
        <td class="text-left">Team 6</td>
        <td class="text-left">
            <?php
            if($team6>$max) {
                $max = $team6;
                $maxt = 6;
            }
            echo $team6;
            ?>
        </td>
    </tr>
    <tr>
        <td class="text-left">Team 7</td>
        <td class="text-left">
            <?php
            if($team7>$max) {
                $max = $team7;
                $maxt = 7;
            }
            echo $team7;
            ?>
        </td>
    </tr>
    <tr>
        <td class="text-left">Team 8</td>
        <td class="text-left">
            <?php
            if($team8>$max) {
                $max = $team8;
                $maxt = 8;
            }
            echo $team8;
            ?>
        </td>
    </tr>
    </tbody>
</table>
<a href="<?php echo base_url();?>index.php/Winner/index/<?php echo $maxt;?>" class="myButton">And the Winner is ..... </a>
</body>
</html>