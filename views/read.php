<?php
    require 'database.php';
    $id = null;
    if ( !empty($_GET['id'])) {
        $id = $_REQUEST['id'];
    }
     
    if ( null==$id ) {
        header("Location: index1");
    } else {
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "SELECT * FROM Contacts where id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        $data = $q->fetch(PDO::FETCH_ASSOC);
        Database::disconnect();
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
                        <h3>Read a Contact</h3>
                    </div>
                     
                    <div class="form-horizontal" >
                      <div class="control-group">
                        <h1><label class="control-label">Phone</label></h1>
                        <div class="controls">
                            <label class="checkbox">
                            <h2><?php echo $data['phone_number'];?></h2>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                      <h1><label class="control-label">Name</label></h1>
                        <div class="controls">
                            <label class="checkbox">
                            <h2><?php echo $data['name'];?><h2>
                            </label>
                        </div>
                      </div>
                      <div class="control-group">
                      <h1><label class="control-label">Last Name</label></h1>
                        <div class="controls">
                            <label class="checkbox">
                            <h2><?php echo $data['last_name'];?></h2>
                            </label>
                        </div>
                      </div>
                        <div class="form-actions">
                          <a class="btn" href="index1">Back</a>
                       </div>
                     
                      
                    </div>
                </div>
                 
    </div> <!-- /container -->
  </body>
</html>