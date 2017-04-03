casper.options.viewportSize = {width: 1024, height: 768};
casper.test.begin("Testing Button", 1, function buttonTest(test) {
    casper.start("https://serene-stream-84316.herokuapp.com/", function() {
    	//Click Button
    	casper.click('#button');
    	test.assertSelectorHasText('#test', 'Some Text');
    }).run(function() {
        test.done();
    });
});