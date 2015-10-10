$(document).ready(function() {
$('#showdays').hide();
$('#advanced').hide();
$('#recurringYes').change(function() {
    if(this.checked) {
        $('#showdays').show();
    }
});
$('#recurringNo').change(function() {
    if(this.checked) {
        $('#showdays').hide();
    }
});
$('#advancedYes').change(function() {
    if(this.checked) {
        $('#advanced').show();
	$('#advancedpre').hide();
    }
});
$('#advancedNo').change(function() {
    if(this.checked) {
        $('#advanced').hide();
    }
});
$("submit").click(function(){
    $.post("demo_test_post.asp",
    {
      name:"Donald Duck",
      city:"Duckburg"
    },
    function(data,status){
      alert("Data: " + data + "\nStatus: " + status);
    });
  });
});
