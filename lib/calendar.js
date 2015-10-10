$(document).ready(function() {
  var calendar = $('#calendar').fullCalendar({
   editable: false,
   eventLimit: true,
   selectable: true,
   selectHelper: true,
   defaultView: 'agendaWeek',
   header: {
    left: 'prev,next today',
    center: 'title',
    right: 'month,agendaWeek,agendaDay'
   },
   events: "events.php",
   select: function(start, end) {
	var start = moment(start).format("YYYY-MM-DD HH:mm:ss");
   var end = moment(end).format("YYYY-MM-DD HH:mm:ss");
   var decide = confirm("Would you like to create an event?"); 
   if (decide == true) {
   var title = prompt("Event Title:");
   if (title != null) {
   var person = prompt("Who is creating this event?");
   if(person.toLowerCase() == "Paul".toLowerCase()){
	color = "#19D419"; 
   } else if (person.toLowerCase() == "Andrew".toLowerCase()) {
   color = "#3366FF";
   } else if (person.toLowerCase() == "Karissa".toLowerCase()) {
   color = "#FF00FF";
   } else if (person.toLowerCase() == "Matt".toLowerCase()) {
   color = "#FF9900";
   } else if (person.toLowerCase() == "Jonathan".toLowerCase()) {
   color = "#00CCFF";
   } else {}
   var newEvent = {
   title: title,
   start: start,
   end: end,
   eventColor: color
   };
   $.ajax({
   url: "add_events.php",
   type: "POST",
   data: {
    "atitle": title,
    "astart": start,
    "aend": end,
    "acolor": color},
   success: function(json) {
   alert("Added Successfully");
							}
   });
   calendar.fullCalendar('renderEvent', newEvent, true);
   }
   calendar.fullCalendar('unselect');
   }},
   
eventClick: function(event) {
var decision = confirm("Do you want to delete this event?"); 
if (decision == true) {
$.ajax({
type: "POST",
url: "delete_event.php",
data: "&id=" + event.id,
 success: function(json) {
	 $('#calendar').fullCalendar('removeEvents', event.id);
	  alert("Updated Successfully");}
});
}
  },
  
 });
  
 });
