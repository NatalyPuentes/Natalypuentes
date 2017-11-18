<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nataly puentes</title>
        <link rel="stylesheet" href="resources/parcial.css">
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        
     <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }
            .title {
                font-size: 74px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }


        </style>

    <?php
       include("Resources/conexion.php");
    ?>

    </head>
    <body>
            <div class="title m-b-md" align="center">
                
                    Formulario de carga de información
              
            </div>
            
        <fieldset>
            <div>
                <center>
                <form enctype="multipart/form-data" action="Archivo.php" method="POST"> 
                <table>
                    <tr>
                        <input type="file" name="file" id="file" class="inputfile" />
                    <input class="input-button" type="submit" value="Enviar">
                    
                
                </table>
                </form>
               
                </button>
                </center>
            </div>
            
        </fieldset>
        <footer class="footer">
                    Gracias por la oferta<br>
                    telefono: Tel-313344541<br>
                    Bogotá-Colombia<br>
        </footer>
    </body>
</html>
