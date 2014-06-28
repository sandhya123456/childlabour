
<h1>Enter any number number</h1>
<form id="squearecal">
<input type="text" id="number" class="number" size="20">
<BUTTON type="button" id="calbtn" onclick="Javascript:return Getcalculate();">Calculate</button>
</form>
<h2>Square of <span id="entervlue"></span> = <span id="result"></span></h2>
<h2>Square root of  <span id="entervlue"></span> = <span id="resultsr"></span></h2><br>


<script>

function Getcalculate(){
 //var enteruservalue = document.getElementById('number');
 
var enteruservalue = document.getElementById("number").value;
var squareroot = Math.sqrt(enteruservalue);
document.getElementById('entervlue').innerHTML = enteruservalue;
var res = enteruservalue * enteruservalue;
document.getElementById('result').innerHTML = res;
document.getElementById('resultsr').innerHTML = squareroot;

}

</script>

