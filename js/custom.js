
//Instant Search Function
var searchTxt;
function searchq(){
    var searchTxt = document.getElementById('inputq').value;
    $.post("search.php", {searchVal: searchTxt}, function(output){
        $("#output").html(output);
    })
}


//Edit.php Ajax stuff
function ajaxFunction(){
 var ajaxRequest;  // The variable that makes Ajax possible!

 try{
   // Opera 8.0+, Firefox, Safari
   ajaxRequest = new XMLHttpRequest();
 }catch (e){
   // Internet Explorer Browsers
   try{
      ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
   }catch (e) {
      try{
         ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
      }catch (e){
         // Something went wrong
         alert("Your browser broke!");
         return false;
      }
   }
 } 
}
$("#BUTTON").click(function(){
    
    var data = $('form').serialize();
    console.log(data);
    $.ajax({
        type: "POST",
        url : "Form_Data.php",
        data : data,
        success: function(message){
                    console.log(message);
                 }
    });
}); 





