var Nightmare = require('nightmare');
var nightmare = Nightmare({ show: false })

nightmare
	.goto('http://localhost/flurry/flurry.html')
	// .type('form[action*="/search"] [name=p]', 'github nightmare')
	// .click('form[action*="/search"] [type=submit]')
	// .wait('#main')
	.then(function (result) {
		console.log(result)
	})
	.catch(function (error) {
		console.error('Search failed:', error);
	});