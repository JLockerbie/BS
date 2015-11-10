<!DOCTYPE html>
<html lang="en-UK">
<head>
<meta charset="UTF-8">
<title>Bright Sparks</title>

<style>
body {
  font-family: Lucida Sans;
  font-size: 100%;
  margin: 20px;
  line-height: 26px;
  background-color: #ffffff;
}


#top {
  margin:auto;
  width: 100%;
  background-color: #ffffff;
  text-align: right;
  line-height: 50px;
  min-height: 100px; 
}

#top .column {
  position: relative;
  width: 50%;
}

#top .left {
  float: left;
  text-align: left;
}

.pdf {
  /*position:relative;*/
  width: 30%;
}


#bottom {
  margin:auto;
  width: 85%;
  background-color: #ffffff;
  text-align: center;
  line-height: 200px;
  height: 70px;
}

a {
    color: #000000;
    text-decoration: underline;
    font-size:14px;
}


a.bottom {
    color: #000000;
    text-decoration: underline;
    font-size:14px;

}

a:hover {
    text-decoration: none;
}

a img{
    border:0;
}

table {
  width: 100%;
  font-size:100%;
  vertical-align:top;
  
}

@media only screen and (max-width: 1300px) {
  table {
    font-size:14px;
  }
}

table td {
  vertical-align:top;
  padding-bottom:20px;
}

td.a {
  color: #000000;

}

td.b {
  color: #95A5A5;
}

h2 span { 
  margin-left: 0px;
  margin-bottom: 30px;
  margin-top: 0px;
  color: #ffffff;
  text-align: left;
  background-color: #8D44AF;
  padding: 0px 4px 0px 4px;
  font-size: 200%;
  line-height: 1.2;
  font-family: "Lucida Grande", "Lucida Sans Unicode", "Lucida Sans", Tahoma, sans-serif;
  font-weight:400; 
}

@media only screen and (max-width: 1300px) {
  h2 span {
    font-size:150%;
  }
}

h3#category { 
  margin-left: 0px;
  margin-bottom: 30px;
  font-size: 18px;
  line-height: 18px;
  font-family: "Century Gothic", "Lucida Sans", Tahoma, sans-serif;
}

h3.role {
  margin-left: 0px;
  font-style: italic;
  font-size: 18px;
  font-family: "Franklin Gothic Medium", "Franklin Gothic", "ITC Franklin Gothic",Tahoma, sans-serif;
}

@media only screen and (max-width: 1300px) {
  h3.role {
    font-size:16px;
  }
}

h3.think { 
  font-size: 150%;
  font-family: Tahoma, sans-serif;
  font-weight:500;
  line-height: 36px;
}

@media only screen and (max-width: 1300px) {
  h3.think {
    font-size:125%;
  }
}

h4.concrete{ 
  margin-bottom: 0px;
  margin-top: 0px;
  font-size: 125%;
  font-family: "Century Gothic", "Lucida Sans", Tahoma, sans-serif;
  color: #95A5A5;
}

@media only screen and (max-width: 1300px) {
  h4.concrete {
    font-size:125%;
  }
}

input#btnCallWebService, #newclues, #cluesback {
  margin-left: 0px;
  padding: 7px;
  font-family: Lucida Sans, Tahoma, sans-serif;
  font-size:18px;
  font-weight:600;
  outline: none;
  cursor: pointer;
  text-align: center;
  text-decoration: none;
  color: #ffffff;
  border: solid 1px #2DCC70;
  background-color: #2DCC70;
  border-radius: 4px 4px 4px 4px;
  
}

input#btnCallWebService:hover {
  background-color:#3598DC;
  border: solid 1px #3598DC;
  //Dark green (nephitis)
  //background-color:#27AE61;
  //border: solid 1px #27AE61;
}

input#newclues:hover, #cluesback:hover {
  background-color:#3598DC;
  border: solid 1px #3598DC;
  //background-color:#F39B13;
  //border: solid 1px #F39B13;
}

input#btntxt {
  margin: 0px;
  padding: 0px;
  font: 100% "Arial Black", Gadget, sans-serif;
  font-size:15px;
  font-weight:bold;
  outline: none;
  cursor: pointer;
  text-align: left;
  text-decoration: none;
  color: #2DCC70;  
  border: none;
  background: #ffffff;
}

input #btntxt:hover {
  text-decoration: underline;
  title: "Opens new window";
}

div.myButton input {
  background:url(BrightSparks_PDF.png) no-repeat;
  clear: both;
  cursor:pointer;
  width: 81px;
  height: 99px;
  border: none;
  margin-top:10px;
}

.col-1,
.col-2 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px;
  float: left;
}

.col-1-1,
.col-1-2 {
  position: relative;
  min-height: 1px;
  padding-right: 10px;
  float: left;
}


.col-1 {
  width: 60%
}

.col-2 {
  width: 30%
}

.col-1-1 {
  width: 30%
}

.col-1-1 img {
  max-width: 100%
}

.col-1-2 {
  width: 60%
}

@media only screen and (max-width: 1300px) {
  .col-1-2 {
    font-size:14px;
  }
}

.row {
  margin-right: -15px;
  margin-left: -15px;
}

.row:before,
.row:after {
  display: table;
  content: " ";
}

.row:after {
  clear: both;
}

.row:before,
.row:after {
  display: table;
  content: " ";
}

.row:after {
  clear: both;
}

.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto;
}

.container:before,
.container:after {
  display: table;
  content: " ";
}

.container:after {
  clear: both;
}

.container:before,
.container:after {
  display: table;
  content: " ";
}

.container:after {
  clear: both;
}

@media (min-width: 768px) {
  .container {
    width: 750px;
  }
}

@media (min-width: 992px) {
  .container {
    width: 970px;
  }
}

@media (min-width: 1200px) {
  .container {
    width: 1170px;
  }
}


</style>

<script>
function load()
 	{
	  $(document).ready(function () {
   	  $("#btnCallWebService").trigger('click');
	});

}
</script>

</head>
<body onload="load()">

  <div class="container">
  <div id="top">
	<div class="left column">
	  <img src="BrightSparks_LOGO.png" height="75" >
	</div>

   
     <?php
       if(isset($_GET['version']) && $_GET['version'] == "fiat"){ 
         echo "<a href='JavaScript: infopop()'><img src='BrightSparks_HELP.png' height='75'></a>";
       } else {
         echo "<a href='JavaScript: infopop4()'><img src='BrightSparks_SETTINGS.png' height='75'></a>";
         echo "<a href='JavaScript: infopop3()'><img src='BrightSparks_MINDMUP.png' height='75'></a>";
         echo "<a href='JavaScript: infopop2()'><img src='BrightSparks_CONTACT.png' height='75'></a>";
         echo "<a href='JavaScript: infopop()'><img src='BrightSparks_HELP.png' height='75'></a>";

       }
     ?>
  </div>
	

 <div class="row">
    <div class="col-1">

	<input id="btnCallWebService" value="New Persona " type="button" />

	<form method=post action='' name=f1>
	  <input type=hidden id="p_name" name='p_name' value='Art,Design,Music,Science,Superhero,TV,Film,Literature,Politics,Sport,Business,Religion,Crime,Magic,Games,Food,Explorer,' autocomplete="off"> 
	</form>


	<h3 id="category"><span id="jType"></span></h3>
	<h2><span id="jName2"></span></h2>
	<h3 class="role"><span id="jRole"></span></h3>

     <div class="col-1-1"> 
	   <div><a id="imageLink" title="" href="" target="_blank"><img class="" id="myImage" src="" align="left" height="150"></a></div>
      
        <div class="pdf">
	    <form action="PersonaPDF.php" method="POST" target="_blank">
    	    <input type="hidden" id="namepdf" name="name" value="">
	    <input type="hidden" id="charspdf" name="characteristics" value="">
	    <input type="hidden" id="imagepdf" name="image" value="">
	    <input type="hidden" id="cluespdf" name="clues" value="">
    	    <div class="myButton"><input type="submit" id="pdfgen" value=""></div>
	    </form>
        </div>
     </div>
     <div class="col-1-2"> 
	  <h4 class="concrete">Characteristics</h4>
       <span id="jCharacteristics"></span><br>

       <form action="http://www.google.com/search" name="searchbox" method="get" target="_blank"/>
	    <input type="hidden" name="hl" value="en" />
	    <input type="hidden" name="ie" value="ISO-8859-1" />
	    <input type="hidden" id="googletext" maxlength="256" size="40" name="q" value="" />
	    <input type="submit" id="btntxt" value="" name="btnG"/>
       </form>
     </div>
   </div>
      
   <div class="col-2">
	<input id="newclues" value="New Spark" type="button" align="right"/>
	<input id="cluesback" value="Previous clue" type="button" align="right"/>
	<h3 class="think">Think about how <i><span id="jName"></span></i> would go about your design challenge...</h3>
	<h4 class="concrete">Creative clues</h4>

	<span id="clues"></span>
   </div>
    
   </div>
  </div>
 </div>



    <div id="bottom">
      <a class="bottom" href="http://projectcollage.eu/" target="_blank"><img src="logo.png" align="center" height="60"></a>
    </div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">


$(document).ready(function () {

//Global variables for the retrieved clues
var JSONObjectClues ="";
var clicks = 0;

//Global variables for the retrieved personas
var name = "";
var prevName = "";
var characteristics = "";
var personaClicks = 0;

var allCats = "Art,Design,Music,Science,Superhero,TV,Film,Literature,Politics,Sport,Business,Religion,Crime,Magic,Games,Food,Explorer,";

//Global variable for the pdf generation
var namepdf = "";

     $("#btnCallWebService").click(function (event) {

	var types = document.getElementById("p_name").value;


        $.ajax({
            type: "POST",
            url: "retrievePersonaFromTypesSimple.php",
		 data: {types: types},
		 async: false,
            success: function (data) {

		var JSONObject = jQuery.parseJSON(data.slice(data.search("{")));	
		document.getElementById("jName").innerHTML=JSONObject.Name;
		document.getElementById("jName2").innerHTML=JSONObject.Name.toUpperCase();
		document.getElementById("jRole").innerHTML=JSONObject.Role;
		document.getElementById("jType").innerHTML=JSONObject.Type;
		document.getElementById("jCharacteristics").innerHTML=JSONObject.Characteristics;
		
		var url = JSONObject.ImageUrl;
		document.getElementById("myImage").src = url;

           var ref = JSONObject.ImageRef;
		document.getElementById("imageLink").title = ref;

           var link = JSONObject.ImageSource;
		document.getElementById("imageLink").href = link;

		var clues = JSONObject.Prompts;
		
		var type = JSONObject.Type;
		name = JSONObject.Name;		
		characteristics = JSONObject.Characteristics;

		// variables for pdf print
		document.getElementById("namepdf").value = name;
		document.getElementById("charspdf").value = characteristics;
		document.getElementById("imagepdf").value = url;
		document.getElementById("cluespdf").value = clues;

		
		// variables for the google search
		document.getElementById ("googletext").value = name + "+" + type;
		document.getElementById ("btntxt").value = "Learn more about " + name + " via the Web >>";

		personaClicks += 1;
                document.getElementById('newclues').style.visibility='visible'; // show

			$.ajax({	
				type: "POST",
            			url: "retrieveClues.php",
            			data: {name: name, prevName: prevName, personaClicks: personaClicks},
            			success: function(data)
                    			{
						clicks = 0;
						
						JSONObjectClues = jQuery.parseJSON(data);
						var clue="<table><tr><td><img src='BrightSparks_BULB.png' height='45' ></td><td>" + JSONObjectClues[2] + "</td></tr><tr><td><img src='BrightSparks_BULB.png' height='45' ></td><td>" + JSONObjectClues[1] + "</td></tr><tr><td><img src='BrightSparks_BULB.png' height='45' ></td><td>" + JSONObjectClues[0] + "</td></tr></table>";
						document.getElementById("clues").innerHTML=clue;
						prevName = name;
						
						document.getElementById('cluesback').style.visibility='hidden'; // hide
                    			}
                		});
	
            },
            error: function (xhr, status, errorDesc) {
                alert(errorDesc);
            }
                });

            });
		
	// new clue function

	$("#newclues").click(function (event) {

        var numClues = Object.keys(JSONObjectClues).length-3;	
	
	
	if(clicks < numClues){

	var clue="<table><tr><td><img src='BrightSparks_BULB.png' height='45' ></td><td class='a'>" + JSONObjectClues[clicks+3] + "</td></tr><tr><td><img src='BrightSparks_BULB.png' height='45' ></td><td class='b'>" + JSONObjectClues[clicks+2] + "</td></tr><tr><td><img src='BrightSparks_BULB.png' height='45' ></td><td class='b'>" + JSONObjectClues[clicks+1] + "</td></tr></table>";
	document.getElementById("clues").innerHTML=clue;

	clicks += 1;
	document.getElementById('cluesback').style.visibility='visible'; // show

	} else {
	document.getElementById('newclues').style.visibility='hidden'; // hide 
	}

        });


        //});


	// go back up the clues array function

	$("#cluesback").click(function (event) {

        var numClues = Object.keys(JSONObjectClues).length-3;	
	
	
	if(clicks > 0){

	var clue="<table><tr><td><img src='BrightSparks_BULB.png' height='45' ></td><td class='a'>" + JSONObjectClues[clicks+1] + "</td></tr><tr><td><img src='BrightSparks_BULB.png' height='45' ></td><td class='b'>" + JSONObjectClues[clicks+0] + "</td></tr><tr><td><img src='BrightSparks_BULB.png' height='45' ></td><td class='b'>" + JSONObjectClues[clicks-1] + "</td></tr></table>";
	document.getElementById("clues").innerHTML=clue;

	clicks -= 1;
	document.getElementById('newclues').style.visibility='visible'; // show
	} else {

	document.getElementById('cluesback').style.visibility='hidden'; // hide 
	}

     });
   });


</script>



<script type="text/JavaScript">
<!-- Begin
function infopop()
 {
window.open('help.html','infopop','toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=yes,copyhistory=no,scrollbars=yes,width=600,height=600');
 }
function infopop2()
 {
window.open('contact.html','infopop2','toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=yes,copyhistory=no,scrollbars=yes,width=600,height=550');
 }
function infopop3()
 {
window.open('mindmup.html','infopop3','toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=yes,copyhistory=no,scrollbars=yes,width=500,height=400');
 }

function infopop4()
 {
window.open('settings.html','infopop4','toolbar=no,location=no,directories=no,status=no,menubar=no,resizable=yes,copyhistory=no,scrollbars=yes,width=600,height=500');
 }




//-->

//Hide the go back clues button
	document.getElementById('cluesback').style.visibility='hidden'; // hide
</script>


</body>
</html>

