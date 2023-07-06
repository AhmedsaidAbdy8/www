var hours7 = 0;
var mins7 = 0;
var seconds7 = 0;
var money7 = 0;
var i7 = 0;
var k7= 0;
$('#tarifA7').click(function(e) {
    function id (e) {
        e.preventDefault();
    }

    function reqListener () {
        console.log(this.responseText);
      }
  
      var oReq = new XMLHttpRequest(); 
      oReq.onload = function() {
          var ok=0;
          ok=parseFloat(this.responseText);
         
              k7=ok;
              
          
         
      };
      oReq.open("get", "TarifA.php", true);
     
      oReq.send() });
     $('#tarifB7').click(function(e) {
        e.preventDefault();

        function reqListener () {
            console.log(this.responseText);
          }
      
          var oReq = new XMLHttpRequest(); 
          oReq.onload = function() {
              var ok=0;
              ok=parseFloat(this.responseText);
             
                  k7=ok;
              
             
          };
          oReq.open("get", "TarifB.php", true);
         
          oReq.send();
        
            
            
        }
        );

        $('#tarifC7').click(function(e) {
            e.preventDefault();

            function reqListener () {
                console.log(this.responseText);
              }
          
              var oReq = new XMLHttpRequest(); 
              oReq.onload = function() {
                  var ok=0;
                  ok=parseFloat(this.responseText);
                 
                      k7=ok;
                  
                 
              };
              oReq.open("get", "TarifC.php", true);
             
              oReq.send();
            
                
                
            }
            );


$('#start7').click(function() {
    startTimer7();
    function id (e) {
        e.preventDefault();
    }
});

$('#stop7').click(function(e) {
    e.preventDefault();

    clearTimeout(timex7);
});

$('#reset7').click(function(e) {
    e.preventDefault();

    hours7 = 0;
    mins7 = 0;
    seconds7 = 0;
    hours7=0;
    money7 = 0;
    $('#mins7').html('00:');
    $('#seconds7').html('00');
    $('#hours7').html('00:');
    $('#money7').html('0 TND');
    clearTimeout(timex7);
    k7=0;
    i7=0;

});


function startTimer7() {
    timex7 = setTimeout(function() {
        seconds7++;
        if (seconds7 > 59) {
            seconds7 = 0;
            mins7++;
            i7++
            if (mins7 > 59) {
                mins7 = 0;
                hours7++;
                if (hours7 < 10) { $("#hours7").text('0' + hours7 + ':') } else $("#hours7").text(hours7 + ':');
            }

            if (mins7 < 100000000000000) {
                $("#mins7").text('0' + mins7 + ':');
                $('#money7').text(i7 * k7 + 'TND');
            } else $("#mins7").text(mins7 + ':');

        }
        if (seconds7 < 10) {
            $("#seconds7").text('0' + seconds7);
        } else {
            $("#seconds7").text(seconds7);
        }


        startTimer7();
    }, 1000);
}