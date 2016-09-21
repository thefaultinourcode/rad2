 <body>
       <div class="mainContainer">  <!-- made this class so that the navbar doesn't go all the way across the page -->
      <div class="navbar navbar-inverse">
         
         <ul class="nav navbar-nav"> <!-- All items after the "Rad2" title are formatted in an unordered list -->
            <a class="navbar-brand" href="index.php">Rad2</a>
            <li class="nav-item dropdown">
              <!-- Consolidated list all into 1 dropdown menu-->
              <a class="nav-item dropdown-toggle" data-toggle="dropdown">List All</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Accounts</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">VPN Profiles</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Other</a>
              </div>
            </li>
          <!-- Moved new button-->  
          <li class="nav-item dropdown">
               <!--<div class="btn-group">  
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  New
                  </button> -->
                  <a class="nav-item dropdown-toggle" data-toggle="dropdown">New</a>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">User</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">VPN Profile</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Something Cool</a>
                  <!--</div>-->    
          </li>

          <li class="nav-item">
                <form class="form-inline" action="results.php"> <!-- Beginning of the search box -->
                  <input name="query" class="form-control" type="text" placeholder="Search">
                  <button type="submit" class="btn btn-success"> Search </button>
               </form>
          </li>
          

<!--          <li class="nav-item"> <!-- beginning of User Profile dropdown content -->
               
<!--               <div class="dropdown">
                  <button class="dropbtn">Sup User</button>
                  <div class="dropdown-content">
                     <div>
                        <tr>
                           <td> #icon#</td>
                           <td> Julian Thomas</td>
                        </tr>
                        <hr>
                     </div>
                     <a href="#">Preferences</a>
                     <a href="#">Logout</a>
                  </div>
               </div>
            </li> --> <!-- end of User Profile dropdown content -->
         </ul> <!-- end of listed navbar items -->
      </div> <!-- end of bootstrap's navbar div -->
 </div> 	