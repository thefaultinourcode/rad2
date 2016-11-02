<?php

$link = mysqli_connect("localhost", "root", "mysql", "test") or die("Error connecting to database: ".mysql_error());
$output = '';


if(isset($_POST['searchVal'])){
    $searchq= $_POST['searchVal'];
    
    $query =mysqli_query($link, "SELECT * FROM users
            WHERE (`f_name` LIKE '%".$searchq."%') OR (`l_name` LIKE '%".$searchq."%') OR (`email` LIKE '%".$searchq."%') OR (`userID` LIKE '%".$searchq."%')")  or die(mysqli_error($link));

            echo 
                '
                <script>
                function quickEdit(){
        this.$(".quickEdit").focusout(function(){
        var data = $(\'input\').serialize();
            console.log(data);
                })
            };
                </script>
                <table class="table table-hover">
          <thead>
            <tr>
              <th style="padding-bottom: 0px;"><img src="images/mail.png" alt="Email Icon"></th>
              <th>Name</th>
              <th>Email</th>
              <th>ID</th>
              <th>Password</th>
              <th>Status</th>
              <th>View Tickets</th>
              <th>Edit</th>
            </tr>
          </thead>
          <tbody>';

    $count = mysqli_num_rows($query);
    if($count ==0){
            $output = 'There was no search result!';
    }else{
        while($row = mysqli_fetch_array($query)){
            $id = $row['id'];
            $fname = $row['f_name'];
            $lname = $row['l_name'];
            $email = $row['email'];
            $password = $row['password'];
            $userID = $row['userID'];
            $status = $row['status'];
            if($status == 'Active'){
                $classStatus='label-success';
            }else{
                    $classStatus='label-danger';
            }
            $output.='<tr>
                        <td>
                            <a class="tv8" href="mailto:'.$email.'?Subject=TeamViewer%20Link" ><img src="images/tv8.png" alt="Send TeamView 8 Link to Email" style="width:30px;height:30px;"></a>
                             <a class="tv8" href="mailto:'.$email.'?Subject=Certification"><img src="images/cert.png" alt="Send Certification to Email" style="width:30px;height:30px;"></a>
                        </td>
                        <td><input class="quickEdit" name="flname" value="' . $fname . ' ' . $lname . '"/></td>
                        <td>' . $email. '</td>
                        <td>' . $userID . '</td>
                        <td>' . $password . '</td>

                        <td><h4><span class="label ' .$classStatus.'">'.$status.'</span></h4></td>
              <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal' . $counter . '">View</button></td>
                        
                        <!-- Modal -->
                <div id="myModal' . $counter . '" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">George Washington</h4>
                      </div>
                      <div class="modal-body">
                        <p>' . $fname . ' ' . $lname . ' ticket info will be found here.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
              <td>
                  <form method="post" action="edit.php">
                    <input type="submit" name="action" value="Edit"/>
                    <input type="hidden" name="pk" value="'.$id.'"/>
                  </form>
                </td>
                </tr>
                
                '
                ;
            } 

    }
}
echo($output);
?>