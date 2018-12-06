<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="assets/js/materialize.js"></script>
<script src="assets/js/init.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="assets/js/script.js"></script>
<script>

  	M.AutoInit();
	
	document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.fixed-action-btn');
	    var instances = M.FloatingActionButton.init(elems);
	});

	document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.scrollspy');
	    var instances = M.ScrollSpy.init(elems);
	});

	document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.modal');
	    var instances = M.Modal.init(elems);
	});

	document.addEventListener('DOMContentLoaded', function() {
	    var elems = document.querySelectorAll('.tooltipped');
	    var instances = M.Tooltip.init(elems);
	  });

	$(document).ready(function() {
    	M.updateTextFields();
  	});






	function dieCookie() {
    	// instanceMenu.destroy();
    	document.getElementById('delForDieCookie').innerHTML = "";
    }

  	document.addEventListener('DOMContentLoaded', function() {
    	var elems = document.querySelectorAll('.tap-target');
    	var instances = M.TapTarget.init(elems, {onClose : dieCookie()});
  	});
  

    var instanceMenu = M.TapTarget.getInstance(document.getElementById('menuOpen'));
    
    <?php
    	if (isset($_SESSION['user'])) {
    		echo "dieCookie();";
    	}
    	else {
			echo "instanceMenu.open();";
    	}
    ?>


    

	$(document).ready(function() {
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('href'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
	});

	//js-scrollTo

</script>