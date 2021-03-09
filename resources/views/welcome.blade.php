<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Typing2 in English</title>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<style type="text/css">
	.body{width: 100%;
    height: 100%; position: absolute;
    top: 0;
    left: 0;
    overflow: auto; 
    margin: 0px; line-height: 1;}

	.main{text-align: center; width: 725px;  overflow: auto; margin: 60px auto; display: table; }
	.left{width:350px; height:35px;    display: inline-block;margin:auto; padding:5px;border: 1px solid blue; text-align: right; overflow: hidden;
				border-right-color:#eaeaea; color:#c0c0c0; box-sizing: content-box; font-size: 28px;     font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol"; line-height: 1.3;}

	.right{width:350px; height:35px; margin:auto;  padding:5px;  border: 1px solid green; text-align: left;  display: inline-block;
				border-left-color:#eaeaea; float: right; box-sizing: content-box; font-size: 30px;     font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";}
	#counterDiv{ font-size: 20px; }	
</style>

</head>
<body class="body">
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4"> <a class="navbar-brand" href="#">Tarasov Learn English</a> 
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" 
aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
 <div class="collapse navbar-collapse" id="navbarCollapse"> 
	<ul class="navbar-nav mr-auto"> 
		<li class="nav-item active"> <a class="nav-link" href="#">Main <span class="sr-only">(current)</span></a> </li> 
		<li class="nav-item">
            <a class="nav-link" href="#">Add texts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="page/statistics" title="only for registred">Statistics</a>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Grammer</a>
          </li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
          <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
		<ul class="navbar-nav rm-auto">
        @if (Route::has('login'))
          @auth
              <li class="nav-item"><a class="nav-link" href="{{ url('/home') }}">Cabinet</a></li>
          @else
             <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">Login</a></li>
             <li class="nav-item" ><a class="nav-link" href="{{ route('register') }}">Register</a></li>
           @endauth
		@endif
		</ul>
      </div>
  </nav>

	<div class="container">
		<div class="row">
			<div class="col-3">
				<div class="alert alert-success" style="width: 220px;" role="alert">Нажмакано: <span id="counterDiv"></span></div>
				<div class="alert alert-success" style="width: 220px;" role="alert">Time: <span id="timeDiv"></span></div>
			</div>
			<div class="col-9">Progress:
				<div class="progress" style="height: 20px;">
  				<div class="progress-bar progress-bar-striped" role="progressbar" style="width: 0%;" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">0%</div>
				
				</div>
				<!--form>
					<div class="form-control"><label for="exampleFormControlFile1">Download your own file with text</label>
								<input type=file class="form-control-file"> 
					</div>
				</form-->
			</div>
		</div>
	</div>
	<div class="main" aria-live="polite"  aria-atomic="true"><div class="left" id="l">&#9998;</div><input class="right" id="r" value="" ></div>
	<div class="container">
		<div class="card">
  		<div class="card-header">Luggage: Verbs</div>
  			<div class="card-body">
   				<a href="#" onclick="changheText(1);">Irregular verbs TOP 70 # 1</a> | <a href="#" onclick="changheText(2);">Irregular verbs TOP 70 # 2</a> |
   				<a href="#" onclick="changheText(3);">Regular verbs TOP 600 # 1</a> | <a href="#" onclick="changheText(4);">Regular verbs TOP 600 # 2</a> | <a href="#" onclick="changheText(5);">Regular verbs TOP 600 # 3</a> | <a href="#" onclick="changheText(6);">Regular verbs TOP 600 # 4</a>
  			</div>
		</div>
			<br/>
		<div class="card">
  		<div class="card-header">Luggage: Nouns</div>
  			<div class="card-body">
   				<a href="#">Top 1500 Nouns (part 1)</a> / <a href="#">Top 1500 Nouns (part 2)</a> | 
   				 <a href="#">fifty fruit</a> / <a href="#">The most common nouns</a>
  			</div>
		</div>
	</div>
	</div>
</body>
<script>

let text_id_from_url = 0;
let sec = '';
let minutes = ''; 
let right_str = '';
let left_div  = '';
let buffer = '';
let char = '';
let typo_amout = 0;
let counter = 0;
let length_of_string = 0;
let newprogress = 0;
let procentage_in_bar = 0;
let time_of_typing = []; 
let pause = false;
let pause_time = [];
pause_time['sum'] = 0;
let right_input = ["inception inception начало inception shrink shrink shrink сокращаться shrink superflous superflous излишний superflous leisure leisure leisure досуг leisure inaction inaction inaction В бою inaction embrace embrace embrace охватывать embrace splendor splendor splendor пышность splendor exhaust exhaust exhaust выпускной exhaust thick thick thick толстый thick"];
right_input[1] =  "become became become, begin began begun, break broke broken, bring brought brought, build built built, buy bought bought, catch caught caught, choose chose chosen, come came come, cost cost cost, cut cut cut, do did done, draw drew drawn, drink drank drunk, drive drove driven, eat ate eaten, fall fell fallen, feed fed fed, feel felt felt, fight fought fought, find found found, fly flew flown, forget forgot forgotten, forgive forgave forgiven, get got gotten, give gave given, go went gone, grow grew grown, have had had, hear heard heard, hide hid hidden, hit hit hit, hold held held, know knew known, learn learned learned";

right_input[2] = "leave left left, lend lent lent, lose lost lost, make made made, mean meant meant, meet met met, pay paid paid, put put put, read read read, ride rode ridden, rise rose risen, run ran run, say said said, see saw seen, sell sold sold, send sent sent, set set set, show showed shown, sing sang sung, sit sat sat, sleep slept slept, speak spoke spoken, spend spent spent, stand stood stood, steal stole stolen, swim swam swum, take took taken, teach taught taught, tell told told, think thought thought, throw threw thrown, understand understood understood, wear wore worn, win won won, write wrote written";

right_input[3] = "accept add admire admit advise afford agree alert allow amuse analyze announce annoy answer apologise appear applaud appreciate approve argue arrange arrest arrive ask attach attack attempt attend attract avoid back bake balance ban bang bare bat bathe battle beam beg behave belong bleach bless blind blink blot blush boast boil bolt bomb book bore borrow bounce bow box brake branch breathe bruise brush bubble bump burn bury buzz calculate call camp care carry carve cause challenge change charge chase cheat check cheer chew choke chop claim clap clean clear clip close coach coil collect colour comb command communicate compare compete complain complete concentrate concern confess confuse connect consider consist contain continue copy correct cough count cover crack crash crawl cross crush cry cure curl curve cycle dam damage dance dare decay deceive decide decorate delay delight deliver depend describe desert deserve destroy detect develop disagree disappear";

right_input[4] = "disapprove disarm discover dislike divide double doubt drag drain dream dress drip drop drown drum dry dust earn educate embarrass employ empty encourage end enjoy enter entertain escape examine excite excuse exercise exist expand expect explain explode extend face fade fail fancy fasten fax fear fence fetch file fill film fire fit fix flap flash float flood flow flower fold follow fool force form found frame frighten fry gather gaze glow glue grab grate grease greet grin grip groan guarantee guard guess guide hammer hand handle hang happen harass harm hate haunt head heal heap heat help hook hop hope hover hug hum hunt hurry identify ignore imagine impress improve include increase influence inform inject injure instruct intend interest interfere interrupt introduce invent invite irritate itch jail jam jog join joke judge juggle jump kick kill kiss kneel knit knock knot label land last laugh launch learn level license lick";

right_input[5] = "lie lighten like list listen live load lock long look love man manage march mark marry match mate matter measure meddle melt memorise mend mess up milk mine miss mix moan moor mourn move muddle mug multiply murder nail name need nest nod note notice number obey object observe obtain occur offend offer open order overflow owe own pack paddle paint park part pass paste pat pause peck pedal peel peep perform permit phone pick pinch pine place plan plant play please plug point poke polish pop possess post pour practice pray preach precede prefer prepare present preserve press pretend prevent prick print produce program promise protect provide pull pump punch puncture punish push question queue race radiate rain raise reach realise receive recognise record reduce reflect refuse regret reign reject rejoice relax release rely remain remember remind remove repair repeat replace reply";

right_input[6] = "report reproduce request rescue retire return rhyme rinse risk rob rock roll rot rub ruin rule rush sack sail satisfy save saw scare scatter scold scorch scrape scratch scream screw scribble scrub seal search separate serve settle shade share shave shelter shiver shock shop shrug sigh sign signal sin sip ski skip slap slip slow smash smell smile smoke snatch sneeze sniff snore snow soak soothe sound spare spark sparkle spell spill spoil spot spray sprout squash squeak squeal squeeze stain stamp stare start stay steer step stir stitch stop store strap strengthen stretch strip stroke stuff subtract succeed suck suffer suggest suit supply support suppose surprise surround suspect suspend switch talk tame tap taste tease telephone tempt terrify test thank thaw tick tickle tie time tip tire touch tour tow trace trade train transport trap travel treat tremble trick trip trot trouble trust try tug tumble turn twist type undress unfasten unite unlock unpack untidy use vanish visit wail wait walk wander want warm warn wash waste watch water wave weigh welcome whine whip whirl whisper whistle wink wipe wish wobble wonder work worry wrap wreck wrestle wriggle x-ray yawn yell zip zoom";

function changheText(changnumber)
{	// send id of text through url as get parametr
	window.location.search = changnumber;
}

// if getted parametr from url issn't emtpy assign it to text id
if (location.search !== ''){
	text_id_from_url = location.search.slice(1);
}


right_str = document.getElementById("r").value  = right_input[text_id_from_url];
length_of_string = right_str.length;


$( ".right" ).keypress(function(event) {

	newprogress = 100/length_of_string * counter;
	procentage_in_bar = (newprogress).toFixed(1);

	$('.progress-bar').attr('aria-valuenow', newprogress).css('width',newprogress+'%');
	$('.progress-bar').text(procentage_in_bar+'%');
	
	event.preventDefault(); //prevent default action (doens't set characters) 
	char = event.key;	

  if(char === 'Enter'){
  	pause_time['start'] = Date.now();
  	pause = confirm("Pause. Contine typing press \"OK\"");
  	if(pause === true){pause_time['stop'] = Date.now(); 
  		pause_time['sum'] += pause_time['stop']-pause_time['start'];
  		alert(pause_time['sum']);
  	}
  }
  else{
	
		if(right_str.length>0){
			if(char === right_str.charAt(0)){
			  
			buffer = right_str.charAt(0);
			right_str = right_str.slice(1);
			left_div = left_div+buffer;
			  
			 if(left_div.length>25){left_div = left_div.slice(1);} 
			 document.getElementById("r").value = right_str;
			 document.getElementById("l").innerHTML = left_div;

			 counter++;
			 document.getElementById('counterDiv').innerHTML = counter;
			 
			if(counter === 1){ time_of_typing['start'] = Date.now()+pause_time['sum'];}
			if(right_str.length === 1){time_of_typing[1] = Date.now();}
			
			time_of_typing[1] = Date.now();
			sec = ((time_of_typing[1]-(time_of_typing['start']+pause_time['sum']))/1000);

			minutes = (sec/60);

			if (minutes < 1){
				minutes = 0; sec = (sec % 60).toFixed(1);
			} else{
				minutes = parseInt(minutes); sec = (sec % 60).toFixed(1);
			}

			document.getElementById('timeDiv').innerHTML = minutes+' min '+sec+' sek.';

			if(right_str === 0){ alert("Усё напечатал. Опечаток "+typo_amout); }

			}
			else{ 
				alert("Typo"); 
				typo_amout++;
				//var audio = new Audio('pig_grants.mp3');
				//audio.play();
			}
		}
		else{	
			alert("Усё напечатал. Опечаток "+typo_amout);
		}
	}
	//precentage bar hendler
	newprogress = 100/length_of_string * counter;
	procentage_in_bar = (newprogress).toFixed(1);
	$('.progress-bar').attr('aria-valuenow', newprogress).css('width',newprogress+'%');
	$('.progress-bar').text(procentage_in_bar+'%');
	//precentage bar hendler end
	console.log("3"+" char "+buffer+" buffer");	
	
});

</script>

</html>
