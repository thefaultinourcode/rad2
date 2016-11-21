<?php 

$link = mysqli_connect("localhost", "root", "mysql", "test") or die("Error connecting to database: ".mysql_error());
$output = '';


if(isset($_POST['searchVal'])){
    $searchq= $_POST['searchVal'];

    $filterVar = $_POST['filterVal'];

    if($searchq == ''){
      echo "Please enter a search query to see results.<br>";
    }
    else{
      if($filterVar == 'fname'){
      $query = mysqli_query($link, "SELECT * FROM users
            WHERE (`f_name` LIKE '%".$searchq."%')")  or die(mysqli_error($link));
      } 
      elseif ($filterVar == 'lname') {
          $query =mysqli_query($link, "SELECT * FROM users
            WHERE (`l_name` LIKE '%".$searchq."%')")  or die(mysqli_error($link));
      }
      elseif ($filterVar == 'userid') {
      $query =mysqli_query($link, "SELECT * FROM users
            WHERE (`userID` LIKE '%".$searchq."%')")  or die(mysqli_error($link));
      }
      elseif ($filterVar == 'email') {
      $query =mysqli_query($link, "SELECT * FROM users
            WHERE (`email` LIKE '%".$searchq."%')")  or die(mysqli_error($link));
      }
      else{
      $query =mysqli_query($link, "SELECT * FROM users
            WHERE (`f_name` LIKE '%".$searchq."%') OR (`l_name` LIKE '%".$searchq."%') OR (`email` LIKE '%".$searchq."%') OR (`userID` LIKE '%".$searchq."%')")  or die(mysqli_error($link));
      }
    }

echo 
                '<table class="table">
          <thead>
            <tr>
              <th class=" text-center fa fa-paper-plane fa-1x" aria-hidden="true" style="padding-bottom: 0px;"></th>
             <th>Name</th>
             <th>Email</th>
             <th>ID</th>
             <th>Password</th>
             <th>Status</th>
             <th>Tickets</th>
             <th>Edit</th>
            </tr>
          </thead>
              <tbody> 
';

    if($searchq != ''){
        $count = mysqli_num_rows($query);
    }
    else{
      $count = 0;
    }
    if($count == 0){
            $output = 'There was no search result!';
    }else{

        $counter=0;
        while($row = mysqli_fetch_array($query)){
            ++$counter;
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
                            <a class="tv8" href="mailto:'.$email.'?Subject=TeamViewer%20Link&body=Here is the link for TeamViewer 8, click to start download: http://download.teamviewer.com/download/version_8x/TeamViewerQS.exe" ><img src="images/tv8.png" alt="Send TeamView 8 Link to Email" style="width:30px;height:30px;"></a>
                             <a class="tv8" href="mailto:'.$email.'?Subject=Certification"><img src="images/cert.png" alt="Send Certification to Email" style="width:30px;height:30px;"></a>
                        </td>
                        <td>' . $fname . ' ' . $lname . '</td>
                        <td>' . $email. '</td>
                        <td>' . $userID . '</td>
                        <td>' . $password . '</td>

                       <td><h4><span class="label ' .$classStatus.'">'.$status.'</span></h4></td>
              <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal'.$counter.'">View</button><!-- Trigger the modal with a button -->
                        
                        <!-- Modal -->
                <div id="myModal'.$counter.'" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Most Recent Tickets</h4>
                      </div>
                      <div class="modal-body">
                        <p>' . $fname . ' ' . $lname . ' ticket info will be found here.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>
                  </td>
                  </div>
                </div>
              </td>
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