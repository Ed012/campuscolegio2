<?php
//Comienza session de usuario
    session_start();
    ?>
<?php
include 'conexion.php';

//Hacer lo mismo que el otro filtro, por grado, luego filtro por nrc y rellenar tabla de cursos
        $sql="SELECT * FROM docente WHERE (doc_nombre = '{$_SESSION['username']}' ) ";
        $query=mysqli_query($conexion,$sql);
            //ordenando lo obtenido del docente


        while($horario=mysqli_fetch_array($query)) 
        { 
            
            if($horario ["doc_nombre"]=='Rosa') 
            { 
                header("Location: ../gestorArchivos/primerGrado/index.php");
            } 
            else 
            {  
            if($horario ["doc_nombre"]=='Samantha') 
            { 
                header("Location:  ../gestorArchivos/segundoGrado/index.php"); 
            } else{
                if($horario ["doc_nombre"]=='Luis') 
                { 
                    header("Location:  ../gestorArchivos/tercerGrado/index.php");
                } else{
                    if($horario ["doc_nombre"]=='Teodoro') 
                    { 
                        header("Location:  ../gestorArchivos/cuartoGrado/index.php"); 
                    } else{
                        if($horario ["doc_nombre"]=='Aldair') 
                        { 
                            header("Location:  ../gestorArchivos/quintoGrado/index.php");  
                        } else{
                            if($horario ["doc_nombre"]=='Maria') 
                            { 
                                header("Location:  ../gestorArchivos/sextoGrado/index.php");  
                            } else{
                                header("Location: ../HomeDoc.php");
                            }

                        }
                    }
                }
            }
            } 
        }