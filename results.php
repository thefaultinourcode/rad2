<?php
include 'header.php';
include 'searchbar.php';
    $link = mysqli_connect("localhost", "root", "mysql", "test") or die("Error connecting to database: ".mysql_error());

$query = $_GET['query'];
    // gets value sent over search form

    $min_length = 0;
    // you can set minimum length of the query if you want

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then

        $query = htmlspecialchars($query);
        // changes characters used in html to their equivalents, for example: < to &gt;
        $query = mysqli_real_escape_string($link, $query);

        $raw_results = mysqli_query($link, "SELECT * FROM users
            WHERE (`f_name` LIKE '%".$query."%') OR (`l_name` LIKE '%".$query."%') OR (`email` LIKE '%".$query."%') OR (`userID` LIKE '%".$query."%')")  or die(mysqli_error($link));
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `f_name`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'


        echo '< <div class="mainContainer">
        <table class="table table-hover">
          <thead>
            <tr>
              <th>#icon#</th>
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

        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following

            while($results = mysqli_fetch_array($raw_results)){

            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                echo
                    '<tr>
                        <td>
                            <img src="images/tv8.png" alt="Send TeamView 8 Link to Email" style="width:30px;height:30px;">
                            <img src="images/cert.png" alt="Send Certification to Email" style="width:30px;height:30px;"> 
                        </td>
                        <td>' . $results['f_name'] . ' ' . $results['l_name'] . '</td>
                        <td>' . $results['email'] . '</td>
                        <td>' . $results['userID'] . '</td>
                        <td>' . $results['password'] . '</td>

                        <td><h4><span class="label label-success">Active</span><h4></td>
              <td><button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#myModal">View</button></td><!-- Trigger the modal with a button -->
                        
                        <!-- Modal -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">George Washington</h4>
                      </div>
                      <div class="modal-body">
                        <p>' . $results['f_name'] . ' ' . $results['l_name'] . ' ticket info will be found here.</p>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      </div>
                    </div>

                  </div>
                </div>
              <td><button type="button" class="btn btn-sm btn-info">Edit</button></td>
            </tr>';
                // posts results gotten from database, you can also show id ($results['id'])
            } echo '</tbody></table></div>';

        }
        else{ // if there is no matching rows do following
            echo "No results";
        }

    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
 
}

echo '
<center>
 <ul class="pagination">
        <li class="disabled"><a href="#">&laquo;</a></li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">5</a></li>
        <li><a href="#">&raquo;</a></li>
      </ul>
 </center>     
'
	?>








<?php include 'footer.php'; ?>