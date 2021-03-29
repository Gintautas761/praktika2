<?php
 // Check if submit button pressed 
if(isset($_POST["age"]))  
{  
//Array of elements
$extra = array(  
    'first_name'   =>     $_POST['first_name'],  
    'age'          =>     $_POST["age"],  
    'gender'       =>     $_POST["gender"]  
);  

function to_xml(SimpleXMLElement $object, array $arr)
{   
    foreach($arr as $key => $value) {
        if(is_array($value)) {
            if(!is_numeric($key)){
                $subnode = $object->addChild("$key");
                array_to_xml($value, $subnode);
            }else{
                $subnode = $object->addChild("item$key");
                array_to_xml($value, $subnode);
            }
        }else {
            $object->addChild("$key",htmlspecialchars("$value"));
        }
    }
} 
$xml = new SimpleXMLElement('<root/>');
 to_xml($xml, $extra);
   $xml->asXML("file.xml");
}
?>
<div class="form-style-6">
        <h1>Išsaugoti masyvą į data.xml failą</h1>
    <form action="index.php">
        <button type="submit" class="btn btn-success" value="Back">Sugrįžti</button>
    </form>
<?php 
error_reporting (E_ALL ^ E_NOTICE);
?>
<form action ="array_2_xml" method="post">
    <div class="mb-3">
        <label  class="form-label fs-2">Vardas</label>
        <input type="text" name="first_name" class="form-control"  placeholder="Vardas">
    </div>
    <div class="mb-3">
        <label  class="form-label fs-2">Metai</label>
        <input type="number" name="age" class="form-control"  placeholder="Metai">
    </div>
    <div class="mb-3">
        <label  class="form-label fs-2">Lytis</label>
        <input type="text" name="gender"class="form-control"  placeholder="Lytis">
        <input type="submit" class="btn btn-primary" value="Patvirtinti" >
    </div>
</form>           
        <h3>Sugeneruotas masyvas</h3>

<?php 
    if(isset($xml)){
            print($xml->asXML());
                    }
?>

<?php require_once 'Shared/footer.php'; ?>

