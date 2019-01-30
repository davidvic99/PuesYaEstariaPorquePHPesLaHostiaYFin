    <?php

    $conexion = new mysqli("localhost", "root", "", "liga");
    if ($conexion->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }
    $resultado = $conexion->query("SELECT * FROM equipo");

    foreach ($resultado as $equipo) {
        $ids[] = $equipo['id_equipo'];
        $equipos[] = $equipo['nombre'];
        $ciudad[] = $equipo['ciudad'];
        $web[] = $equipo['web'];
    }
    $equipo['id_equipo'] = $_GET ['id_equipo'];

        
        if(isset($_GET['id_equipo']) && $_GET['id_equipo']==$equipo['id_equipo']){
            
                echo "<h1>".$ids[$equipo['id_equipo']]."</h1>";
                echo "<h1>".$equipos[$equipo['id_equipo']]."</h1>";
                echo "<h1>".$ciudad[$equipo['id_equipo']]."</h1>";
                echo "<h1>".$web[$equipo['id_equipo']   ]."</h1>";
                
        }

