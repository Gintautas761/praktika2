<?php



$data = array
(
    [
    'first_name' => 'Kiestis',
    'age' => 29,
    'gender' => 'male'
    ],
    [
    'first_name' => 'Vytska',
    'age' => 32,
    'gender' => 'male'
    ],
    [
    'first_name' => 'Karina',
    'age' => 25,
    'gender' => 'female'
    ],
);

    print_r($data);

    if (file_exists("failas.txt")) {
        $file = "failas.txt";
        $current = file_get_contents($file);
    } else {
        $myfile = fopen("failas.txt","w");
        header("refresh:0");         
    }

?>
<form action="process.php" method="post">
    <textarea rows="20" cols="50" name="comment">
        <?php
        echo $current;
        ?>
    </textarea>

    <input type="submit">

</form>