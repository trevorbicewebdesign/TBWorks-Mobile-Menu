window.addEvent('domready', function(){
	var menuopen = false;
	function selectMenu(el) {
		window.location.href = el.options[el.selectedIndex].value;
	}
	$$('#tbworks_mobilemenu').addEvent('click', function() {
		if(!this.hasClass('active')) {
			this.addClass('active');
		}
	});
	$$('#tbworks_mobilemenu').addEvent('mouseleave', function() {
		// alert('2');
		if(menuopen==false) {
			$$('#tbworks_mobilemenu').removeClass('active');	
		}
	});
	$$('#tbworks_mobilemenu option').addEvent('mouseleave', function() {
		if(menuopen==false) {
			$$('#tbworks_mobilemenu').removeClass('active');	
		}
	});
	$$('#mainmenu')[0].addEvent('focus', function(){
		menuopen = true;
	});
	$$('#mainmenu')[0].addEvent('blur', function(){
		menuopen = false;
		$$('#tbworks_mobilemenu').removeClass('active');	
	});
	$$('#mainmenu')[0].addEvent('change', function(){
		selectMenu(this);
	});
});