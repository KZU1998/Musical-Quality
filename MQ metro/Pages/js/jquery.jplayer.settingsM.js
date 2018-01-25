$(function(){
	var playItem = 0,
		title=$('.jp-interface .jp-title'),
		jPlayer=$("#jplayer"),
		myPlayList = [
			{name:"El Baile Del Sua Sua",mp3:"audio/El baile del sua sua.mp3"},
			{name:"El Meneaito",mp3:"audio/El Meneaito.mp3"},
			{name:"El Tiburon",mp3:"audio/El Tiburon Proyecto Uno.mp3"},
			{name:"Esta Pegao",mp3:"audio/Esta Pegao Proyecto Uno.mp3"},
			{name:"Guayando",mp3:"audio/Fulanito Guayando.mp3"},
			{name:"El Caballito De Palo",mp3:"audio/Joseph Fonseca El Caballito De Palo.mp3"},
			{name:"La Tanguita Roja",mp3:"audio/La Tanguita Roja Oro Solido.mp3"},
			{name:"Moviendo Las Cadereas",mp3:"audio/Moviendo Las Cadereas Oro Solido.mp3"},
            {name:"Mu La Vaca",mp3:"audio/Mu La Vaca.mp3"},
            {name:"El Beeper",mp3:"audio/Oro Solido El Beeper.mp3"}
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