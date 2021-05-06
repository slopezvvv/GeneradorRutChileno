<!DOCTYPE html>
<html lang='es'>
    <head>
        <meta charset='UTF-8' />
        <title>Generador rut chileno</title>
    </head>
    <body>
        <script>
            validar=(m,d)=>{
                // Autor Sebastián López
                // Github: slopezvvv
                // ShaderToy: lechuga
                //--------------------------------
                // m = mantiza
                // mm = mantiza en formato String
                // d = dígito ingresado por el usuario
                // c = dígito calculado
                // p = cursor de productos
                // i = indice del loop
                //........................
                //
                // 1 8 6 4 1 7 4 7 = mm[i]
                //  Producto Escalar con P
                // 3 2 7 6 5 4 3 2 = p
                // c = Sumatoria final
                // 
                // Módulo 11, limitar dígito a 10
                // c =(11-c%11)%9
                //--------------------------------
                // primera parte
                mm = m.toString(),p=0,c=0; // mm = string del valor númerico de m
                for(i=mm.length;i--;) // n-1 -> 0
                p%=6,c+=parseInt(mm[i])*(p+2),p++;
                // Segunda parte
                c=(11-c%11)%9; // -> 10
                return c===d;
            }
            alert(validar(1, 9) ? "El rut es válido" : "El rut es inválido"); // 1 mantiza, 9 dígito
        </script>
    </body>
</html>