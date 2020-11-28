/* Positions the shadow beneath major elements so they flow between the shadow 
   and the main navigation bar. */

jQuery(document).ready(function() {
	var nav = jQuery("#nav--header").clone();
	nav.prop("id","nav--shadow");
	nav.find('a').removeAttr("href");
	nav.find('input').attr("disabled",true);
	nav.find('button').attr("disabled",true);
	nav.prependTo(jQuery("body"));
	
	jQuery("#nav--header").css("box-shadow","none");
	nav.css("position","fixed");
	nav.css("width","100vw");
	nav.css("z-index",1);
	
	jQuery("header").css("position","relative");
	jQuery("header").css("z-index",2);
	jQuery("footer").css("position","relative");
	jQuery("footer").css("z-index",2);
});