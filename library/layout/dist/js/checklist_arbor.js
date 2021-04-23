
$('.ajax-link-1').click(function() {
                
    var task = $(this).attr('data-val');

    $.ajax({url: "./update_checklist.php?f=atualiza_cl_ok&task="+task, success: function(result){
              
        $('#checklist').empty(); 
        $('#checklist').load('checklist.php'); 
    
    }});

});

$('.ajax-link-2').click(function() {
            
    var task = $(this).attr('data-val');

    $.ajax({url: "./update_checklist.php?f=atualiza_cl_error&task="+task, success: function(result){
                  
          $('#checklist').empty(); 
          $('#checklist').load('checklist.php'); 
    
    }});

});
