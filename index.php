<?php
include 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<!--<script src="http://code.jquery.com/jquery-1.7.2.min.js"></script> -->
    
</head>
<body>
<?php
include 'searchbar.php';?>

<div id="output">
</div>

<span>
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

<?php include 'footer.php'; ?>
<script type="text/javascript">
    
    var filterq="";

    function myFilter(){
        
        $('select').on('change', function() {
        alert( this.value );
        })
    }

    
    function searchq(){
        var searchTxt = document.getElementById('inputq').value;
        //var searchTxt = $"("input[name='search']").val";
        $.post("search.php", {searchVal: searchTxt}, function(output){
            $("#output").html(output);
        });
    }
    </script>

</body>
</html>
