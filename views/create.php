<?php
     
    require 'database.php';
 
    if ( !empty($_POST)) {
        // keep track validation errors
        $phone_numberError = null;
        $nameError = null;
        $last_nameError = null;
         
        // keep track post values
        $phone_number = $_POST['phone_number'];
        $name = $_POST['name'];
        $last_name = $_POST['last_name'];
         
        // validate input
        $valid = true;
        if (empty($name)) {
            $phone_numberError = 'Please enter phone number';
            $valid = false;
        }
         
        if (empty($name)) {
            $nameError = 'Please enter name';
            $valid = false;
        } 
         
        if (empty($last_name)) {
            $last_nameError = 'Please enter Last name';
            $valid = false;
        }
         
        // insert data
        if ($valid) {
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO Contacts (phone_number,name,last_name) values(?, ?, ?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($phone_number,$name,$last_name));
            Database::disconnect();
            header("Location: index1");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
 
<body>
    <div class="container">
     
                <div class="span10 offset1">
                    <div class="row">
                        <h3>Create a Contact</h3>
                    </div>
             
                    <form class="form-horizontal" action="create" method="post">
                      <div class="control-group <?php echo !empty($phone_numberError)?'error':'';?>">
                        <label class="control-label">Phone number</label>
                        <div class="controls">
                            <input name="phone_number" type="text"  placeholder="Phone number" value="<?php echo !empty($phone_number)?$phone_number:'';?>">
                            <?php if (!empty($phone_numberError)): ?>
                                <span class="help-inline"><?php echo $phone_numberError;?></span>
                            <?php endif; ?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($nameError)?'error':'';?>">
                        <label class="control-label">Name</label>
                        <div class="controls">
                            <input name="name" type="text" placeholder="Name" value="<?php echo !empty($name)?$name:'';?>">
                            <?php if (!empty($nameError)): ?>
                                <span class="help-inline"><?php echo $nameError;?></span>
                            <?php endif;?>
                        </div>
                      </div>
                      <div class="control-group <?php echo !empty($last_name)?'error':'';?>">
                        <label class="control-label">Last name</label>
                        <div class="controls">
                            <input name="last_name" type="text"  placeholder="Last name" value="<?php echo !empty($last_name)?$last_name:'';?>">
                            <?php if (!empty($last_nameError)): ?>
                                <span class="help-inline"><?php echo $last_nameError;?></span>
                            <?php endif;?>
                        </div>
                      </div><br>
                      <div class="form-actions">
                          <button type="submit" class="btn btn-success">Create</button>
                          <a class="btn" href="index1">Back</a>
                        </div>
                    </form>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>