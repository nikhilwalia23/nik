$(document).ready(function() {

    var $submit = $("#dis").hide(),
        $cbs = $('input[name="eg"]').click(function() {
            $submit.toggle( $cbs.is(":checked") );
        });

});
		//hide 
		window.onload = function() {
  document.getElementById('id01').style.display = 'none';
};
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
