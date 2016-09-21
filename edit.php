<?php include 'index.php'; ?>
   <body>
      <div class="mainContainer"> <!-- made this class so that the navbar doesn't go all the way across the page -->
      <div class="navbar navbar-light bg-faded navbar-static-top">
         <a class="navbar-brand"> Rad2</a>
         <ul class="nav navbar-nav"> <!-- All items after the "Rad2" title are formatted in an unordered list -->
            <li class="nav-item active">
               <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Accounts: </a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">VPN Profiles:</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#">Other</a>
            </li>
            <li class="nav-item">
               <form class="form-inline"> <!-- Beginning of the search box -->
                  <input class="form-control" type="text" placeholder="Search">
               </form>
            </li>
            <li class="nav-item">
               <div class="btn-group">   <!-- The green "New" button with dropdown options -->	
                  <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  New
                  </button>
                  <div class="dropdown-menu">
                     <a class="dropdown-item" href="#">User</a>
                     <a class="dropdown-item" href="#">VPN Profile</a>
                     <div class="dropdown-divider"></div>
                     <a class="dropdown-item" href="#">Something Cool</a>
                  </div>
               </div> <!-- end of green "New" button div -->
            </li>
            <li class="nav-item"> <!-- beginning of User Profile dropdown content -->
               <div class="dropdown">
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
            </li> <!-- end of User Profile dropdown content -->
         </ul> <!-- end of listed navbar items -->
      </div> <!-- end of bootstrap's navbar div -->
	 
	 
	 
	 
	 
	 
	 
<!-- Straight from Bootstraps website. We will visit this page soon. -->	 

<div class="form-group row">
  <label for="example-text-input" class="col-xs-2 col-form-label"> User ID</label>
  <div class="col-xs-10">
    <input class="form-control" type="text" value="Artisanal kale" id="example-text-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-xs-2 col-form-label">First Name</label>
  <div class="col-xs-10">
    <input class="form-control" type="search" value="How do I shoot web" id="example-search-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-email-input" class="col-xs-2 col-form-label">Last Name</label>
  <div class="col-xs-10">
    <input class="form-control" type="email" value="bootstrap@example.com" id="example-email-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-url-input" class="col-xs-2 col-form-label">Email</label>
  <div class="col-xs-10">
    <input class="form-control" type="url" value="http://getbootstrap.com" id="example-url-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-tel-input" class="col-xs-2 col-form-label">Title</label>
  <div class="col-xs-10">
    <input class="form-control" type="tel" value="1-(555)-555-5555" id="example-tel-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-password-input" class="col-xs-2 col-form-label">Password</label>
  <div class="col-xs-10">
    <input class="form-control" type="password" value="hunter2" id="example-password-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-number-input" class="col-xs-2 col-form-label">User Type</label>
  <div class="col-xs-10">
    <input class="form-control" type="number" value="42" id="example-number-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-datetime-local-input" class="col-xs-2 col-form-label">VPN Profile</label>
  <div class="col-xs-10">
    <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="example-datetime-local-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-date-input" class="col-xs-2 col-form-label">Account is Disabled</label>
  <div class="col-xs-10">
    <input class="form-control" type="date" value="2011-08-19" id="example-date-input">
  </div>
</div>
<div class="form-group row">
  <label for="example-month-input" class="col-xs-2 col-form-label">Account is Deleted</label>
  <div class="col-xs-10">
    <input class="form-control" type="month" value="2011-08" id="example-month-input">
  </div>
</div>
	</div> <!-- form_container end -->
	</div> <!-- mainContainer end -->
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
<?php include 'footer.php'; ?>