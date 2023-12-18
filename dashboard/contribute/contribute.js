var form = document.forms['form'];

var scripturl = 'https://script.google.com/macros/s/AKfycbyWCJK8kLSMr8IodeH2sDDi_452hDVk8pjRjlzSiyVA-O3BaHxalVww-j1dAL3ydroJDw/exec';

form.addEventListener('submit', e => {

	e.preventDefault();

	fetch(scripturl, { 
		method: 'POST', 
		body: new FormData(form)
	});

	var data = new FormData(event.target);

	fetch(event.target.action, {
    	method: form.method,
    	body: data,
    	headers: {
        	'Accept': 'application/json'
    	}
  	}).then(response => {
    	if (response.ok) {

      		form.reset();

      		window. location. assign("https://cronicle.space/dashboard/success/");

    	}
	});

});



const selected = [];
const selectedArray = [];
const isActive = [false, false, false, false, false, false, false, false, false, false, false, false];

function removeSelected(topic) {

	for (var i = 0; i < selected.length; i++) {

		if (selected[i] === topic) {

			selected.splice(i, 1);

		}

	}

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

		isActive[array] = true;

	} else {

		button.classList.remove("active");

		row.appendChild(button);
		removeSelected(topic);

		isActive[array] = false;

	}

}