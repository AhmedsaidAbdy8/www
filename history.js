$('#history').click(function(e){
    e.preventDefault();
    $.ajax({
        type:"post",
        url:"history.php",
        data:$('#his').serialize(),
        datatype:"html",
        success: function(response){
            $('messagedisplay').text(response);
        }
    });
})
    







