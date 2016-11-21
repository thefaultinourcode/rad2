
//Instant Search Function
var searchTxt;
function searchq(){
    var searchTxt = document.getElementById('inputq').value;
    var filterOption = document.getElementById('filter').value;
    console.log(searchTxt);
    console.log(filterOption);
      $.post("search.php", {searchVal: searchTxt, filterVal: filterOption}, function(output){
          $("#output").html(output);

    })
}





