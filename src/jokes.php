<?php

function dadJoke() {
	 $jokes = array(
	 	"I used to be addicted to soap, but I'm clean now.",
		"A guy walks into a bar... and he was disqualified from the limbo contest.",
		"You think swimming with sharks is expensive? Swimming with sharks cost me an arm and a leg.",
		"When two vegans get in an argument, is it still called a beef?",
		"I ordered a chicken and an egg from Amazon. I'll let you know...",
		"That car looks nice but the muffler seems exhausted.",
		"Shout out to my fingers. I can count on all of them."
	 );
	 $rand_key = array_rand($jokes,1);
	 return $jokes[$rand_key] . "\n";
}

?>