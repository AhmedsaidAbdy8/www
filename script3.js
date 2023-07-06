var mins3 = 0;
var hours3 = 0;
var seconds3 = 0;
var money3 = 0;
var k3 = 0;
var i3=0;

$('#tarifA3').click(function(e) {
    e.preventDefault();

    function reqListener () {
        console.log(this.responseText);
      }
  
      var oReq = new XMLHttpRequest(); 
      oReq.onload = function() {
          var ok=0;
          ok=parseFloat(this.responseText);
         
              k3=ok;
          
         
      };
      oReq.open("get", "TarifA.php", true);
     
      oReq.send();
    
        
        
    }
    );
     $('#tarifB3').click(function(e) {
        e.preventDefault();

        function reqListener () {
            console.log(this.responseText);
          }
      
          var oReq = new XMLHttpRequest(); 
          oReq.onload = function() {
              var ok=0;
              ok=parseFloat(this.responseText);
             
                  k3=ok;
              
             
          };
          oReq.open("get", "TarifB.php", true);
         
          oReq.send();
        
            
            
        }
        );
        $('#tarifC3').click(function(e) {
            e.preventDefault();

            function reqListener () {
                console.log(this.responseText);
              }
          
              var oReq = new XMLHttpRequest(); 
              oReq.onload = function() {
                  var ok=0;
                  ok=parseFloat(this.responseText);
                 
                      k3=ok;
                  
                 
              };
              oReq.open("get", "TarifC.php", true);
             
              oReq.send();
            
                
                
            }
            );

$('#start3').click(function(e) {
    e.preventDefault();

    startTimer3();
});

$('#stop3').click(function(e) {
    e.preventDefault();

    clearTimeout(timex3);
});

$('#reset3').click(function(e) {
    e.preventDefault();

    hours3 = 0;
    mins3 = 0;
    seconds3 = 0;
    hours3=0;
    money3 = 0;
    $('#mins3').html('00:');
    $('#seconds3').html('00');
    $('#hours3').html('00:');
    $('#money3').html('0 TND');
    clearTimeout(timex3);
    k3=0;
i3=0;
});

function startTimer3() {
    timex3 = setTimeout(function() {
        seconds3++;
        if (seconds3 > 59) {
            seconds3 = 0;
            mins3++;
            i3++;
            if (mins3 > 59) {
                mins3 = 0;
                hours3++;
                if (hours3 < 10) { $("#hours3").text('0' + hours3 + ':') } else $("#hours3").text(hours3 + ':');
            }

            if (mins3 < 100000000000000) {
                $("#mins3").text('0' + mins3 + ':');
                $('#money3').text(i3 * k3 + 'TND');
            } else $("#mins3").text(mins3 + ':');

        }
        if (seconds3 < 10) {
            $("#seconds3").text('0' + seconds3);
        } else {
            $("#seconds3").text(seconds3);
        }


        startTimer3();
    }, 1000);
}