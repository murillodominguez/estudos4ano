<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/calcprag.css">
    <title>Document</title>
</head>
<body>
    <header>
        <h1>Site da calculadora bhaskaronica</h1>
    </header>
    <div class="container">
        <div class="head">
            <h1>calculadora bhaskaronica</h1>
            <h1><a href="calcprag">calculadora afuzel!</a></h1>
        </div>
        <form action="" method="post">
            <div class="inputAB">
                <div class="show2">
                <label for="inputA">Variável A</label>
                </div>
                <div class="show">
                <input type="text" name="a" id="inputA">
                </div>
                <label for="inputB">Variável B</label>
                <input type="text" name="b" id="inputB">
                <label for="inputC">Variável C</label>
                <input type="text" name="c" id="inputC">
                <script>
                    equation = document.createElement('div');
                    equation.setAttribute('class','equation');
                    equation.setAttribute('id','equation');
                    eqlabel = document.createElement('label');
                    eqlabel.setAttribute('for','equation');
                    eqlabel.innerHTML = "Equação";
                    show = document.querySelector('.show');
                    show2 = document.querySelector('.show2');
                    show.appendChild(equation);
                    show2.appendChild(eqlabel);
                    aElement = document.createElement('span');
                    bElement = document.createElement('span');
                    cElement = document.createElement('span');
                    equation.appendChild(aElement);
                    equation.appendChild(bElement);
                    equation.appendChild(cElement);
                    a = document.getElementById('inputA');
                    b = document.getElementById('inputB');
                    c = document.getElementById('inputC');
                    a.addEventListener('change', (event) =>{
                        aElement.innerHTML = (!isNaN(Number(a.value)))?(Number(a.value)+'x²'):"";
                    })
                    b.addEventListener('change', (event) =>{
                        bElement.innerHTML = ((Number(b.value) > 0)?' + ':' ')+Number(b.value)+'x';
                    })
                    c.addEventListener('change', (event) =>{
                        cElement.innerHTML = ((Number(c.value) > 0)?' + ':' ')+Number(c.value);
                    })
                </script>
            <!-- <label for="operatorSelect">Operação</label>
            <select name="operator" id="operatorSelect">
                <option value="add">Adição</option>
                <option value="sub">Subtração</option>
                <option value="mult">Multiplicação</option>
                <option value="divide">Divisão</option>
                <option value="potencia">Potenciação</option>
            </select> -->
            <button type="submit" name="envio">Enviar</button>
            </div>
        </form>
        <?php
            if(isset($_POST['envio'])){
                function dataValidationInput($data){
                    if(!isset($data) && $data == null){
                        return false;
                    }
                    if(!is_numeric($data)){
                        return false;
                    }
                    return true;
                }
                if(dataValidationInput($_POST['a']) && dataValidationInput($_POST['b'])){
                $operator = $_POST['operator'];
                $a = $_POST['a'];
                $b = $_POST['b'];
                switch($operator){
                    case "add":
                        $op = "+";
                        $result = $a + $b;
                        break;
                    case "sub":
                        $op = "-";
                        $result = $a - $b;
                        break;
                    case "mult":
                        $op = "x";
                        $result = $a * $b;
                        break;
                    case "divide":
                        $op = "/";
                        $result = $a / $b;
                        break;
                    case "potencia":
                        $op = "^";
                        $result = $a ** $b;
                        break;
                }
                echo "
                
                <div class='resultado'>
                    <h1>O resultado de ".$a." ".$op." ".$b." é ".$result."</h1>
                </div>
                ";
            }
        }
        ?>
    </div>
</body>
</html>