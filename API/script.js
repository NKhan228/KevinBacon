var city = "Portland";

$.getJSON("https://api.openweathermap.org/data/2.5/weather?q=" + city +"&units=imperial&appid=b43206c180a0ec617ea5adfbd4b77f75", 
    function(data){
    console.log(data);
    
    var icon = "http://openweathermap.org/img/w/" + data.weather[0].icon + ".png";
    var temp = Math.floor(data.main.temp);
    var weather = data.weather[0].main;
    var windspeed = data.wind.speed;
    var humidity = data.main.humidity;
    var feelslike = data.main.feels_like;
    var maxtemp = data.main.temp_max;
    var mintemp = data.main.temp_min;
    
    $('.icon').attr('src', icon);
    $('.weather').append(weather);
    $('.temp').append(temp);
    $('.wspeed').append(windspeed);
    $('.humid').append(humidity);
    $('.feels').append(feelslike);
    $('.maxtemp').append(maxtemp);
    $('.mintemp').append(mintemp);
    
}
);