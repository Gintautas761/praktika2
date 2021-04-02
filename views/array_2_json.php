<?php 
        $title = 'index';
        require_once 'Shared/header.php';
?>

<?php  
 
 // Check if submit button pressed 
 if(isset($_POST["age"]))
 {  
           // If file exists transfer information from inputs to file
                $extra = array(  
                     'first_name'   =>     $_POST['first_name'],  
                     'age'          =>     $_POST["age"],  
                     'gender'       =>     $_POST["gender"]  
                );  
                $array_data[] = $extra;  
                $final_data = json_encode($array_data);  
                file_put_contents('json.json', $final_data);
               
          }
 ?>  
    <div class="form-style-6">
        <h1>Išsaugoti masyvą į json failą</h1>
    <form action="index.php">
        <button type="submit" class="btn btn-success" value="Back">Sugrįžti</button>
    </form>
<?php error_reporting (E_ALL ^ E_NOTICE); ?>
    <form action ="array_2_json" method="post">
<?php   
if(isset($error)){  
     echo $error;
}  
 require_once 'Shared/form.php'; ?> 
    <h3>Sugeneruotas json</h3>
   
    <?php 
        // 
        if (file_exists("failas.txt")) {
            $file = "failas.txt";
            $current = file_get_contents($file);
        }else {
            $myfile = fopen("failas.txt","w");
            header("refresh:0");
        }

     ?>    
    <form action ="procces.php" method="post">

         <textarea row="20" cols="70" name="comment">
         <?php
            echo $current;
            ?>
         
         </textarea>
         <input type="submit">
    </form>

     <?php require_once 'Shared/footer.php'; ?>


