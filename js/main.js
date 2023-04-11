jQuery(function($) {

$('#iframe').load(function() {
$('#content').text($('#iframe').contents().find('html').html());
$(this).contents().find('h1').css({ 'color': 'red'});

});
});
