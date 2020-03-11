<!DOCTYPE html>
<html lang="en">
<head>
<link rel="icon"href="ico/a.jpg">
    <meta charset="UTF-8">
   <link rel="stylesheet" href="css/styles.css"> 
    <title>login</title>
</head>
<body>
 
 <div class="login-box" >

     
 <img src="img/ab.png" class="avatar" alt="Avatar Image"> 
     <h1>MASCOTAS</h1>
     
     <form action="guardar_mascota.php" method="post">



     <?php
      include('includes/db.php');// para iniciar la base de datos.

        if(isset($_REQUEST['id']) == false){
                echo " Es necesario un id";
                die;
        }
        

            $id=$_REQUEST['id'];
           
           
            $sql="SELECT * FROM mascotas WHERE id='$id'";
            $result= DB::query($sql);

            $mostrar= mysqli_fetch_array($result);//generar un array de todos los datos de la tabla
            
           // $mostrar= mysqli_fetch_object($result); // genera un solo objeto

           
         

    ?>


         
            <label for="nombre" >Nombre</label> 
            <input type="text" name="nombre" required placeholder="nombre" value="<?php echo $mostrar['nombre'];?>">
            
            <label for="raza">Raza</label> 
            <input type="text" name="raza" required placeholder="raza"value="<?php echo $mostrar['raza'];?>">

            <label for="edad">Edad</label> 
            <input type="text" name="edad" required placeholder="edad"value="<?php echo $mostrar['edad'];?>">
            
            <input type="submit" value="Guardar">
            
          
          
            <a href="index.php"><img src="img/bt4.png"  alt="logo"></a>
           
          
           
            

          
         
    </form>
     
 </div>
 

    
</body>
</html>