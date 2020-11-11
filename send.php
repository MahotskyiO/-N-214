<?php
$name = $_POST['name'];
$surName = $_POST['surName'];
$num = $_POST['num'];

if (!empty($name) && !empty($surName) && !empty($num)){
    $db_host = "localhost"; 
    $db_user = "root"; 
    $db_base = 'iis'; 
    $db_table = "requests"; 
    $mysqli = new mysqli($db_host, $db_user, '', $db_base);
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
    
    $result = $mysqli->query("INSERT INTO ".$db_table." (surName, name, num) VALUES ('$surName','$name', '$num')");
    if ($result == true){
        echo '<script>alert("Заявка успішно відправлена")
        document.location.href="index.php"
        </script>';
    }
}
else{
    if(isset($_POST['inputsubmit1']) && (empty($name) || empty($surName) || empty($num))){
        echo '<script>alert("Заповніть всі поля форми правильно!")
        document.location.href="index.php"</script>';
        header('Location: index.php');
    }
}

?>
