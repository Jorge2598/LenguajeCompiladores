<?php
    $funciones = "
    function imprimir(cadena){
        $('textarea#textFinal').val(cadena);
    }
    function sumar(a,b){
        return a+b;
    }
    function restar(a,b){
        return a-b;
    }
    function multiplicar(a,b){
        return a*b;
    }
    function dividir(a,b){
        return a/b;
    }
    function hasta(a, funcionllamar){
        for(var i =0; i < a; i++){
            funcionllamar(i);
        }
    }
    function siFunciona(condicion, siVerdadero, siFalso){
        if(condicion){
            siVerdadero();
        }else{
            siFalso();
        }
    }
    function siMenor(a,b){
        return a < b;
    }
    function siMayor(a,b){
        return a > b;
    }
    function imprimirConcadenados(cadena){
        document.getElementById('textFinal').innerHTML += cadena + '\\n';
    }
    function incrementar(base, incremento){
        return base + incremento;
    }

    ";

    if( isset( $_GET['codeJs'])){
        $codeJs = $_GET['codeJs'];
        if(file_exists("codigoInterprete.js")){
            $archivo = fopen("codigoInterprete.js","w+");
            $codigoFull = $funciones . $codeJs;
            fwrite($archivo, $codigoFull);
            fclose($archivo);
            header("Location: index.php?codex=".$_GET['codex']);
        }

    }


?>
