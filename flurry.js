var webPage = require('webpage');
var page = webPage.create();

page.onConsoleMessage = function(msg) {
  console.log('The web page said: ' + msg);
};

page.open('http://localhost/flurry/flurry.html', function(status) {
  page.evaluateJavaScript('init();');
  phantom.exit();
});