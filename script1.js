var hours1 = 0;
var mins1 = 0;
var seconds1 = 0;
var money1 = 0;
var k1 = 0;
var i1=0;
$('#tarifA1').click(function() {
    function reqListener () {
        console.log(this.responseText);
      }
  
      var oReq = new XMLHttpRequest(); 
      oReq.onload = function() {
          var ok=0;
          ok=parseFloat(this.responseText);
         
              k1=ok;
              
          
         
      };
      oReq.open("get", "TarifA1.php", true);
     
      oReq.send();});
     $('#tarifB1').click(function() {
        function reqListener () {
            console.log(this.responseText);
          }
      
          var oReq = new XMLHttpRequest(); 
          oReq.onload = function() {
              var ok=0;
              ok=parseFloat(this.responseText);
             
                  k1=ok;
              
             
          };
          oReq.open("get", "TarifB1.php", true);
         
          oReq.send();
        
            
            
        }
        );

        $('#tarifC1').click(function() {
            function reqListener () {
                console.log(this.responseText);
              }
          
              var oReq = new XMLHttpRequest(); 
              oReq.onload = function() {
                  var ok=0;
                  ok=parseFloat(this.responseText);
                 
                      k3=ok;
                  
                 
              };
              oReq.open("get", "TarifC1.php", true);
             
              oReq.send();
            
                
                
            }
            );

    

$('#start1').click(function() {
   
    startTimer1();
    
    
});

$('#stop1').click(function() {
    clearTimeout(timex1);
});

$('#reset1').click(function() {
    hours1 = 0;
    mins1 = 0;
    seconds1 = 0;
    hours1=0;
    money1 = 0;
    $('#mins1').html('00:');
    $('#seconds1').html('00');
    $('#hours1').html('00:');
    $('#money1').html('0 TND');
    clearTimeout(timex1);
    i1=0;
k1=0;
});


function startTimer1() {
    timex1 = setTimeout(function() {
        seconds1++;
        
        if (seconds1 > 59) {
            seconds1 = 0;
            mins1++;
            i1++;
            if (mins1 > 59) {
                mins1 = 0;
                hours1++;
                if (hours1 < 10) { $("#hours1").text('0' + hours1 + ':') } else $("#hours1").text(hours1 + ':');
            }

            if (mins1 < 100000000000000) {
                $("#mins1").text('0' + mins1 + ':');
                $('#money1').text(i1 * k1 + 'TND');
            } else $("#mins1").text(mins1 + ':');

        }
        if (seconds1 < 10) {
            $("#seconds1").text('0' + seconds1);
        } else {
            $("#seconds1").text(seconds1);
        }


        startTimer1();
    }, 1000);
}