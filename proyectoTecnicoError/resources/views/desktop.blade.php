<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/login.css')}}">
    <title>ITFIP MAPA 3D</title>
</head>
<body>
    <header></header>
    <main>
        <form id="login-form">
            <input type="text" placeholder="Numero de Documento" name="" id="numero">
            <div class="respuesta Resp">
                <p id="respuesta">numero de documento no puede ir vacio. <br> Un minimo de 8 y maximo 10. Ademas de solo numero</p>
            </div>
            <div class="checkbox-input">
               <div>
                    <label for="cc">CC</label>
                    <input type="checkbox" name="" id="cc"  value="false">
                    <label class="checkbox-label checkbox_CC" for="cc"></label>
               </div>
               <div>
                    <label for="ti">IT</label>
                    <input type="checkbox" name="" id="ti" value="false">
                    <label class="checkbox-label checkbox_TI" for="ti"></label>
                </div>
            </div>
            <div class="respuesta Resp_1">
                <p id="respuesta_1">seleccione solo un tipo de documento</p>
            </div>
            <input type="submit" value="INICIAR" id="Iniciar_submit-input">
        </form>
    </main>
    <script type="module"  src="{{ asset('js/app.js')}}"></script>
</body>
</html>