<script  src="js/jquery.min.js"></script>
<script>
$(document).ready(function () {
  var trigger = $('.hamburger'),
      overlay = $('.overlay'),
     isClosed = false;

    trigger.click(function () {
      hamburger_cross();
    });

    function hamburger_cross() {

      if (isClosed == true) {
        overlay.hide();
        trigger.removeClass('is-open');
        trigger.addClass('is-closed');
        isClosed = false;
      } else {
        overlay.show();
        trigger.removeClass('is-closed');
        trigger.addClass('is-open');
        isClosed = true;
      }
  }

  $('[data-toggle="offcanvas"]').click(function () {
        $('#wrapper').toggleClass('toggled')
				$('#sidebar-wrapper').toggleClass('set-width');
  });
});
</script>

<script>
	function fStorySelected() {
		document.getElementById('storylistdiv').style.display = 'none';
		document.getElementById('formdiv').style.display = 'block';
	}
</script>
