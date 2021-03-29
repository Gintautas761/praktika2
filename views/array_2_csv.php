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
<?php error_reporting (E_ALL ^ E_NOTICE); ?>

    <form action ="array_2_csv" method="post">
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label fs-2">Vardas</label>
        <input type="text" name="first_name" class="form-control" id="formGroupExampleInput" placeholder="Vardas">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label fs-2">Metai</label>
        <input type="number" class="form-control" name="age" id="formGroupExampleInput" placeholder="Metai">
    </div>
    <div class="mb-3">
        <label for="formGroupExampleInput2" class="form-label fs-2">Lytis</label>
        <input type="text" class="form-control" name="gender" id="formGroupExampleInput2" placeholder="Lytis">
        <input type="submit" class="btn btn-primary" value="Patvirtinti" >
    </div>
    </form>            
        <h3>Sugeneruotas masyvas</h3>

    <?php  if(isset($_POST["age"])){
        print_r($_POST);
        }
        ?>    

    <?php require_once 'Shared/footer.php'; ?>
