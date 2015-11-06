<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2.0">
		<title>Kusoge Fighting Game Gauntlet</title>

		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=2.0">

		<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="css/fightinggame.css" type="text/css" media="screen" />

		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>

	</head>

	<body>
		<div class="warningcover"></div>
		<div class="mountain">
			
			<div id="textMachine" class="fighting gameslist">				
				<div system="nes" class="game">Blades of Steel</div>	
				<div system="psx" class="game">Mortal Kombat Mythologies - Sub-Zero</div>
				<div system="snes" class="game">Teenage Mutant Ninja Turtles - Tournament Fighters</div>
				<div system="nes" class="game">Teenage Mutant Ninja Turtles - Tournament Fighters</div>
				<div system="gen" class="game">Teenage Mutant Ninja Turtles - Tournament Fighters</div>
				<div system="arc" class="game">sftm</div>
				<div system="arc" class="game">wwfmania</div>
				<div system="arc" class="game">survarts</div>
				<div system="arc" class="game">timekill</div>
				<div system="gen" class="game">Eternal Champions</div>
				<div system="gen" class="game">Virtua Fighter 2</div>
				<div system="psx" class="game">Star Wars - Masters of Teras Kasi</div>
				<div system="psx" class="game">Simpsons, The - Wrestling</div>
				<div system="gba" class="game">Shrek Fairy Tale Freakdown</div>
				<div system="gbc" class="game">Shrek SuperSlam</div>
				<div system="gba" class="game">Rock em sock em robots</div>
				<div system="ds" class="game">Guilty Gear Dust Strikers</div>
				<div system="gba" class="game">Guilty Gear Advance</div>
				<div system="snes" class="game">Battle Blaze</div>
				<div system="snes" class="game">Weapon Lord</div>
				<div system="snes" class="game">Ultimate Mortal Kombat 3</div>
				<div system="snes" class="game">Rise of the Robots</div>
				<div system="snes" class="game">Ballz 3-D</div>
				<div system="snes" class="game">Mighty Morphin Power Rangers - Fighting Edition</div>
				<div system="snes" class="game">C2 - Judgment Clay</div>
				<div system="snes" class="game">Clay Fighter</div>
				<div system="snes" class="game">Fighters History</div>
				<div system="snes" class="game">Ultraman - Towards the Future</div>
				<div system="snes" class="game">Justice League Task Force</div>
				<div system="snes" class="game">Double Dragon V - The Shadow Falls</div>
				<div system="snes" class="game">Shaq Fu</div>	
				<div system="snes" class="game">Street Combat</div>	
			</div>

			
			<div class="gamecolumntop">
			</div>
			<div class="content">
			<div class="playercolumn">
				<div id="playericon">
				player
				</div>
			</div>
			<div class="gamescolumn">
				
			</div>

			</div>
			<div class="gamecolumnbottom">
			</div>
			
		</div>
		<div id="bottom"></div>
		<script>
		
		$(document).ready(function(){
			
			var lastyposition = 0;
			
			var currentgame = 0;
			
			var cutoff = 2;
			
			var windowheight = $( window ).height();
			
			var gameindex = 0;
			
			var topgap = $(".gamecolumntop").height();
			
			$(".fighting.gameslist .game").each(function(e){

				gameindex++;
				var iconimage = "fightingimages/boxes/" + $(this).text().split(' ').join('-') + ".jpg";
//console.log("Image: " + iconimage);

			if($(this).text() == "Teenage Mutant Ninja Turtles - Tournament Fighters"){
				var iconimage = "fightingimages/boxes/" + $(this).text().split(' ').join('-') + "-" + $(this).attr("system") +".jpg";
			}

				$(".content .gamescolumn").append('<div id="game' + gameindex + '" system="' + $(this).attr("system") + '" class="gameicon" style="background-image:url(' + iconimage + ')"><div class="gamecover">' + $(this).text() + '</div></div>');							
			});
			var gameiconheight = $(".gameicon").height();
			var gameicontopmargin = $(".gameicon").css("marginTop").replace("px","");
			var gameiconbottomargin = $(".gameicon").css("marginBottom").replace("px","");
			var totalgames = $(".gameicon").length;
			
			
			lastyposition = $(".gamescolumn .gameicon:last").position().top;
			var lastgame = $(".gamescolumn .gameicon:last");
			
			var lastyposition = lastgame.position().top;
			window.scrollTo(0,0);
			
			windowheightInt = parseInt(windowheight);
			iconheight = parseInt(gameiconheight);
			gameicontopmargin = parseInt(gameicontopmargin);
			gameiconbottomargin = parseInt(gameiconbottomargin);
			topgap = parseInt(topgap);
			
			
			//initial starting animation
			
			
			setTimeout(function(){
				$("#game"+(totalgames - gameindex)+" .gamecover").animate({
					opacity:0  }, 700, function() {
					// Animation complete.
console.log("Current game name: " + game);
console.log("Current game systen: " + system);
				});
				
			$('html, body').animate({
				scrollTop: $("#bottom").offset().top    
			}, 10000);
			
			$("#playericon").animate({
				marginTop: "+=" + (lastyposition - topgap),
			  }, 8700, function() {
				// Animation complete.
					
			  });
			  	
			}, 500);		 
			
			$(document).keydown(function(e) {
				switch(e.which) {
					case 32: //spacebar

					rungame(currentgame, totalgames);
					break;
					case 38: // up
					
					if(currentgame < (totalgames-1)){
						if($("#playericon").css("marginTop").replace('px', '') > 0 ){

							currentgame++;
							rungame(currentgame, totalgames);
							
							if(currentgame == (totalgames-1)){
								scrolloffset = gameiconheight + gameiconheight + topgap;
							}
							else{
								scrolloffset = gameiconheight + gameiconheight;
							}
							
							$("#playericon").animate({				
								marginTop: "-=" + (gameiconheight+gameiconbottomargin),		
							  }, 400, function() {
								// Animation complete.
								  
							  });
							  
								$("body, html").animate({ 		
									scrollTop: $("#playericon").offset().top - scrolloffset
								});
							  
					
						}
					}
					break;
					case 40: // down
					currentgame--;
					rungame(currentgame, totalgames);
					
					if(currentgame >= 0){
					
							$("#playericon").animate({				
								marginTop: "+=" + (gameiconheight+gameiconbottomargin),				
							  }, 400, function() {
								// Animation complete.
							  });
								$("body, html").animate({ 		
									scrollTop: $("#playericon").offset().top + gameiconheight
								});
					
					}
					else{
						currentgame = 0;
					}
					break;
					
					case 48: //0
										
					$(".warningcover").animate({
						opacity:1  }, 250, function() {
						// Animation complete.
					});
					
					break;

					default: return; // exit this handler for other keys
				}
				e.preventDefault(); // prevent the default action (scroll / move caret)
			});

			var snes_emulator =  "\"D:\\Applications\\Emulators\\snes9x\\snes9x-x64.exe\"";
			var snes_rom_path = "\"D:\\Applications\\Emulators\\Super\ Nintendo\\";
			var nes_emulator =  "\"D:\\Applications\\Emulators\\NES ALL ROMS\\Emulators\\Nestopia\\nestopia.exe\"";
			var nes_rom_path =  "\"D:\\Applications\\Emulators\\NES ALL ROMS\\Games Released in the US\\";
			
			function runProgram(program, rom)
			{
				var shell = new ActiveXObject("WScript.Shell");             
				//var emulator =  "\"D:\\Applications\\Emulators\\snes9x\\snes9x-x64.exe\" \"D:\\Applications\\Emulators\\Super\ Nintendo\\ActRaiser.zip\"";
				var emulator =  program + " " + rom;
				shell.Run(emulator);
			}
			
			function rungame(gameindex, totalgames){

				var rom_file = false;
				var romsbasepath = '"/Users/ryanyoo/Emulators/';

				var game = $("#game"+(totalgames - gameindex)).text();
				var system = $("#game"+(totalgames - gameindex)).attr("system");

				if(system == "psx"){
					game = game + "/" + game;
				}
				var systempaths = [];
				systempaths["snes"] = 'Super Nintendo/';
				systempaths["gen"] = 'Genesis/';
				systempaths["nes"] = 'NES ALL ROMS/Games Released in the US/';
				systempaths["arc"] = 'mame/roms/';
				systempaths["psx"] = 'PSX/';
				systempaths["gba"] = 'GBA/';
				systempaths["gbc"] = 'GBA/';
				systempaths["ds"] = 'Nintendo DS/';

 
				var gameextensions = [];
				gameextensions["snes"] = ".zip";
				gameextensions["gen"] = ".zip";
				gameextensions["nes"] = ".nes";
				gameextensions["arc"] = ".zip";
				gameextensions["psx"] = ".cue";
				gameextensions["gba"] = ".zip";
				gameextensions["gbc"] = ".zip";
				gameextensions["ds"] = ".nds";
			
				setTimeout(function(){
				$("#game"+(totalgames - gameindex)+" .gamecover").animate({
					opacity:0  }, 700, function() {
					// Animation complete.
console.log("Current game name: " + game);
console.log("Current game systen: " + system);
				});
				
				 }, 300);

				rom_file = game + gameextensions[system];

					setTimeout(function(){
						if(rom_file){					
							var request = $.ajax({
								type: 'POST',      
								data: { game: romsbasepath + systempaths[system] + rom_file + '"'},    
								url: 'execute.php',
								success: function(response) {
							       // console.log("Response: " + response); 
							    },
							    dataType: "text",
							});
						}
					}, 1000);
				console.log("Running " + romsbasepath + systempaths[system] + rom_file); 
		
			}
					
			
		});
			
										
		</script>

	</body>
</html>
