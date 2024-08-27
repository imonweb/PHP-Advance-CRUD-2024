$(document).ready(function() {
  // add user
  // alert('hello');
  $(document).on("submit", "#addform", function(e){
    e.preventDefault();
    // ajax
    $.ajax({
      url: "/php_crud_2024/ajax.php",
      type: "POST",
      dataType: "json",
      data: new FormData(this),
      processData: false,
      contentType: false,
      beforeSend: function(){
        console.log("Wait... Data is loading");
      },
      success: function(response){
        console.log(response);
      },
      error: function(request, error){
        console.log(arguments);
        console.log("Error: " + error)
      }
    })
  })
});