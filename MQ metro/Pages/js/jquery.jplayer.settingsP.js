$(function(){
	var playItem = 0,
		title=$('.jp-interface .jp-title'),
		jPlayer=$("#jplayer"),
		myPlayList = [
			{name:"Shape Of You",mp3:"audio/Ed Sheeran - Shape Of You Offical [Audio].mp3"},
			{name:"I Mean It",mp3:"audio/G-Eazy - I Mean It (Audio) ft. Remo.mp3"},
			{name:"Swalla",mp3:"audio/Jason Derulo Swalla feat Nicki Minaj & Ty Dolla $ign Lyric Video.mp3"},
			{name:"Friends",mp3:"audio/Justin Bieber & BloodPop® - Friends [Official Audio].mp3"},
			{name:"Work",mp3:"audio/Rihanna - Work ft. Drake (lyrics).mp3"},
			{name:"Cheap Thrills",mp3:"audio/Sia - Cheap Thrills feat. Sean Paul [Audio].mp3"},
			{name:"Stressed Out",mp3:"audio/Stressed Out - Twenty One Pilots Lyrics.mp3"},
			{name:"Sucker For Pain",mp3:"audio/Sucker for pain.mp3"},
            {name:"Starboy",mp3:"audio/The Weeknd - Starboy (Lyric Video) ft. Daft Punk.mp3"},
            {name:"Heathens",mp3:"audio/Twenty One Pilots  - Heathens - Traducida al Español.mp3"}
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