<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="../js/jquery-2.1.4.js"></script>
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Document</title>
</head>

<body>
    <div id="cabezera">
        <img src="../img/logo-corape-web-repositorio.png" alt="logo">

        <center>
        <h1 >Administración de datos</h1>
    </center>
        
    </div>
    <center>
    <div id="cuerpo"> 
           <form action="../php/conec.php" method="POST">
       <a href="#popup"><input type="button" name="Añadir" id="Añadir" value="Añadir" ></a>&emsp;&emsp;
       <label for="searchterm" id="buscar">Buscar:</label> <input id="searchTerm" type="text" onkeyup="doSearch()" name="palabra" />
        <br><br>
        <div id="tabladecomtenidos">
            <table border="1" id="regTable">
                <tr class="tablatitulo">
                    <th>
                        Número
                    </th>
                    <th>
                        Nombre
                    </th>
                    <th>
                        Nacionalidad / Pueblo
                    </th>
                    <th colspan="2">
                        Acciones
                    </th>
                </tr>
                <tr id="fila1" class="tablacontenido">
                    <td>1</td>
                    <td>Awá</td>
                    <td>Nacionalidad</td>
                    <td>
                       <a href="#popup1"> <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                        <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(1)">
                    </td>
                </tr>
                <tr id="fila2" class="tablacontenido">
                    <td>2</td>
                    <td>Chachi</td>
                    <td>Nacionalidad</td>
                    <td>
                       <a href="#popup1"> <input type="button" nombre="Editar" id="Editar" value="Editar"onclick="editrow(2)"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(2)">
                    </td>
                </tr>
                <tr id="fila3" class="tablacontenido">
                    <td>3</td>
                    <td>Épera</td>
                    <td>Nacionalidad</td>
                    <td>
                       <a href="#popup1"> <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(3)">
                    </td>
                </tr>
                <tr id="fila4" class="tablacontenido">
                    <td>4</td>
                    <td>Tsáchila</td>
                    <td>Nacionalidad</td>
                    <td>
                       <a href="#popup1"> <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(4)">
                    </td>
                </tr>
                <tr id="fila5" class="tablacontenido">
                    <td>5</td>
                    <td>Achuar</td>
                    <td>Nacionalidad</td>
                    <td>
                       <a href="#popup1"> <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(5)">
                    </td>
                </tr>
                <tr id="fila6" class="tablacontenido">
                    <td>6</td>
                    <td>Andoa</td>
                    <td>Nacionalidad</td>
                    <td>
                      <a href="#popup1">  <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(6)">
                    </td>
                </tr>
                <tr id="fila7" class="tablacontenido">
                    <td>7</td>
                    <td>Cofán</td>
                    <td>Nacionalidad</td>
                    <td>
                      <a href="#popup1">  <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(7)">
                    </td>
                </tr>
                <tr id="fila8" class="tablacontenido">
                    <td>8</td>
                    <td>Sapara</td>
                    <td>Nacionalidad</td>
                    <td>
                      <a href="#popup1">  <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(8)">
                    </td>
                </tr>
                <tr id="fila9" class="tablacontenido">
                    <td>9</td>
                    <td>Sekoya</td>
                    <td>Nacionalidad</td>
                    <td>
                      <a href="#popup1">  <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(9)">
                    </td>
                </tr>
                <tr id="fila10" class="tablacontenido">
                    <td>10</td>
                    <td>Shiwiar</td>
                    <td>Nacionalidad</td>
                    <td>
                      <a href="#popup1">  <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(10)">
                    </td>
                </tr>
                <tr id="fila11" class="tablacontenido">
                    <td>11</td>
                    <td>Shuar</td>
                    <td>Nacionalidad</td>
                    <td>
                      <a href="#popup1">  <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(11)">
                    </td>
                </tr>
                <tr id="fila12" class="tablacontenido">
                    <td>12</td>
                    <td>Siona</td>
                    <td>Nacionalidad</td>
                    <td>
                       <a href="#popup1"> <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(12)">
                    </td>
                </tr>
                <tr id="fila13" class="tablacontenido">
                    <td>13</td>
                    <td>Waorani</td>
                    <td>Nacionalidad</td>
                    <td>
                      <a href="#popup1">  <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(13)">
                    </td>
                </tr>
                <tr id="fila14" class="tablacontenido">
                    <td>14</td>
                    <td><a href="trab2.html"> Kichwa</a></td>
                    <td>Nacionalidad</td>
                    <td>
                     <a href="#popup1">  <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(14)">
                    </td>
                </tr>
                <tr id="fila15" class="tablacontenido">
                    <td>15</td>
                    <td>Afroecuatoriano</td>
                    <td>Pueblo</td>
                    <td>
                      <a href="#popup1">  <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(15)">
                    </td>
                </tr>
                <tr id="fila16" class="tablacontenido">
                    <td>16</td>
                    <td>Montuvios</td>
                    <td>Pueblo</td>
                    <td>
                      <a href="#popup1">  <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(16)">
                    </td>
                </tr>
                <tr id="fila17" class="tablacontenido">
                    <td>17</td>
                    <td>Huancavilca</td>
                    <td>Pueblo</td>
                    <td>
                      <a href="#popup1">  <input type="button" nombre="Editar" id="Editar" value="Editar"></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(17)">
                    </td>
                </tr>
                <tr id="fila18" class="tablacontenido">
                    <td>18</td>
                    <td>Manta</td>
                    <td>Pueblo</td>
                    <td>
                      <a href="#popup1">  <input type="button" nombre="Editar" id="Editar" value="Editar" ></a>
                    </td>
                    <td>
                            <input type="button" nombre="Eliminar" id="Eliminar" value="Eliminar" onclick="eliminar(18)">
                    </td>
                </tr>

            </table>
        </form>
        </div>
        </center>

    </div>
    <div id="popup" class="overlay">
            <div id="popupBody">
                <h2>Añadir contenido</h2>
                <a id="cerrar" href="#">&times;</a>
                <div class="popupContent">
                    <form action="../php/conec.php" method="POST" target="_parent">
                        <table>
                            <tr>
                                <td>
                   <label for="inputnombre">Nombre:</label>
                                </td>
                       <td> 
                    <input type="text" id="inputnombre" name="ipn">
                    </td>
                    </tr>
                    
                    <tr>
                    <td>
                   <label for="inputtipo">Nacionalidad/Pueblo:</label>
                   </td> 
                   <td>
                    <input type="text" id="Inputtipo" name="ipt"> &emsp;&emsp;
                    </td>
                    </tr>
                    </table>
                    <br>
                    <label for="opcion">Tiene elementos de nivel 2</label> &emsp;
                    <label for="opcion">SI</label>
                    <input type="radio" name="opcion" id="si" onclick="Inputnombre2.disabled=false;">
                    <label for="opcion">NO</label>
                    <input type="radio" name="opcion" id="no" onclick="Inputnombre2.disabled=true;">
                    <br><br>
                    <label for="inputnombre">Nombre:</label> 
                    <input type="text" id="Inputnombre2" disabled=true>
                    <br><br>
                    <button>Agregar</button>
                    <button>Quitar</button>
                    <br> <br>
                    
                    <select name="ddrc" id="n2" size="5" multiple required>
                        <option value="pueblo 1">pueblo 1</option>
                        <option value="1">pueblo 2</option>
                        <option value="2">pueblo 3</option>
                        <option value="3">pueblo 4</option>
                        <option value="4">pueblo 5</option>
                        <option value="5">pueblo 6</option>
                        <option value="6">pueblo 7</option>
                        <option value="7">pueblo 8</option>
                        <option value="8">pueblo 9</option>
                        <option value="9">pueblo 10</option>
                    </select>
                    <br><br>
                    
                    <button type="submit">Guardar</button>
                </form>
                </div>
            </div>
         </div>

         <div id="popup1" class="overlay">
                <div id="popupBody">
                    <h2>Editar contenido</h2>
                    <a id="cerrar" href="#">&times;</a>
                    <div class="popupContent">
                        <form action="">
                            <table>
                                <tr>
                                    <td>
                       <label for="inputNombre">Nombre:</label>
                       </td> 
                       <td>
                        <input type="text" id="InputNombre">
                        </td>
                        </tr>
                        <br><br>
                        <tr>
                            <td>
                       <label for="imputTipo">Nacionalidad/Pueblo:</label> 
                       </td>
                       <td>
                        <input type="text" id="InputTipo">
                        </td>
                        </tr>
                    </table>
                        <br><br>
                        <label for="opcion">¿Se subdivide en pueblos?</label> &emsp;
                    <label for="opcion">SI</label>
                    <input type="radio" name="opcion" id="si" onclick="pueblos.disabled=false">
                    <label for="opcion">NO</label>
                    <input type="radio" name="opcion" id="no" onclick="pueblos.disabled=true">
                    <br><br><br>
                    <label for="inputnombre">Pueblos:</label>
                    <br>
                    <input type="text" list="addpueblo" id="pueblos"disabled  autocomplete="off" >
                    <datalist name="addpueblo" id="addpueblo">
                        <option value="Awá"></option>
                        <option value="Chachi"></option>
                        <option value="Épera"></option>
                    </datalist>
                    <br><br>
                        <button>Guardar</button>
                    </form>
                    </div>
                </div>
             </div>


</body>
<script src="../js/archivo.js"></script>
<script src="../js/buscar.js"></script>

</html>