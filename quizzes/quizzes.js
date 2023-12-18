var page = 0;
const buttons = document.getElementsByClassName("next");

var score;

var correct = 0;
var incorrect = 0;

var starttime;
var endtime;

function nextpage (which) {

	const button = buttons[which];
	const pages = document.getElementsByClassName("page");

	if (button.classList.contains("active")) {

		page++;

		for (var i = 0; i < pages.length; i++) {

			if (i == page) {

				pages[i].style.display = "initial";

			} else {

				pages[i].style.display = "none";

			}

		}

		window.scrollTo({top: 0});

	}

	if (page == 1) {

		starttime = performance.now();

	}

	if (page == (buttons.length - 1)) {

		const progress = document.getElementById("progress");

		score = Math.floor(correct / (correct + incorrect) * 100);

		progress.innerHTML = score + "%";
		progress.style.width = score + "%";

		if (score == 0) {

			progress.style.marginLeft = "50px";

		}

		const correctp = document.getElementById("correct");
		const incorrectp = document.getElementById("incorrect");

		correctp.innerHTML = correct;
		incorrectp.innerHTML = incorrect;

		const timep = document.getElementById("time");

		endtime = performance.now();

		timep.innerHTML = Math.floor((endtime - starttime) / 1000) + " s";

	}

}

var answered = [];

for (var i = 0; i < buttons.length; i++) {

	answered[i] = false;

}

function check(answer, which, correctnum) {

	const button = document.getElementsByClassName("qbutton")[which];
	const correctbutton = document.getElementsByClassName("qbutton")[correctnum];
	const nextbutton = buttons[page];

	if (!answered[page]) {

		if (answer) {

			button.classList.add("true");
			button.classList.add("selected");

			correct++;

		} else {

			button.classList.add("false");
			button.classList.add("selected");

			correctbutton.classList.add("true");
			correctbutton.classList.add("selected");

			incorrect++;

		}

		for (var i = (page - 1) * 4; i < (page * 4); i++){

			var buttonrest = document.getElementsByClassName("qbutton")[i];

			if (!buttonrest.classList.contains("selected")) {

				buttonrest.classList.add("rest");

			}

		}

		nextbutton.classList.add("active");

		answered[page] = true;

	}

}

function answer(which) {

	const panel = document.getElementsByClassName("panel")[which];

	if (panel.classList.contains("active")) {

		panel.classList.remove("active");

	} else {

		panel.classList.add("active");

	}

}