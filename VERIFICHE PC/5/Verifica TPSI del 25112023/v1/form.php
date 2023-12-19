<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button, #invioForm{
            background-color: #04AA6D;
            border: none;
            color: white;
            padding: 16px 32px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            display : block;
            margin : auto;
        }
        div{    
            margin: auto;
            padding-left: 42%

        }
        h1{
            text-align: center;
        }

    </style>
</head>
<body>
    <h1>
        Scelta del servizio
    </h1>
    <div>
    <form action="index.php" method="post">
        <Label>Serivizi:</Label><br>
        <select name="Servizi" id="Servizi">
            <?php
                include "servizi.php";
                $i=0;
                foreach($servizi as $serv){
                    echo '<option value=' . $i . '>' . $serv[0].'</option>';
                    $i++;
                }
            ?>
        </select>
        <br><Label>Ore:</Label><br>
        <input type="number" name="Ore" id="Ore" min=0>
        <br><br>
        </div>
        <input type="submit" name="invioForm" id="invioForm" value="Invia form">
        <br>
    </form>
</body>
</html>