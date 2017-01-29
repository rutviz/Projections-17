function updateTimer(deadline){
	var time=deadline - new Date()
	return {
		'days': Math.floor (time/1000/60/60/24),
		'hours': Math.floor ((time/1000/60/60)%24),
		'minutes': Math.floor ((time/1000/60)%60),
		'seconds' : Math.floor ((time/1000)%60)
	}
}

function animateClock(span){
	span.className = "turn"
	setTimeout(function(){
		span.className = ""
	}, 700)
}

function startTimer(id, deadline){
	var timerInterval=setInterval(function(){
		var clock=document.getElementById(id)
		var timer = updateTimer(deadline)
		if (timer.days < 10) { timer.days = '0' + timer.days}
		if (timer.hours < 10) {timer.hours = '0' + timer.hours}
		if (timer.minutes < 10) {timer.minutes = '0' + timer.minutes}
		if (timer.seconds < 10) {timer.seconds = '0' + timer.seconds}

		clock.innerHTML = '<span>' + timer.days + '</span><span>' + timer.hours + '</span><span>' + timer.minutes + '</span><span>' + timer.seconds + '</span><span>'
		

		var spans = clock.getElementsByTagName('span');
		animateClock(spans[3]);
		if (timer.seconds==59)  animateClock(spans[2]);
		if (timer.seconds == 59 && timer.minutes == 59)  animateClock(spans[1])
		if (timer.seconds == 59 && timer.minutes == 59 && timer.hours == 23)  animateClock(spans[0])	

	},1000)
}

window.onload=function(){
	var deadline=new Date("January 30, 2017 00:00:00")
	startTimer("clock",deadline)
}