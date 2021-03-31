<?php 
        $title = 'index';
        require_once 'Shared/header.php';
    ?>
<body>
    <div class="container">
            <div class="row">
                <h3>Contact Book</h3>
            </div>
            <div class="row">
        <!-- Search form -->
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for ..">
            <div class="row">
            <p><br>
                    <a href="create" class="btn btn-success">Create</a>
                </p>
                <table id="tableid" class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>Phone number</th>
                      <th>Name </th>
                      <th>Last name </th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php
                   include 'database.php';
                   $pdo = Database::connect();
                   $sql = 'SELECT * FROM Contacts ORDER BY id DESC';
                   foreach ($pdo->query($sql) as $row) {
                            echo '<tr>';
                            echo '<td>'. $row['phone_number'] . '</td>';
                            echo '<td>'. $row['name'] . '</td>';
                            echo '<td>'. $row['last_name'] . '</td>';
                            echo '<td><a class="btn btn-success" href="read?id='.$row['id'].'">Read</a>';
                            echo '<a class="btn btn-success" href="update?id='.$row['id'].'">Update</a>';
                            echo '<a class="btn btn-danger" href="delete?id='.$row['id'].'">Delete</a></t>';
                            echo '</td>';
                            echo '</tr>';
                   }
                   Database::disconnect();
                  ?>
                  </tbody>
            </table>
        </div>
    </div> <!-- /container -->
    <script>
function myFunction() {

// Declare variables 
var input = document.getElementById("myInput");
var filter = input.value.toUpperCase();
var table = document.getElementById("tableid");
var trs = table.tBodies[0].getElementsByTagName("tr");

// Loop through first tbody's rows
for (var i = 0; i < trs.length; i++) {

  // define the row's cells
  var tds = trs[i].getElementsByTagName("td");

  // hide the row
  trs[i].style.display = "none";

  // loop through row cells
  for (var i2 = 0; i2 < tds.length; i2++) {

    // if there's a match
    if (tds[i2].innerHTML.toUpperCase().indexOf(filter) > -1) {

      // show the row
      trs[i].style.display = "";

      // skip to the next row
      continue;

    }
  }
}

}
</script>

  </body>
</html>