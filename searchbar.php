 <body>
    <div class="mainContainer"> 
      <nav class="navbar navbar-default">
         
         <ul class="nav navbar-nav"> <!-- All items after the "Rad2" title are formatted in an unordered list -->
            <a class="navbar-brand" href="index.php">Rad2</a>
            <li class="nav-item dropdown">
              
              <a class="nav-item dropdown-toggle" data-toggle="dropdown">List All</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="results.php">Accounts</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">VPN Profiles</a> <!-- placeholder-->
              </div>
            </li>
           
          <li class="nav-item dropdown">
                  <a class="nav-item dropdown-toggle" data-toggle="dropdown">New</a> <!-- placeholder-->
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">User</a> <!-- placeholder-->
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">VPN Profile</a> <!-- placeholder-->
                  </div>    
          </li>

          <li class="nav-item">
                <form class="navbar-form" action="results.php"> <!-- Beginning of the search box -->
                  <input name="query" class="form-control" type="text" placeholder="Search">
               </form>
          </li>
          
          <!-- placeholder user -->        
          <li class="nav-item dropdown">
                  <a class="nav-item dropdown-toggle" data-toggle="dropdown" href="#">Username</a> 
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">Profile</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Preferences</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Logout</a>
                  </div>    
            
          </li>

         </ul> <!-- end of listed navbar items -->
      </nav> <!-- end of bootstrap's navbar div -->
 </div> 
