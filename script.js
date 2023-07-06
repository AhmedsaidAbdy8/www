var hours = 0;
var mins = 0;
var seconds = 0;
var money = 0;
var k = 0;
var i=0;

function GetCurrentTime() {
  
        my_current_timestamp = new Date();              //stamp current date & time
        return my_current_timestamp.getTime();
        }
$('#tarifA').click(function(e) {
    e.preventDefault();
    function reqListener () {
        console.log(this.responseText);
      }
  
      var oReq = new XMLHttpRequest(); 
      oReq.onload = function() {
          var ok=0;
          ok=parseFloat(this.responseText);
         
              k=ok;
          
         
      };
      oReq.open("get", "TarifA1.php", true);
     
      oReq.send();
    
        
        
    }
    );

     $('#tarifB').click(function(e) {
        e.preventDefault();
        function reqListener () {
            console.log(this.responseText);
          }
      
          var oReq = new XMLHttpRequest(); 
          oReq.onload = function() {
              var ok=0;
              ok=parseFloat(this.responseText);
             
                  k=ok;
              
             
          };
          oReq.open("get", "TarifB1.php", true);
         
          oReq.send();
        
            
            
        }
        );

        $('#tarifC').click(function(e) {
            e.preventDefault();
            function reqListener () {
                console.log(this.responseText);
              }
          
              var oReq = new XMLHttpRequest(); 
              oReq.onload = function() {
                  var ok=0;
                  ok=parseFloat(this.responseText);
                 
                      k=ok;
                  
                 
              };
              oReq.open("get", "TarifC1.php", true);
             
              oReq.send();
            
                
                
            }
            );

$('#start').click(function(e) {
    e.preventDefault();
    
    startTimer();
   
    });
  
   
    
    


$('#stop').click(function(e) {
    e.preventDefault();
    clearTimeout(timex);

    
});

$('#reset').click(function(e) {
    e.preventDefault();

    hours = 0;
    mins = 0;
    seconds = 0;
    hours=0;
    money = 0;
    $('#mins').html('00:');
    $('#seconds').html('00');
    $('#hours').html('00:');
    $('#money').html('0 TND');
  

        
i=0;

    
    k=0;

    });

   


function startTimer() {
    timex = setTimeout(function() {
        seconds++;
        if (seconds > 59) {
            seconds = 0;
            mins++;
            i++;
            if (mins > 59) {
                mins = 0;
                hours++;
                if (hours < 10) { $("#hours").text('0' + hours + ':') } else $("#hours").text(hours + ':');
            }

            if (mins < 100000000000000) {
                $("#mins").text('0' + mins + ':');
                $('#money').text(i * k + 'TND');
            } else $("#mins").text(mins + ':');

        }
        if (seconds < 10) {
            $("#seconds").text('0' + seconds);
        } else {
            $("#seconds").text(seconds);
            
        }


        startTimer();
        
    }, 1000);}