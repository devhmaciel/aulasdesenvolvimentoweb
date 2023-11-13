<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
        .calculadora{
            margin:0 auto;
            padding: 1em;
            width: 300px;
            background: #018d01;
            border-radius:16px;
            box-shadow: 0px 10px 0.938rem -3px rgba(0, 0, 0, 0.1);

        }

        input[type="number"], input[type="submit"]{
            margin: 5px;
            padding:10px;
            width: 80%;
            border-radius:8px;
            border:1px solid;

        }

        input[type="submit"]{
            background:#E59832;
            width:97%;

        }

        input[type="submit"]:hover{

        }

    </style>
</head>
<body>
    <div class="calculadora">
        <h1>calculadora php</h1>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

            <input type="number" name = "num1" placeholder="Number 1" required>
            <input type="number" name = "num2" placeholder="Number 2" required>

            <select name="operation" id="">
                <option value="add">Adição</option>
                <option value="sub">Subtração</option>
                <option value="mult">Multiplicação</option>
                <option value="div">Divisão</option>



            </select>
            <input type="submit" value="Calcular" name="submit">


        </form>
        <?php
            if(isset($_POST['submit'])){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $op = $_POST['operation'];
                $result= '';
                $ok= true;

                switch($op){
                    case 'add':
                    $result = $num1 + $num2;
                    break;
                    case 'sub':
                    $result= $num1- $num2;
                    break;
                    case 'mult':
                    $result = $num1 * $num2;
                    break;
                    case 'div':
                        if($num2==0){
                            $ok=false;
                        }
                        else{
                            $result = $num1/$num2;
                        }
                        break;

                }
                if($ok){
                    echo"<p>Resultado: $result</P>";
                }
                else{
                    echo"<p>Impossivel dividir por zero!</p>";
                }
            }
        ?>
    </div>
    
</body>
</html>