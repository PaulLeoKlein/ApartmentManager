$(document).ready(function() {
  $.simpleWeather({
    woeid: '2389087', //2357536
    location: '',
    unit: 'f',
    success: function(weather) {
      html = '<h2>Current Temperature: '+weather.temp+'&deg;'+weather.units.temp+'</h2>';
      html += '<ul><li class="currently">'+weather.currently+'</li>';
      html += '<li>'+weather.city+', '+weather.region+'</li>';
      
      for(var i=0;i<weather.forecast.length;i++) {
        html += '<p>'+weather.forecast[i].day+': '+weather.forecast[i].high+'</p>';
      }
  
      $("#weather").html(html);
    },
    error: function(error) {
      $("#weather").html('<p>'+error+'</p>');
    }
  });
});
