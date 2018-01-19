$(function(){
	var playItem = 0,
		title=$('.jp-interface .jp-title'),
		jPlayer=$("#jplayer"),
		myPlayList = [
			{name:"Desperados",mp3:"audio/AnswerD & Nacha - Desperados.mp3"},
			{name:"More than you know",mp3:"audio/Axwell - Ingrosso – More Than You Know (Lyrics - Lyric Video).mp3"},
			{name:"Feels",mp3:"audio/Calvin Harris - Feels (Mp3goo.com) (Mp3Goo.com).mp3"},
			{name:"Dirty Sexy Money",mp3:"audio/David Guetta  Afrojack - Dirty Sexy Money feat. Charli XCX  French Montana (Lyric Video).mp3"},
			{name:"2U",mp3:"audio/David Guetta Ft. Justin Bieber - 2U.mp3"},
			{name:"Complicated",mp3:"audio/Dimitri Vegas & Like Mike vs David Guetta feat. Kiiara - Complicated (Official Music Video).mp3"},
			{name:"Hands Up",mp3:"audio/Hardwell  Afrojack Feat. Mc Ambush - Hands Up (Extended Mix).mp3"},
			{name:"Jump",mp3:"audio/Major Lazer - Jump (feat. Busy Signal) (Official Audio).mp3"},
            {name:"Silence",mp3:"audio/Marshmello ft. Khalid - Silence (lyrics) [handwritten].mp3"},
            {name:"Bass Slut",mp3:"audio/S3RL - Bass Slut (Original Mix).mp3"}
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