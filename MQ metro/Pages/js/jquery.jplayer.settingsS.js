$(function(){
	var playItem = 0,
		title=$('.jp-interface .jp-title'),
		jPlayer=$("#jplayer"),
		myPlayList = [
			{name:"Corazon De Acero ",mp3:"audio/Yiyo Sarante Corazón de Acero.mp3"},
			{name:"Puro Toquetin",mp3:"audio/Puro Toquetin - Felipe Centeno - Salsa Choke 2016.mp3"},
			{name:"En Barranquilla Me Quedo",mp3:"audio/Joe Arroyo - En Barranquilla Me Quedo.mp3"},
			{name:"Ras Tas Tas",mp3:"audio/Ras Tas Tas - Cali Flow Latino (Video Oficial) HD Salsa Choke Urbana 2014.mp3"},
			{name:"Me Tengo Que Ir",mp3:"audio/Los Adolecentes - Me Tengo Que Ir.mp3"},
			{name:"La Mujer De Esta Era",mp3:"audio/Salsa Choke 2015! Oveja Negra - La Mujer De Esta Era (Audio) @Ecuatvmedia @OvejaNegra593.mp3"},
			{name:"Busca Por Dentro",mp3:"audio/Busca Por Dentro- Grupo Niche.mp3"},
			{name:"Swagga",mp3:"audio/Swagga (Salsa Choke 2015) - Cali Flow Latino.mp3"},
            {name:"El Preso",mp3:"audio/El Preso.mp3"},
            {name:"Made In Colombia",mp3:"audio/Made In Colombia Video Oficial   Teno el Melodico  2014 jossie d joy.mp3"}
		],		
		jPlay=function(idx){
			if(typeof idx==typeof 0)
				jPlayer.jPlayer("setMedia",myPlayList[idx]).jPlayer('play')
			if(typeof idx==typeof '')
				jPlayer.jPlayer("setMedia",myPlayList[playItem=idx=='next'?(++playItem<myPlayList.length?playItem:0):(--playItem>=0?playItem:myPlayList.length-1)]).jPlayer('play')					
			title.text(myPlayList[playItem].name)
			Cufon.refresh()
		}

	jPlayer.jPlayer({
		ready: function() {
			jPlay(playItem)
		},
		ended:function(){
			jPlay('next')
		}
	})
	
	$(".jp-prev,.jp-next")
		.click( function() { 
			jPlay($(this).is('.jp-next')?'next':'prev')
			return false;
		})
	
});