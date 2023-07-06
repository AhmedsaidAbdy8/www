var mins4 = 0;
var hours4 = 0;
var seconds4 = 0;
var money4 = 0;
var k4 = 0;
var i4=0;
$('#tarifA4').click(function(e) {
    e.preventDefault();
    function reqListener () {
        console.log(this.responseText);
      }
  
      var oReq = new XMLHttpRequest(); 
      oReq.onload = function() {
          var ok=0; 
          ok=parseFloat(this.responseText);
         
              k4=ok;
          
         
      };
      oReq.open("get", "TarifA.php", true);
     
      oReq.send();
    
        
        
    }
    );
     $('#tarifB4').click(function(e) {
        e.preventDefault()
        function reqListener () {
            console.log(this.responseText);
          }
      
          var oReq = new XMLHttpRequest(); 
          oReq.onload = function() {
              var ok=0;
              ok=parseFloat(this.responseText);
             
                  k4=ok;
              
             
          };
          oReq.open("get", "TarifB.php", true);
         
          oReq.send();
        
            
            
        }
        );

        $('#tarifC4').click(function(e) {
            e.preventDefault();
            function reqListener () {
                console.log(this.responseText);
              }
          
              var oReq = new XMLHttpRequest(); 
              oReq.onload = function() {
                  var ok=0;
                  ok=parseFloat(this.responseText);
                 
                      k4=ok;
                  
                 
              };
              oReq.open("get", "TarifC.php", true);
             
              oReq.send();
            
                
                
            }
            );


$('#start4').click(function(e) {
    e.preventDefault();
    startTimer4();
});

$('#stop4').click(function(e) {
    e.preventDefault();
    clearTimeout(timex4);
});

$('#reset4').click(function(e) {
    e.preventDefault();
    hours4 = 0;
    mins4 = 0;
    seconds4 = 0;
    hours4=0;
    money4 = 0;
    $('#mins4').html('00:');
    $('#seconds4').html('00');
    $('#hours4').html('00:');
    $('#money4').html('0 TND');
    clearTimeout(timex4);
    k4=0;
    i4=0;

});

function startTimer4() {
    timex4 = setTimeout(function() {
        seconds4++;
        if (seconds4 > 59) {
            seconds4 = 0;
            mins4++;
            i4++;
            if (mins4 > 59) {
                mins4 = 0;
                hours4++;
                if (hours4 < 10) { $("#hours4").text('0' + hours4 + ':') } else $("#hours4").text(hours4 + ':');
            }

            if (mins4 < 100000000000000) {
                $("#mins4").text('0' + mins4 + ':');
                $('#money4').text(i4 * k4 + 'TND');
            } else $("#mins4").text(mins4 + ':');

        }
        if (seconds4 < 10) {
            $("#seconds4").text('0' + seconds4);
        } else {
            $("#seconds4").text(seconds4);
        }

        startTimer4();
    }, 1000);
}