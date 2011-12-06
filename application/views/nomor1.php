<!DOCTYPE html>
<html>
	<head>
		<script type="text/javascript" src="http://localhost/lab/uaslab/root/jquery.js"></script>
		<title>HTML5</title>
		<script>
			$(document).ready(function(){
				gambar();
				
				var saatini=5;
				$(document).keydown(function(e){
					console.log(e.keyCode);
					switch(e.keyCode){
						case 48 :
							$('#zBar1').css('opacity',0);
							$('#zBar2').css('opacity',0);
							$('#zBar3').css('opacity',0);
							$('#zBar4').css('opacity',0);
							$('#zBar5').css('opacity',0);
							saatini=0;
							break;
						case 49 :
							$('#zBar1').css('opacity',1);
							$('#zBar2').css('opacity',0);
							$('#zBar3').css('opacity',0);
							$('#zBar4').css('opacity',0);
							$('#zBar5').css('opacity',0);
							saatini=1;
							break;
						case 50 :
							$('#zBar1').css('opacity',1);
							$('#zBar2').css('opacity',1);
							$('#zBar3').css('opacity',0);
							$('#zBar4').css('opacity',0);
							$('#zBar5').css('opacity',0);
							saatini=2;
							break;
						case 51:
							$('#zBar1').css('opacity',1);
							$('#zBar2').css('opacity',1);
							$('#zBar3').css('opacity',1);
							$('#zBar4').css('opacity',0);
							$('#zBar5').css('opacity',0);
							saatini=3;
							break;
						case 52 :
							$('#zBar1').css('opacity',1);
							$('#zBar2').css('opacity',1);
							$('#zBar3').css('opacity',1);
							$('#zBar4').css('opacity',1);
							$('#zBar5').css('opacity',0);
							saatini=4;
							break;
						case 53 :
							$('#zBar1').css('opacity',1);
							$('#zBar2').css('opacity',1);
							$('#zBar3').css('opacity',1);
							$('#zBar4').css('opacity',1);
							$('#zBar5').css('opacity',1);
							saatini=5;
							break;
							
						case 109 :
							if (saatini>=0){
								saatini -=1;
								if(saatini==4){
									$('#zBar1').css('opacity',1);
									$('#zBar2').css('opacity',1);
									$('#zBar3').css('opacity',1);
									$('#zBar4').css('opacity',1);
									$('#zBar5').css('opacity',0);
								}
								if(saatini==3){
									$('#zBar1').css('opacity',1);
									$('#zBar2').css('opacity',1);
									$('#zBar3').css('opacity',1);
									$('#zBar4').css('opacity',0);
									$('#zBar5').css('opacity',0);
								}
								if(saatini==2){
									$('#zBar1').css('opacity',1);
									$('#zBar2').css('opacity',1);
									$('#zBar3').css('opacity',0);
									$('#zBar4').css('opacity',0);
									$('#zBar5').css('opacity',0);
								}
								if(saatini==1){
									$('#zBar1').css('opacity',1);
									$('#zBar2').css('opacity',0);
									$('#zBar3').css('opacity',0);
									$('#zBar4').css('opacity',0);
									$('#zBar5').css('opacity',0);
								}
								if(saatini==0){
									$('#zBar1').css('opacity',0);
									$('#zBar2').css('opacity',0);
									$('#zBar3').css('opacity',0);
									$('#zBar4').css('opacity',0);
									$('#zBar5').css('opacity',0);
								}
								if (saatini<=0){
									saatini=0;
								}
							}
							break;
						case 107 :
							if (saatini<=5){
								saatini +=1;
								if(saatini>=5){
									saatini=5;
								}
								if(saatini==5){
									$('#zBar1').css('opacity',1);
									$('#zBar2').css('opacity',1);
									$('#zBar3').css('opacity',1);
									$('#zBar4').css('opacity',1);
									$('#zBar5').css('opacity',1);
								}
								if(saatini==4){
									$('#zBar1').css('opacity',1);
									$('#zBar2').css('opacity',1);
									$('#zBar3').css('opacity',1);
									$('#zBar4').css('opacity',1);
									$('#zBar5').css('opacity',0);
								}
								if(saatini==3){
									$('#zBar1').css('opacity',1);
									$('#zBar2').css('opacity',1);
									$('#zBar3').css('opacity',1);
									$('#zBar4').css('opacity',0);
									$('#zBar5').css('opacity',0);
								}
								if(saatini==2){
									$('#zBar1').css('opacity',1);
									$('#zBar2').css('opacity',1);
									$('#zBar3').css('opacity',0);
									$('#zBar4').css('opacity',0);
									$('#zBar5').css('opacity',0);
								}
								if(saatini==1){
									$('#zBar1').css('opacity',1);
									$('#zBar2').css('opacity',0);
									$('#zBar3').css('opacity',0);
									$('#zBar4').css('opacity',0);
									$('#zBar5').css('opacity',0);
								}
								if(saatini==0){
									$('#zBar1').css('opacity',0);
									$('#zBar2').css('opacity',0);
									$('#zBar3').css('opacity',0);
									$('#zBar4').css('opacity',0);
									$('#zBar5').css('opacity',0);
								}
							}
							break;
					}
				})
				
			});
			
			function gambar(){
				var context = $('#draw')[0].getContext("2d");
				context.fillStyle="blue";
				context.moveTo(1,1);
				context.lineTo(50,1);
				context.lineTo(70,50);
				context.lineTo(70,1); // yg atas kiri 2
				context.lineTo(120,1);
				context.lineTo(120,50);
				context.lineTo(140,1);
				context.lineTo(190,1);
				context.lineTo(120,100);
				context.lineTo(120,250);
				context.lineTo(70,250);
				context.lineTo(70,100);
				//context.stroke(); // ini untuk penyelesaian moveTo dan lineTo
				context.fill();
				
				var context2 = $('#draw2')[0].getContext("2d");
				context2.fillStyle="blue";
				context2.moveTo(1,10);
				context2.lineTo(10,10);
				context2.lineTo(10,1);
				context2.lineTo(100,1);
				context2.lineTo(100,10);
				context2.lineTo(110,10);
				context2.lineTo(110,250);
				context2.lineTo(1,250);
				//context.stroke(); // ini untuk penyelesaian moveTo dan lineTo
				context2.fill();
			}
		</script>
		<style>
			#bar5{
				background:blue;
				width:30px;
				height:250px;
				float : left;
				margin-left : 20px;
				opacity : 1;
				-moz-animation : anim5 2s infinite;
			}
			#bar4{
				background:blue;
				width:30px;
				height:200px;
				float : left;
				margin-top : 50px;
				margin-left : 20px;
				opacity : 1;
				-moz-animation : anim4 2s infinite;
			}
			#bar3{
				background:blue;
				width:30px;
				height:150px;
				float : left;
				margin-top : 100px;
				margin-left : 20px;
				opacity : 1;
				-moz-animation : anim3 2s infinite;
			}
			#bar2{
				background:blue;
				width:30px;
				height:100px;
				float : left;
				margin-top : 150px;
				margin-left : 20px;
				opacity : 1;
				-moz-animation : anim2 2s infinite;
			}
			#bar1{
				background:blue;
				width:30px;
				height:50px;
				float : left;
				margin-top : 200px;
				margin-left : 10px;
				opacity : 1;
				-moz-animation : anim1 2s infinite;
			}
			
			@-moz-keyframes anim1{
				0%  {opacity:1;}
				10%  {opacity:1;}
				20%  {opacity:1;}
				30%  {opacity:1;}
				40%  {opacity:1;}
				50%  {opacity:1;}
				60%  {opacity:1;}
				70%  {opacity:1;}
				80%  {opacity:1;}
				90%  {opacity:1;}
				100%  {opacity:0;}
			}
			
			@-moz-keyframes anim2{
				0%  {opacity:0;}
				10%  {opacity:1;}
				20%  {opacity:1;}
				30%  {opacity:1;}
				40%  {opacity:1;}
				50%  {opacity:1;}
				60%  {opacity:1;}
				70%  {opacity:1;}
				80%  {opacity:1;}
				90%  {opacity:0;}
				100%  {opacity:0;}
			}
			
			@-moz-keyframes anim3{
				0%  {opacity:0;}
				10%  {opacity:0;}
				20%  {opacity:0;}
				30%  {opacity:1;}
				40%  {opacity:1;}
				50%  {opacity:1;}
				60%  {opacity:1;}
				70%  {opacity:1;}
				80%  {opacity:0;}
				90%  {opacity:0;}
				100%  {opacity:0;}
			}
			
			@-moz-keyframes anim4{
				0%  {opacity:0;}
				10%  {opacity:0;}
				20%  {opacity:0;}
				30%  {opacity:0;}
				40%  {opacity:1;}
				50%  {opacity:1;}
				60%  {opacity:1;}
				70%  {opacity:0;}
				80%  {opacity:0;}
				90%  {opacity:0;}
				100%  {opacity:0;}
			}
			
			@-moz-keyframes anim5{
				0%  {opacity:0;}
				10%  {opacity:0;}
				20%  {opacity:0;}
				30%  {opacity:0;}
				40%  {opacity:0;}
				50%  {opacity:1;}
				60%  {opacity:0;}
				70%  {opacity:0;}
				80%  {opacity:0;}
				90%  {opacity:0;}
				100%  {opacity:0;}
			}
			
			#baterai{
				margin-left: 10px;
				float : left;
			}
			#putih{
				background : white;
				width : 100px;
				height : 220px;
				position : absolute;
				top : 30px;
				left : 453px;
			}
			
			#zBar1{
				background : blue;
				width : 90px;
				height : 30px;
				position : absolute;
				top : 180px;
				left : 6px;
			}
			
			#zBar2{
				background : blue;
				width : 90px;
				height : 30px;
				position : absolute;
				top : 140px;
				left : 6px;
			}
			
			#zBar3{
				background : blue;
				width : 90px;
				height : 30px;
				position : absolute;
				top : 100px;
				left : 6px;
			}
			
			#zBar4{
				background : blue;
				width : 90px;
				height : 30px;
				position : absolute;
				top : 60px;
				left : 6px;
			}
			
			#zBar5{
				background : blue;
				width : 90px;
				height : 30px;
				position : absolute;
				top : 20px;
				left : 6px;
			}
		</style>
	</head>
	<body>
		<div style="float:left;"><canvas id="draw" width="190" height="250" style=""></canvas></div>
		<div id="bar1"></div>
		<div id="bar2"></div>
		<div id="bar3"></div>
		<div id="bar4"></div>
		<div id="bar5"></div>
		<div id=baterai>
			<canvas id="draw2" width="250" height="250" style=""></canvas>
			<div id=putih>
				<div id=zBar1></div>
				<div id=zBar2></div>
				<div id=zBar3></div>
				<div id=zBar4></div>
				<div id=zBar5></div>
			</div>
		</div>
		
	</body>
</html>