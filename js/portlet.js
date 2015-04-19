 $(document).ready(function(){
	   $('#sidebar').on('mouseenter', '.portlet', function(){
		   $('.portlet-content').slideDown('fast');
		   
	   }).on('mouseleave', '.portlet', function(){
		   
		   $('.portlet-content').slideUp('fast');
	   });
 });
 