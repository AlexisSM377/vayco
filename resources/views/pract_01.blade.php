<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel|DSM-53</title>

    <script type="text/javascript">

    //Variables

    var numero = 12;
    var texto = "Contenido de tipo texto";
    var boleanos = true; //false

    //Arreglos
    var uni1 = [1,2,3,4,5];
    var uni2 = ['a','b','c'];
    var bid1 = [[1,2,3],[1,2,3]];
    var bid2 = [['a','b','c'],['a','b','c']];
    
    //Mostrar/Imprimir datos
    alert('TI TSU DSM-53');
    alert('valor:' + numero);

    console.log('TI TSU DSM-53');
    console.log('valor: ' + numero);

    document.getElementById('mostrar').innerHTML = texto;

    //sentencias de control

    var res =10;

    if (res >= 18){
        console.log('Pepe es maor de edad')
        }
    else{
        console.log ('Pepe es mayor de edad');
        }

    //............

    var opc1 = 2;
    var opc2 = "si";

    @switch(opc1){
        case 1:
            alert("Caso 1");
        break;
        case 2:
            switch(opc2){
                    case "Si":
                        alert("Caso 2: Si");
                    break;
                    case "No":
                        alert("Caso 2: No");
                    break;
                    default:
                        alert("Caso 2: Error");
                    break;
            }
        break;
        default:
            alert("Caso de Error!!!");
        break;
    }
    </script>
</head>
<body>
    <h1>DSM-53: Desarrollo Movil Multiplataforma</h1>
    <br><hr>
    <h4>Javascript: Variables</h4>
    <hr>
    <br>

    Variable 1: <b id = "mostrar1"></b><br>
    Variable 2: <b id = "mostrar2"></b><br>
    Variable 3: <b class="mostrar2"></b><hr>

    <div id ="info" class="info" name="info">Informacion de muestra</div><br>

    <script>
        documento.getElementById('mostrar2').innerHTML = texto;
        documento.getElementsByClassName("mostrar2")[0].innerHTML = "Roberto dato2";

        var dato = prompt("Coloque una dato","");
        //Detectamos si el usuario ingreso un valor
        if (dato != ""){
            alert("El dato es: " + dato);
            console.log('>>>>>>>>> ' +dato);
        }
    //Detectamos si el usuario NO ingresoun valor

    else{
        alert("No has ingresado un dato");
    }
    </script>
</body>
</html>