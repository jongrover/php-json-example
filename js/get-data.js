$(function(document){

  var endpoint = 'api/endpoint.php',
      $table = $('#test-sessions');

  $.getJSON(endpoint, function (response) {
    $.each(response, function(i, obj) {
      console.log(i, obj);
      $table.append('<tr>'+
                      '<td><input type="radio" name="session-choice" value="'+i+'" '+obj.radioButtonStatus+'></td>'+
                      '<td>'+obj.testDate+', '+obj.testDOM+'</td>'+
                      '<td>'+obj.testLoc+'</td>'+
                      '<td>'+obj.testTime+'</td>'+
                      '<td>'+obj.testVEC+'</td>'+
                    '</tr>');
    });
  });
});
