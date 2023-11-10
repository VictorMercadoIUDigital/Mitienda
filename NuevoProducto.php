<?php include ("templates/cabecera.php")?>   
<h1>Agregar Nuevo producto</h1>
<form action="ProcesarProducto.php" method="POST">
        <table>
            <tr>
                <td>Nombre:</td>
                <td><input type="text" name="Nombre" id=""></td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td><input type="number" name="Precio"></td>
            </tr>
            <tr>
                <td>Inventario:</td>
                <td><input type="number" name="Inventario"></td>
            </tr>
            <tr>
                <td>Categoria:</td>
                <td>
                    <select name="Categoria" id="">
                    <option value="">Tecnologia</option>
                    <option value="">Hogar</option>
                    <option value="">Moda</option>
                    </select>

                </td>
            </tr>
            <tr>
                <td>
                <input type="submit" name="btnRegistrar" value="Registrar">
                </td>
                
            </tr>
        </table>
</form>
<?php include ("templates/pie.php")?>   