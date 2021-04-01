<?php
 // Check if submit button pressed 

    if(isset($_POST["age"] )) 

{  

//Array of elements
    $extra = array(  
        'first_name'   =>     $_POST['first_name'],  
        'age'          =>     $_POST["age"],  
        'gender'       =>     $_POST["gender"]  
); 

// Open a file in write mode ('a') 
        $fp = fopen('data.csv', 'a'); 
        fputcsv($fp, $extra); 
        fclose($fp);
} 
?>    

   <div class="form-style-6">
        <h1>Išsaugoti masyvą į data.csv failą</h1>
    <form action="index.php">
        <button type="submit" class="btn btn-success" value="Back">Sugrįžti</button>
    </form>
<?php error_reporting (E_ALL ^ E_NOTICE); 

 require_once 'Shared/form.php'; ?>          
        <h3>Sugeneruotas masyvas</h3>

        <?php
    $array = file("failas.txt");

    // // uzkoduoja koda json
    // echo json_encode($array)."\n";



    if (file_exists("failas.txt")) {
        $file = "failas.txt";
        $current = file_get_contents($file);
    } else {
        $myfile = fopen("failas.txt","w");
        header("refresh:0");         
    }

?>

    <?php  if(isset($_POST["age"])){
        print_r($_POST);
        }
         require_once 'Shared/footer.php'; ?>
