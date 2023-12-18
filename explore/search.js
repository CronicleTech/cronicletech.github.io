const searchParams = new URLSearchParams(window.location.search);

const searchbar = document.getElementById("search");
const selected = [];
const selectedArray = [];
const isActive = [false, false, false, false, false, false, false, false, false, false, false, false];

const searchbarSeries = document.getElementById("search-series");
const selectedSeries = [];
const selectedSeriesArray = [];
const isActiveSeries = [false, false, false];

const searchbarSlides = document.getElementById("search-slides");
const selectedSlides = [];
const selectedSlidesArray = [];
const isActiveSlides = [false];

const searchbarQuizzes = document.getElementById("search-quizzes");
const selectedQuizzes = [];
const selectedQuizzesArray = [];
const isActiveQuizzes = [false, false, false];

function page(num) {

	const pages = document.getElementsByClassName("page");
	const buttons = document.getElementsByClassName("type");

	for (var i = 0; i < pages.length; i++) {

		if (i == num) {

			pages[i].classList.add("active");
			buttons[i].classList.add("active");

		} else {

			pages[i].classList.remove("active");
			buttons[i].classList.remove("active");

		}

	}

	searchbar.value = "";
	searchbarSeries.value = "";
	searchbarSlides.value = "";

	search();
	searchSeries();
	searchSlides();

	for (var i = 0; i < selected.length; i++) {

		active(selected[i], selectedArray[i]);

	}

	for (var i = 0; i < selectedSeries.length; i++) {

		activeSeries(selectedSeries[i], selectedSeriesArray[i]);

	}

	for (var i = 0; i < selectedSlides.length; i++) {

		activeSlides(selectedSlides[i], selectedSlidesArray[i]);

	}

}

function search() {

	const search = searchbar.value.toLowerCase();
	const panel = document.querySelectorAll(".apanel");

	if (selected.length == 0) {

		for (var i = 0; i < panel.length; i++) {

			let title = panel[i].getElementsByTagName("h3")[0];

			if (title) {

				let textvalue = title.textContent || title.innerHTML;

				if (textvalue.toLowerCase().indexOf(search) > -1) {

					panel[i].style.display = "";

				} else {

					panel[i].style.display = "none";

				}

			}

		}

	} else {

		for (var i = 0; i < panel.length; i++) {

			let title = panel[i].getElementsByTagName("h3")[0];
			let topic = panel[i].getElementsByClassName("highlight")[0];

			if (title) {

				let textvalue = title.textContent || title.innerHTML;
				let topicvalue = topic.textContent || topic.innerHTML;

				if(selected.includes(topicvalue)) {

					if (textvalue.toLowerCase().indexOf(search) > -1) {

						panel[i].style.display = "";

					} else {

						panel[i].style.display = "none";

					}

				} else {

					panel[i].style.display = "none";

				}

			}

		}

	}

}

function removeSelected(topic) {

	for (var i = 0; i < selected.length; i++) {

		if (selected[i] === topic) {

			selected.splice(i, 1);

		}

	}

}

function resetDefault() {

	if (selected.length == 0) {
		
		const panel = document.querySelectorAll(".apanel");

		for (var i = 0; i < panel.length; i++) {

			panel[i].style.display = "";

		}

	}

}

function searchTopic() {

	const panel = document.querySelectorAll(".apanel");
	const topics = document.getElementsByClassName("highlight");

	for (var i = 0; i < panel.length; i++) {

		let topic = panel[i].getElementsByClassName("highlight")[0];
		let second = panel[i].getElementsByClassName("highlight")[1];

		let textvalue = topic.textContent || topic.innerHTML;
		let secondvalue = second.textContent || second.innerHTML;

		if(selected.includes(textvalue) || selected.includes(secondvalue)) {

			panel[i].style.display = "";

		} else {

			panel[i].style.display = "none";

		}

	}
	
	searchbar.value = "";

}


function active(topic, array) {

	const row = document.getElementById("tbuttons");
	const button = document.getElementById(topic);

	if (!isActive[array]) {

		button.classList.add("active");
		row.prepend(button);

		if (!selected.includes(topic)) {

			selected.push(topic);
			selectedArray.push(array);

		}

		searchTopic();

		isActive[array] = true;

	} else {

		button.classList.remove("active");

		row.appendChild(button);
		removeSelected(topic);

		searchTopic();
		resetDefault();

		isActive[array] = false;

	}

}

function topic(topic, array) {

	window.scrollTo({top: 0, behavior: 'smooth'});

	isActive[array] = false;

	active(topic, array);

}

function searchSeries() {

	const search = searchbarSeries.value.toLowerCase();
	const panel = document.querySelectorAll(".spanel");

	if (selectedSeries.length == 0) {

		for (var i = 0; i < panel.length; i++) {

			let title = panel[i].getElementsByTagName("h3")[0];

			if (title) {

				let textvalue = title.textContent || title.innerHTML;

				if (textvalue.toLowerCase().indexOf(search) > -1) {

					panel[i].style.display = "";

				} else {

					panel[i].style.display = "none";

				}

			}

		}

	} else {

		for (var i = 0; i < panel.length; i++) {

			let title = panel[i].getElementsByTagName("h3")[0];
			let topic = panel[i].getElementsByClassName("highlight")[0];

			if (title) {

				let textvalue = title.textContent || title.innerHTML;
				let topicvalue = topic.textContent || topic.innerHTML;

				if(selectedSeries.includes(topicvalue)) {

					if (textvalue.toLowerCase().indexOf(search) > -1) {

						panel[i].style.display = "";

					} else {

						panel[i].style.display = "none";

					}

				} else {

					panel[i].style.display = "none";

				}

			}

		}

	}

}

function removeSelectedSeries(topic) {

	for (var i = 0; i < selectedSeries.length; i++) {

		if (selectedSeries[i] === topic) {

			selectedSeries.splice(i, 1);

		}

	}

}

function resetDefaultSeries() {

	if (selectedSeries.length == 0) {
		
		const panel = document.querySelectorAll(".spanel");

		for (var i = 0; i < panel.length; i++) {

			panel[i].style.display = "";

		}

	}

}

function searchTopicSeries() {

	const panel = document.querySelectorAll(".spanel");
	const topics = document.getElementsByClassName("highlight");

	for (var i = 0; i < panel.length; i++) {

		let topic = panel[i].getElementsByClassName("highlight")[0];
		let second = panel[i].getElementsByClassName("highlight")[1];

		let textvalue = topic.textContent || topic.innerHTML;
		let secondvalue = second.textContent || second.innerHTML;

		if(selectedSeries.includes(textvalue) || selectedSeries.includes(secondvalue)) {

			panel[i].style.display = "";

		} else {

			panel[i].style.display = "none";

		}

	}
	
	searchbarSeries.value = "";

}


function activeSeries(topic, array) {

	const row = document.getElementById("stbuttons");
	const button = document.getElementById(topic);

	if (!isActiveSeries[array]) {

		button.classList.add("active");
		row.prepend(button);

		if (!selectedSeries.includes(topic)) {

			selectedSeries.push(topic);
			selectedSeriesArray.push(array);

		}

		searchTopicSeries();

		isActiveSeries[array] = true;

	} else {

		button.classList.remove("active");

		row.appendChild(button);
		removeSelectedSeries(topic);

		searchTopicSeries();
		resetDefaultSeries();

		isActiveSeries[array] = false;

	}

}

function topicSeries(topic, array) {

	window.scrollTo({top: 0, behavior: 'smooth'});

	isActiveSeries[array] = false;

	activeSeries(topic, array);

}

function searchSlides() {

	const search = searchbarSlides.value.toLowerCase();
	const panel = document.querySelectorAll(".dpanel");
	

	if (selectedSlides.length == 0) {

		for (var i = 0; i < panel.length; i++) {

			let title = panel[i].getElementsByTagName("h3")[0];

			if (title) {

				let textvalue = title.textContent || title.innerHTML;

				if (textvalue.toLowerCase().indexOf(search) > -1) {

					panel[i].style.display = "";

				} else {

					panel[i].style.display = "none";

				}

			}

		}

	} else {

		for (var i = 0; i < panel.length; i++) {

			let title = panel[i].getElementsByTagName("h3")[0];
			let topic = panel[i].getElementsByClassName("highlight")[0];

			if (title) {

				let textvalue = title.textContent || title.innerHTML;
				let topicvalue = topic.textContent || topic.innerHTML;

				if(selectedSlides.includes(topicvalue)) {

					if (textvalue.toLowerCase().indexOf(search) > -1) {

						panel[i].style.display = "";

					} else {

						panel[i].style.display = "none";

					}

				} else {

					panel[i].style.display = "none";

				}

			}

		}

	}

}

function removeSelectedSlides(topic) {

	for (var i = 0; i < selectedSlides.length; i++) {

		if (selectedSlides[i] === topic) {

			selectedSlides.splice(i, 1);

		}

	}

}

function resetDefaultSlides() {

	if (selectedSlides.length == 0) {
		
		const panel = document.querySelectorAll(".dpanel");

		for (var i = 0; i < panel.length; i++) {

			panel[i].style.display = "";

		}

	}

}

function searchTopicSlides() {

	const panel = document.querySelectorAll(".dpanel");
	const topics = document.getElementsByClassName("highlight");

	for (var i = 0; i < panel.length; i++) {

		let topic = panel[i].getElementsByClassName("highlight")[0];
		let second = panel[i].getElementsByClassName("highlight")[1];

		let textvalue = topic.textContent || topic.innerHTML;
		let secondvalue = second.textContent || second.innerHTML;

		if(selectedSlides.includes(textvalue) || selectedSlides.includes(secondvalue)) {

			panel[i].style.display = "";

		} else {

			panel[i].style.display = "none";

		}

	}
	
	searchbarSlides.value = "";

}

function activeSlides(topic, array) {

	const row = document.getElementById("dtbuttons");
	const button = document.getElementById(topic);

	if (!isActiveSlides[array]) {

		button.classList.add("active");
		row.prepend(button);

		if (!selectedSlides.includes(topic)) {

			selectedSlides.push(topic);
			selectedSlidesArray.push(array);

		}

		searchTopicSlides();

		isActiveSlides[array] = true;

	} else {

		button.classList.remove("active");

		row.appendChild(button);
		removeSelectedSlides(topic);

		searchTopicSlides();
		resetDefaultSlides();

		isActiveSlides[array] = false;

	}

}

function topicSlides(topic, array) {

	window.scrollTo({top: 0, behavior: 'smooth'});

	isActiveSlides[array] = false;

	activeSlides(topic, array);

}

function searchQuizzes() {

	const search = searchbarQuizzes.value.toLowerCase();
	const panel = document.querySelectorAll(".qpanel");
	

	if (selectedQuizzes.length == 0) {

		for (var i = 0; i < panel.length; i++) {

			let title = panel[i].getElementsByTagName("h3")[0];

			if (title) {

				let textvalue = title.textContent || title.innerHTML;

				if (textvalue.toLowerCase().indexOf(search) > -1) {

					panel[i].style.display = "";

				} else {

					panel[i].style.display = "none";

				}

			}

		}

	} else {

		for (var i = 0; i < panel.length; i++) {

			let title = panel[i].getElementsByTagName("h3")[0];
			let topic = panel[i].getElementsByClassName("highlight")[0];

			if (title) {

				let textvalue = title.textContent || title.innerHTML;
				let topicvalue = topic.textContent || topic.innerHTML;

				if(selectedQuizzes.includes(topicvalue)) {

					if (textvalue.toLowerCase().indexOf(search) > -1) {

						panel[i].style.display = "";

					} else {

						panel[i].style.display = "none";

					}

				} else {

					panel[i].style.display = "none";

				}

			}

		}

	}

}

function removeSelectedQuizzes(topic) {

	for (var i = 0; i < selectedQuizzes.length; i++) {

		if (selectedQuizzes[i] === topic) {

			selectedQuizzes.splice(i, 1);

		}

	}

}

function resetDefaultQuizzes() {

	if (selectedQuizzes.length == 0) {
		
		const panel = document.querySelectorAll(".qpanel");

		for (var i = 0; i < panel.length; i++) {

			panel[i].style.display = "";

		}

	}

}

function searchTopicQuizzes() {

	const panel = document.querySelectorAll(".qpanel");
	const topics = document.getElementsByClassName("highlight");

	for (var i = 0; i < panel.length; i++) {

		let topic = panel[i].getElementsByClassName("highlight")[0];

		let textvalue = topic.textContent || topic.innerHTML;

		if(selectedQuizzes.includes(textvalue)) {

			panel[i].style.display = "";

		} else {

			panel[i].style.display = "none";

		}

	}
	
	searchbarQuizzes.value = "";

}

function activeQuizzes(topic, array) {

	const row = document.getElementById("qtbuttons");
	const button = document.getElementById(topic);

	if (!isActiveQuizzes[array]) {

		button.classList.add("active");
		row.prepend(button);

		if (!selectedQuizzes.includes(topic)) {

			selectedQuizzes.push(topic);
			selectedQuizzesArray.push(array);

		}

		searchTopicQuizzes();

		isActiveQuizzes[array] = true;

	} else {

		button.classList.remove("active");

		row.appendChild(button);
		removeSelectedQuizzes(topic);

		searchTopicQuizzes();
		resetDefaultQuizzes();

		isActiveQuizzes[array] = false;

	}

}

function topicQuizzes(topic, array) {

	window.scrollTo({top: 0, behavior: 'smooth'});

	isActiveQuizzes[array] = false;

	activeQuizzes(topic, array);

}

if (searchParams.has('p')) {

	const pagenum = searchParams.get('p');

	page(pagenum);

}

if (searchParams.has('q')) {

	const query = searchParams.get('q');

	searchbar.value = query;

	search();

}

if (searchParams.has('t')) {

	const topic = searchParams.get('t');
	const array = searchParams.get('n');

	if (!searchParams.has('p')) {

		active(topic, array);

	} else {

		const pagenum = searchParams.get('p');

		if (pagenum == 1) {

			activeSeries(topic, array);

		} else if (pagenum == 2) {

			activeSlides(topic, array);

		}

	}

}