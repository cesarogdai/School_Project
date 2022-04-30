<?php
require_once("./conection.php");
$username = $_POST['username'];
$password = $_POST['password'];
$con = connectionDB();

/*session_start();
$_SESSION['username'] = $username;*/
$level = 0;
/*
registry, lists -> 1
student -> 2
teacher -> 3
*/
//A180410


/*Execute query*/

//query to be executed below
/*select alu.matricula, alu.ape_pat, alu.ape_mat, alu.nombres, alu.email 
from uni_alumnos alu where alu.matricula = 'A180410'*/
$queryStudent = "select alu.email, alu.matricula from uni_alumnos alu where alu.email = ".$username." and alu.matricula = ".$password;

$queryStudent = "select * from uni_alumnos ua  where ua.email = ".$username." and ua.matricula = ".$password;

$queryTeacher = "select tea.ape_pat, tea.pat_mat, tea.nombre, tea.email, tea.cve_profesor from uni_profesor tea where tea.email = ".$username." and tea.cve_profesor = ".$password;




if($username && $password){
    $result = mysqli_query($con, $queryStudent);
    if($result){
        echo "Works";
        print("Works");
    }else{
        echo "no";
        print("NO");
    }
}
/*
 Al ingresar al sistema, el usuario nivel 1 deberá visualizar los módulos:

               - Registro de Alumnos
               table ?

               - Vista de alumnos registrados
               table ?
               - Vista de profesores registrados
               table ?
               - Vista de kardex de alumnos
               table ?
*/

//$queryAdmin = 
/*student -> id, name, lastnames, name, state, phone, email, cve_carrera
stuff to search cve_carrera

*/

//$result = mysqli_query($con, $queryStudent);
/*
$result = mysqli_query($con, $queryStudent);

if($result){
	header("location:student.php");
}else{
	?>
	<?php
	include 'index.php';

	?>  
	<h1 class="bad">Verifique sus datos</h1>
<?php
}*/

?>

