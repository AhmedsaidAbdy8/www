var mins5 = 0;
var hours5 = 0;
var seconds5 = 0;
var money5 = 0;
var k5 = 0;
var i5=0;
$('#tarifA5').click(function() {
    function reqListener () {
        console.log(this.responseText);
      }
  
      var oReq = new XMLHttpRequest(); 
      oReq.onload = function() {
          var ok=0;
          ok=parseFloat(this.responseText);
         
              k5=ok;
              
          
         
      };
      oReq.open("get", "TarifA.php", true);
     
      oReq.send();});
     $('#tarifB5').click(function() {
        function reqListener () {
            console.log(this.responseText);
          }
      
          var oReq = new XMLHttpRequest(); 
          oReq.onload = function() {
              var ok=0;
              ok=parseFloat(this.responseText);
             
                  k5=ok;
              
             
          };
          oReq.open("get", "TarifB.php", true);
         
          oReq.send();
        
            
            
        }
        );

        $('#tarifC5').click(function() {
            function reqListener () {
                console.log(this.responseText);
              }
          
              var oReq = new XMLHttpRequest(); 
              oReq.onload = function() {
                  var ok=0;
                  ok=parseFloat(this.responseText);
                 
                      k5=ok;
                  
                 
              };
              oReq.open("get", "TarifC.php", true);
             
              oReq.send();
            
                
                
            }
            );
$('#start5').click(function(e) {
    e.preventDefault();

    startTimer5();
});

$('#stop5').click(function(e) {
    e.preventDefault();

    clearTimeout(timex5);
});

$('#reset5').click(function(e) {
    e.preventDefault();

    hours5 = 0;
    mins5 = 0;
    seconds5 = 0;
    hours5=0;
    money5 = 0;
    $('#mins5').html('00:');
    $('#seconds5').html('00');
    $('#hours5').html('00:');
    $('#money5').html('0 TND');
    clearTimeout(timex5);
    k5=0;
    i5=0;
});

function startTimer5() {
    timex5 = setTimeout(function() {
        seconds5++;
        if (seconds5 > 59) {
            seconds5 = 0;
            mins5++;
            i5++;
            if (mins5 > 59) {
                mins5 = 0;
                hours5++;
                if (hours5 < 10) { $("#hours5").text('0' + hours5 + ':') } else $("#hours5").text(hours5 + ':');
            }

            if (mins5 < 100000000000000) {
                $("#mins5").text('0' + mins5 + ':');
                $('#money5').text(i5 * k5 + 'TND');
            } else $("#mins5").text(mins5 + ':');

        }
        if (seconds5 < 10) {
            $("#seconds5").text('0' + seconds5);
        } else {
            $("#seconds5").text(seconds5);
            
        }


        startTimer5();
        
    }, 1000);}