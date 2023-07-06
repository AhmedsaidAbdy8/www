var hours2 = 0;
var mins2= 0;
var seconds2 = 0;
var money2 = 0;
var k2 = 0;
var i2=0;
$('#tarifA2').click(function(e) {
    e.preventDefault();
    function reqListener () {
        console.log(this.responseText);
      }
  
      var oReq = new XMLHttpRequest(); 
      oReq.onload = function() {
          var ok=0;
          ok=parseFloat(this.responseText);
         
              k2=ok;
          
         
      };
      oReq.open("get", "TarifA1.php", true);
     
      oReq.send();});
     $('#tarifB2').click(function(e) {
        e.preventDefault();
    function reqListener () {
        console.log(this.responseText);
      }
  
      var oReq = new XMLHttpRequest(); 
      oReq.onload = function() {
          var ok=0;
          ok=parseFloat(this.responseText);
         
              k2=ok;
          
         
      };
      oReq.open("get", "TarifB1.php", true);
     
      oReq.send();});
        $('#tarifC2').click(function(e) {
            e.preventDefault();
    function reqListener () {
        console.log(this.responseText);
      }
  
      var oReq = new XMLHttpRequest(); 
      oReq.onload = function() {
          var ok=0;
          ok=parseFloat(this.responseText);
         
              k2=ok;
          
         
      };
      oReq.open("get", "TarifC1.php", true);
     
      oReq.send();});

$('#start2').click(function(e) {
    e.preventDefault();

    startTimer2();
});

$('#stop2').click(function(e) {
    e.preventDefault();

    clearTimeout(timex2);
});

$('#reset2').click(function(e) {
    e.preventDefault();

    hours2 = 0;
    mins2 = 0;
    seconds2 = 0;
    hours2=0;
    money2 = 0;
    $('#mins2').html('00:');
    $('#seconds2').html('00');
    $('#hours2').html('00:');
    $('#money2').html('0 TND');
    clearTimeout(timex2);
    k2=0;
    i2=0;

});


function startTimer2() {
    timex2 = setTimeout(function() {
        seconds2++;
        if (seconds2 > 59) {
            seconds2 = 0;
            mins2++;
            i2++;
            if (mins2 > 59) {
                mins2 = 0;
                hours2++;
                if (hours2 < 10) { $("#hours2").text('0' + hours2 + ':') } else $("#hours2").text(hours2 + ':');
            }

            if (mins2 < 100000000000000) {
                $("#mins2").text('0' + mins2 + ':');
                $('#money2').text(i2* k2 + 'TND');
            } else $("#mins2").text(mins2 + ':');

        }
        if (seconds2 < 10) {
            $("#seconds2").text('0' + seconds2);
        } else {
            $("#seconds2").text(seconds2);
        }


        startTimer2();
    }, 1000);
}