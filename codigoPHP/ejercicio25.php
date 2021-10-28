<!DOCTYPE html>
<html lang="en">

    <head>
        
    </head>
    <body>
 <div class="w3-container">
     <fieldset>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
         
            <!--El campo alfabetico -->
            <input type="text" class="w3-input" name="alfabetico" value="<?php echo (isset($_REQUEST['alfabetico']) ? $_REQUEST['alfabetico'] : null); ?>"/>
            <span><?php echo ($aErrores["alfabetico"] != null ? $aErrores['alfabetico'] : null); ?></span><br>
            
            <!--El campo entero -->
            <input type="text" class="w3-input" name="entero" value="<?php echo (isset($_REQUEST['entero']) ? $_REQUEST['entero'] : null); ?>"/>
            <span><?php echo ($aErrores["entero"] != null ? $aErrores['entero'] : null); ?></span><br>
            
            <!--El campo float -->
            <input type="text" class="w3-input" name="float" value="<?php echo (isset($_REQUEST['float']) ? $_REQUEST['float'] : null); ?>"/>
            <span><?php echo ($aErrores["float"] != null ? $aErrores['float'] : null); ?></span><br>
            
            <!--El campo date -->
            <input type="text" class="w3-input" name="date" value="<?php echo (isset($_REQUEST['date']) ? $_REQUEST['date'] : null); ?>"/>
            <span><?php echo ($aErrores["date"] != null ? $aErrores['date'] : null); ?></span><br>
            
            <!--El campo email -->
            <input type="email" class="w3-input" name="email" value="<?php echo (isset($_REQUEST['email']) ? $_REQUEST['email'] : null); ?>"/>
            <span><?php echo ($aErrores["email"] != null ? $aErrores['email'] : null); ?></span><br>
            
            
    
            <input type="submit" class="w3-button w3-white w3-border w3-border-blue" name="submitbtn" value="Enviar datos"/>
        </form>
         </fieldset>
    </div>
       
    </body>
</html>








