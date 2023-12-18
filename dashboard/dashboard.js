const qtitles = [
	"American History",
	"Computer Parts",
	"Crypto Craze",
	"Economics Essentials",
	"Elementary Science",
	"Prealgebra Foundations",
	"SEA Tech Unicorns",
	"Social Media",
	"Web Development",
	"World Geography"
];

const qlinks = [
	"american-history",
	"computer-parts",
	"crypto-craze",
	"economics-essentials",
	"elementary-science",
	"prealgebra-foundations",
	"sea-tech-unicorns",
	"social-media",
	"web-development",
	"world-geography"
]

const qnums = [ 6, 9, 9, 9, 7, 8, 5, 9, 8, 7 ]

var qrandom = [];
var qdivision = Math.floor(qtitles.length / 3);

var qheadings = document.getElementsByClassName("qheading");
var qdescs = document.getElementsByClassName("qdesc");

var qanchors = document.getElementsByClassName("qanchor");
var qimages = document.getElementsByClassName("qimage");

for (var i = 0; i < 3; i++) {

	qrandom[i] = Math.floor(Math.random() * qdivision) + i * qdivision;

	qheadings[i].innerHTML = qtitles[qrandom[i]];
	qdescs[i].innerHTML = qnums[qrandom[i]] + " Questions";

	qanchors[i].href = "https://cronicle.space/quizzes/" + qlinks[qrandom[i]] + "/";
	qimages[i].src = "../quizzes/image/" + qlinks[qrandom[i]] + ".webp";

}

const atitles = [
	"What are 3D Printers and How are They Different From 2D Printers?",
	"All About Biometrics",
	"Hidden Gems of the “Bakiak Slippers Project”",
	"Bank Indonesia: What It Has Done and Can Do for the Impending Recession",
	"How Banks Can Minimize the Impacts of Recession",
	"The Greater Benefits of Having More Female Representations",
	"Black Holes and Wormholes",
	"Color Coded Notes - A Productive Way to Study",
	"Why Cryptocurrencies are Losing Value",
	"Cybersecurity - How to Keep Yourself Safe in the Digital World",
	"Five Lessons from the Global Pre-and Post-Economic Situation and Recovery",
	"Are Advertisements Effective in Driving Corporate Goals?",
	"The Surprising Effects of Establishing Competition Among Youngsters",
	"5 Tips: How To Create an Excellent Presentation",
	"Imperialism: Effects on India",
	"Is Sharing Information for Scientific and Academic Behalf Crucial?",
	"Pomodoro Study Technique - What Is It and Does It Work?",
	"Public Relations vs Marketing Strategies",
	"Quantum Supremacy Blog on Bell’s Inequality",
	"Applications of Quantum Computing",
	"Quantum Computing Principles in a Nutshell",
	"Ways to Study For Long Hours Without Getting Bored",
	"Our Future: The Metaverse",
	"3 Ways of Beating Procrastination",
	"What is SEO? Here's Everything You Need to Know",
	"Why Every Child Should Learn Coding",
	"3 Reasons Why Teens Should Volunteer"
];

const alinks = [
	"2d-vs-3d-printers",
	"all-about-biometrics",
	"bakiak-slippers",
	"bank-indonesia",
	"bank-recession",
	"benefits-of-female-leaders",
	"blackholes-and-wormholes",
	"color-coded-notes",
	"cryptocurrencies-losing-value",
	"cybersecurity-safety",
	"economic-recovery",
	"effectiveness-of-advertisements",
	"effects-of-competition",
	"excellent-presentation-tips",
	"imperialism-on-india",
	"information-sharing",
	"pomodoro-technique",
	"pr-vs-marketing",
	"quantum-bells-inequality",
	"quantum-computing-applications",
	"quantum-computing-principles",
	"study-for-hours",
	"the-metaverse",
	"ways-to-beat-procrastination",
	"what-is-seo",
	"why-learn-coding",
	"why-teens-volunteer"
];

const adescs = [
	"technology",
	"technology",
	"community",
	"finance",
	"finance",
	"leadership",
	"school",
	"productivity",
	"finance",
	"technology",
	"finance",
	"marketing",
	"productivity",
	"school",
	"school",
	"productivity",
	"productivity",
	"marketing",
	"technology",
	"technology",
	"technology",
	"productivity",
	"technology",
	"productivity",
	"marketing",
	"technology",
	"community"
];

var defaulttopics = [
	"productivity",
	"technology",
	"marketing",
	"finance",
	"school",
	"community",
	"growth",
	"leadership",
	"volunteering",
	"science",
	"history",
	"coding"
];

var aheadings = document.getElementsByClassName("aheading");
var anchors = document.getElementsByClassName("anchor");
var aimages = document.getElementsByClassName("aimage");

var highlights = document.getElementsByClassName("highlight");
var ahighlights = document.getElementsByClassName("ahighlight");

var arandom = [];
var adivision = Math.floor(atitles.length / 6);

for (var i = 0; i < 6; i++) {

	arandom[i] = Math.floor(Math.random() * adivision + i * adivision);

	aheadings[i].innerHTML = atitles[arandom[i]];
	anchors[i].href = "https://cronicle.space/articles/" + alinks[arandom[i]] + "/";
	aimages[i].src = "../articles/image/" + alinks[arandom[i]] + ".webp";

	highlights[i].innerHTML = adescs[arandom[i]];

	for (var j = 0; j < defaulttopics.length; j++) {

		if (adescs[arandom[i]] == defaulttopics[j]) {

			ahighlights[i].href = "https://cronicle.space/explore/?t=" + adescs[arandom[i]] + "&n=" + j;

		}

	}

}