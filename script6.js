var hours6 = 0;
var mins6 = 0;
var seconds6 = 0;
var money6 = 0;
var i6=0;
var k6 = 0;
$('#tarifA6').click(function(e) {
    e.preventDefault();

    function reqListener () {
        console.log(this.responseText);
      }
  
      var oReq = new XMLHttpRequest(); 
      oReq.onload = function() {
          var ok=0;
          ok=parseFloat(this.responseText);
         
              k6=ok;
          
         
      };
      oReq.open("get", "TarifA.php", true);
     
      oReq.send();
    
        
        
    }
    );

     $('#tarifB6').click(function(e) {
        e.preventDefault();

        function reqListener () {
            console.log(this.responseText);
          }
      
          var oReq = new XMLHttpRequest(); 
          oReq.onload = function() {
              var ok=0;
              ok=parseFloat(this.responseText);
             
                  k6=ok;
              
             
          };
          oReq.open("get", "TarifB.php", true);
         
          oReq.send();
        
            
            
        }
        );

        $('#tarifC6').click(function(e) {
            e.preventDefault();

            function reqListener () {
                console.log(this.responseText);
              }
          
              var oReq = new XMLHttpRequest(); 
              oReq.onload = function() {
                  var ok=0;
                  ok=parseFloat(this.responseText);
                 
                      k6=ok;
                  
                 
              };
              oReq.open("get", "TarifC.php", true);
             
              oReq.send();
            
                
                
            }
            );
$('#start6').click(function(e) {
    e.preventDefault();

    startTimer6();
});

$('#stop6').click(function(e) {
    e.preventDefault();

    clearTimeout(timex6);
});

$('#reset6').click(function(e) {
    e.preventDefault();

    hours6 = 0;
    mins6 = 0;
    seconds6 = 0;
    hours6=0;
    money6 = 0;
    $('#mins6').html('00:');
    $('#seconds6').html('00');
    $('#hours6').html('00:');
    $('#money6').html('0 TND');
    clearTimeout(timex6);
    k6=0;
    i6=0;
    

});


function startTimer6() {
    timex6 = setTimeout(function() {
        seconds6++;
        if (seconds6 > 59) {
            seconds6 = 0;
            mins6++;
            i6++;
            if (mins6 > 59) {
                mins6 = 0;
                hours6++;
                if (hours6 < 10) { $("#hours6").text('0' + hours6 + ':') } else $("#hours6").text(hours6 + ':');
            }

            if (mins6 < 100000000000000) {
                $("#mins6").text('0' + mins6 + ':');
                $('#money6').text(i6* k6 + 'TND');
            } else $("#mins6").text(mins6 + ':');

        }
        if (seconds6 < 10) {
            $("#seconds6").text('0' + seconds6);
        } else {
            $("#seconds6").text(seconds6);
        }


        startTimer6();
    }, 1000);
}