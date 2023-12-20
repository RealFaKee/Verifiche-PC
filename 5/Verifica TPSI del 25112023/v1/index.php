<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        button, #tornaAlForm{
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
        h1{
            text-align: center;
        }
        p{
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    include "servizi.php";
    
    if(isset($_POST["invioForm"])){
        echo '<h1>Riepilogo</h1>';
        $ore = $_POST['Ore'] ?? 0;
        $PostoServizio = $_POST['Servizi'] ?? 0 ;
        if($PostoServizio==0){
            echo '<p style="color : red">Scegli il servizio</p>';
        }
        else{
        if($ore!=null){   echo "<p>Ore: " . $ore . "</p>";    }
        else{   echo '<p style="color : red">Ore: NON INSERITE</p>';   }
    
        $SerivizioScelto = $servizi[$PostoServizio][0];
    
        if($PostoServizio!=null){ echo "<p>Servizio: " . $SerivizioScelto . "</p>";   }
        else{   echo '<p>Servizio: Non inserito</p>';  }
        $SerivizioScelto = $servizi[$PostoServizio][0];
    
        if($ore<$servizi[$PostoServizio][1]){
            echo "<p>Il numero di ore acquistato è inferiore al minimo consentito: 
            non è possibile procedere con l'acquisto</p><p>Il minimo è di ore è: " .$servizi[$PostoServizio][1] . "</p>";
        }
        else{
            $costo = $ore * $servizi[$PostoServizio][2];
            echo "<p>Il costo complessivo dell'acquisto è: " . $costo . "€</p>";
        }
    }
        echo '<form action="form.php">
        <div>
            <input type="submit" value="Torna al form" id="tornaAlForm">
        </div>
    </form>';
    }
    else{
        include "form.php";
    }
    // $ore = $_POST['Ore'] ?? 0;
    // $PostoServizio = $_POST['Servizi'] ?? 0 ;
    // if($ore!=null){   echo "<p>Ore: " . $ore . "</p>";    }
    // else{   echo '<p>Ore: Non inserite</p>';   }

    // $SerivizioScelto = $servizi[$PostoServizio][0];

    // if($PostoServizio!=null){ echo "<p>Servizio: " . $SerivizioScelto . "</p>";   }
    // else{   echo '<p>Servizio: Non inserito</p>';  }
    // $SerivizioScelto = $servizi[$PostoServizio][0];

    // if($ore<$servizi[$PostoServizio][1]){
    //     echo "<p>Il numero di ore acquistato è inferiore al minimo consentito: 
    //     non è possibile procedere con l'acquisto</p>";
    // }
    // else{
    //     $costo = $ore * $servizi[$PostoServizio][2];
    //     echo "<p>Il costo complessivo dell'acquisto è: " . $costo . "€</p>";
    // }
?>
    <!-- <form action="form.php">
        <div>
            <button>Torna al form</button>
        </div>
    </form> -->
</body>
</html>

