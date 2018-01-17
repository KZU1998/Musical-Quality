$(function(){
	var playItem = 0,
		title=$('.jp-interface .jp-title'),
		jPlayer=$("#jplayer"),
		myPlayList = [
			{name:"Sensualidad",mp3:"audio/Bad Bunny Ft. J Balvin Y Prince Royce - Sensualidad.mp3"},
			{name:"Criminal",mp3:"audio/Criminal - Natti Natasha_ Ozuna [500kbps_M4A].m4a"},
			{name:"Mayores",mp3:"audio/Becky G - Mayores (Official Video) ft. Bad Bunny.mp3"},
			{name:"Perro Fiel",mp3:"audio/Perro Fiel - Shakira (LETRA) ft. Nicky Jam.mp3"},
			{name:"Corazon",mp3:"audio/Maluma Ft. Nego Do Borel - Corazon.mp3"},
			{name:"Bonita",mp3:"audio/BONITA  (Versión oficial) J Balvin feat. Jowell & Randy - Audio Oficial.mp3"},
			{name:"Mi Gente",mp3:"audio/J. Balvin, Willy William - Mi Gente (Lyrics - Lyric Video).mp3"},
			{name:"Sutra",mp3:"audio/Sebastian Yatra Ft. Dalmata - Sutra.mp3"},
			{name:"Lento",mp3:"audio/Lento lento - Remix oficial Nfasischepon.mp3"}
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