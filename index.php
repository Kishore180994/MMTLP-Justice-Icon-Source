<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="shortcut icon" type="image/x-icon" href="/favicon.ico" />
	<title>MMTLP Justice Icon | Generator</title>
	
	<meta property="og:url" content="http://www.mmtlp.me/" />
	<meta property="og:title" content="MMTLP Justice Icon | Generator" />
	<meta property="og:description" content="Generate your OWN custom MMTLP justice icon!" />
	<meta property="og:image" content="https://www.mmtlp.me/favicon.png" />
	
	<meta name="twitter:site" content="https://www.mmtlp.me/favicon.png" />
	<meta name="twitter:title" content="MMTLP Justice Icon | Generator" />
	<meta name="twitter:description" content="Generate your OWN custom MMTLP justice icon!" />
	<meta name="twitter:image" content="https://www.mmtlp.me/favicon.png" />
	
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<style type="text/css">
		*{box-sizing:border-box;font-family:Verdana;vertical-align:top;font-size:12px;line-height:16px;position:relative}
		h1{text-align:center;font-size:24px;margin:20px auto}
		h2{font-size:18px;margin:0 0 10px 0}
		label{font-weight:bold;display:block}
		#icon *{width:100%;height:100%}
		#icon .icon-text{height:auto!important}
		#canvas{margin:0 auto;width:100%;max-width:835px;border:solid 1px #ccc;padding:15px;background:#EEE;}
		#canvas .left{float:left;width:50%;margin:0 auto}
		#canvas .right{float:right;width:45%;padding:15px;;margin:0 auto;border:solid 1px #ccc;background:#f1f1f1}
		#canvas #icon{background:#FFF;height:100%;min-height:340px;position:relative;width:400px;height:400px}
		#canvas #icon #iconImage{margin:0 auto;z-index:10;background: #000;-webkit-mask: url('icon.svg?v=<?php echo date('m/d/Y h:i:s a', time());?>') center 0 / contain repeat;width:400px;height:400px}
		#canvas #icon .icon-text{text-align:center;height:100%;width:100%;vertical-align:middle;font-size:12px;line-height:12px;min-height:200px;position:absolute;top:40%;color:#FFF;font-size:52px;line-height:64px;font-weight:bold;text-shadow:4px 4px 0 #000;z-index:1000}
		.clear{clear:both}
		label em{font-weight:normal}
		input{margin-bottom:5px}
		input[type=color],input[type=number],input[type=text],select{margin-bottom:5px;padding:5px}
		input[type=color]{padding:0}
		.inline{display:inline-block!important}
		input[type='checkbox']{position:relative;top:-2px}
		@media screen and (max-width:600px){
			#canvas .left,#canvas .right{float:none;width:100%;}
			#canvas .left{margin-bottom:15px}
			#canvas #icon, #canvas #icon #iconImage{width:100%;max-width:400px}
		}
		table{width:100%;border-collapse:collapse}
	</style>
</head>
<body>

	<h1>MMTLP Icon Generator</h1>
	
	<center>
		<a target="_blank" href="https://twitter.com/search?q=%23MMTLP">#MMTLP</a> | 
		<a target="_blank" href="https://twitter.com/search?q=%23MMAT">#MMAT</a> | 
		<a target="_blank" href="https://twitter.com/search?q=%23MetaFam">#MetaFam</a> | 
		<a target="_blank" href="https://twitter.com/search?q=%23FinraFraud">#FinraFraud</a> | 
		<a target="_blank" href="https://twitter.com/search?q=%23RetailTogetherStrong">#RetailTogetherStrong</a>
		<br />
		<br />
		<a target="_blank" href="https://twitter.com/search?q=%23EIGH">#EIGH</a> | 
		<a target="_blank" href="https://twitter.com/search?q=%23CRGB">#CRGB</a> | 
		<a target="_blank" href="https://twitter.com/search?q=%23CRTD">#CRTD</a> | 
		<a target="_blank" href="https://twitter.com/search?q=%23FNGR">#FNGR</a> | 
		<a target="_blank" href="https://twitter.com/search?q=%23GTII">#GTII</a>
		<br />
		<br />
		<a target="_blank" href="https://www.fairmarketsnow.org/">FairMarketsNow</a> | 
		<a target="_blank" href="https://www.urvin.finance/advocacy/we-the-investors-pfof-sign-on">WeTheInvestors</a> | 
		<a target="_blank" href="https://ceobloc.com/">CEOBLOC</a>
	</center>
	<br />
	
	<div id="canvas">
	
		<div class="left" id="icon">
			<div id="iconImage"></div>
			<div class="icon-text">MMTLP</div>
		</div>
		
		<div class="right" id="inputs">
			
			<h2>Color Options</h2>
			
			<table><tr>
			<td>
				<label>Background:</label>
				<input type="color" id="bgColor" value="#000000" onchange="ChangeBackground();" />
			</td>
			<td>
				<label>Icon:</label>
				<input type="color" id="iconColor" value="#FFFFFF" onchange="ChangeIcon();" />
			</td>
			</tr></table>
			
			<input type="checkbox" id="gradientOpt" value="1" onchange="ToggleGradient();" class="inline" />
			<label for="gradientOpt" class="inline" >Gradient</label>
			<div id="gradient-options" style="display:none">
				<table><tr>
					<td>
						<label>Style</label>
						<select id="gradientStyle" onchange="ToggleGradient();">
							<option value="linear">Linear</option>
							<option value="radial">Radial</option>
						</select>
					</td>
					<td>
						<label>Color</label>
						<input type="color" value="#1385c4" id="gradientColor" onchange="ToggleGradient();" />
					</td>
					<td>
						<label>Degrees (Linear)</label>
						<input type="number" value="180" min="0" max="360" id="gradientRadius" onchange="ToggleGradient();" />
					</td>
				</tr></table>
			</div>
			
			<input type="checkbox" id="shadowOpt" value="1" onchange="ToggleInset();" class="inline" />
			<label for="shadowOpt" class="inline" >Inset Shadow</label>
			<div id="shadow-options" style="display:none">
				<table><tr>
					<td>
						<label>Shadow</label>
						<input type="color" value="#FFFFFF" id="txtShadowColor" onchange="ToggleInset();" />
					</td>
					<td>
						<label>Spread</label>
						<input type="number" value="100" min="1" max="200" id="txtShadowSpread" onchange="ToggleInset();" />
					</td>
				</tr></table>
			</div>
			
			<hr />
			
			<h2>Text Options</h2>
			<label>Text - <em>Use &lt;br&gt for line breaks</em></label>
			<input type="text" value="MMTLP" id="txtContent" onchange="ChangeText();" />
			
			<label>Font</label>
			<select id="textFont" name="textFont" onchange="ChangeTextFont();">
				<option value="Verdana">Verdana</option>
				<option value="Times New Roman">Times New Roman</option>
				<option value="Arial">Arial</option>
				<option value="Tahoma">Tahoma</option>
				<option value="Trebuchet MS">Trebuchet MS</option>
				<option value="Georgia">Georgia</option>
				<option value="Garamond">Garamond</option>
				<option value="Courier New">Courier New</option>
			</select>
			
			<table><tr>
				<td>
					<label>Color</label>
					<input type="color" value="#FFFFFF" id="txtColor" value="#FFFFFF" onchange="ChangeTextColor();" />
				</td>
				<td>
					<label>Dropshadow</label>
					<input type="color" value="#000000" id="txtDropshadowColor" value="#FFFFFF" onchange="ChangeDropshadowColorAndSize();" />
				</td>
				<td>
					<label>Spread</label>
					<input type="number" value="4" min="1" max="25" id="txtDropshadowSpread" value="#FFFFFF" onchange="ChangeDropshadowColorAndSize();" />
				</td>
			</tr></table>
			
			<table><tr>
				<td>
					<label>Size</label>
					<input type="number" value="52" min="1" max="100" id="txtSize" onchange="ChangeTextSize();" />
				</td>
				<td>
					<label>Spacing</label>
					<input type="number" value="0" min="0" max="100" id="txtSpacing" onchange="ChangeTextSpacing();" />
				</td>
				<td>
					<label>Height</label>
					<input type="number" value="64" min="0" max="100" id="txtHeight" onchange="ChangeTextLineheight();" />
				</td>
				<td>
					<label>Vertical Tuning</label>
					<input type="number" value="40" min="0" max="100" id="txtPosition" onchange="ChangeTextVertical();" />
				</td>
			</tr></table>
			
		</div>
		<div class="clear"></div>
		
		<br />
		<center>
			Use your device screenshot feature to capture the image.<br />No back-end code or front-end analytics are used for this tool.<br />
			<a target="_blank" href="https://github.com/toxiclogix/MMTLP-Justice-Icon-Source">Source Code</a>
		</center>
		
	</div>
	<div class="clear"></div>
	
	<center>
		<br />
		Art designed with 💕 by <a href="https://twitter.com/ArtburnDesigns">ArtBurn</a>
		<br />
		Generator built with 💕 by <a href="https://twitter.com/toxiclogix">ToxicLogix</a>
	</center>
	
	<script>
		function ChangeBackground(){
			$('#iconImage').css('background',$('#bgColor').val());
		}
		function ChangeIcon(){
			$('#icon').css('background',$('#iconColor').val());
		}
		function ChangeText(){
			$('.icon-text').html($('#txtContent').val());
		}
		function ChangeTextFont(){
			$('.icon-text').css('font-family',$('#textFont').val());
		}
		function ChangeTextColor(){
			$('.icon-text').css('color',$('#txtColor').val());
		}
		function ChangeDropshadowColorAndSize(){
			var s = $('#txtDropshadowSpread').val();
			var c = $('#txtDropshadowColor').val();
			$('.icon-text').css('text-shadow',s+'px '+s+'px '+c);
		}
		function ChangeTextSize(){
			var s = $('#txtSize').val();
			$('.icon-text').css('font-size',s+'px');
			$('.icon-text').css('line-height',(parseInt(s)+12)+'px');
		}
		function ChangeTextSpacing(){
			var s = $('#txtSpacing').val();
			$('.icon-text').css('letter-spacing',s+'px');
		}
		function ChangeTextLineheight(){
			var s = $('#txtHeight').val();
			$('.icon-text').css('line-height',s+'px');
		}
		function ChangeTextVertical(){
			var v = $('#txtPosition').val();
			$('.icon-text').css('top',v+'%');
		}
		function ToggleInset(){
			if($('#shadowOpt').is(':checked')){
				$('#shadow-options').slideDown(250);
				var c = $('#txtShadowColor').val();
				var s = $('#txtShadowSpread').val();
				$('#iconImage').css('box-shadow','inset 0 0 '+s+'px '+c);
			}else{
				$('#shadow-options').slideUp(250);
				$('#iconImage').css('box-shadow','none');
			}
		}
		function ToggleGradient(){
			if($('#gradientOpt').is(':checked')){
				$('#gradient-options').slideDown(250);
				var t = $('#gradientStyle').val();
				var t2 = 'circle';
				var c1 = $('#bgColor').val().toLowerCase();
				var c2 = $('#gradientColor').val().toLowerCase();
				var r = $('#gradientRadius').val();
				if(t=='linear') t2 = r+'deg'
				$('#iconImage').css('cssText','background:'+t+'-gradient('+t2+','+hexToRgbA(c1)+', '+c1+' 0%, '+hexToRgbA(c2)+' 100%);');
			}else{
				$('#gradient-options').slideUp(250);
				ChangeBackground();
			}
		}
		function hexToRgbA(hex){
			var c = hex.substring(1).split('');
			if(c.length== 3){
				c = [c[0], c[0], c[1], c[1], c[2], c[2]];
			}
			c = '0x'+c.join('');
			return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',1)';
		}
	</script>
	
</body>
</html>