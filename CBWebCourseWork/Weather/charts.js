// Temperature colour edit
var colourInputTemp1 = document.getElementById('temp-colour1');
var colourInputTemp2 = document.getElementById('temp-colour2');
var tempColour1 = colourInputTemp1.value;
var tempColour2 = colourInputTemp2.value;

colourInputTemp1.addEventListener('input', function(e) {
  tempColour1 = colourInputTemp1.value;
  tempChart.config.data.datasets[0].borderColor = tempColour1;
  tempChart.update();
});
colourInputTemp2.addEventListener('input', function(e) {
  tempColour2 = colourInputTemp2.value;
  tempChart.config.data.datasets[0].backgroundColor = tempColour2;
  tempChart.update();
});

// Humidity colour edit
var humidIcon = document.getElementById("humid-icon");
var colourInputHumid1 = document.getElementById('humid-colour1');
var colourInputHumid2 = document.getElementById('humid-colour2');
var humidColour1 = colourInputHumid1.value;
var humidColour2 = colourInputHumid2.value;

colourInputHumid1.addEventListener('input', function(e) {
  humidColour1 = colourInputHumid1.value;
  humidChart.config.data.datasets[0].borderColor = humidColour1;
  humidChart.update();
});
colourInputHumid2.addEventListener('input', function(e) {
  var humidColour2 = colourInputHumid2.value;
  humidChart.config.data.datasets[0].backgroundColor = humidColour2;
  humidChart.update();
});

// Wind Speed colour edit
var colourInputWind1 = document.getElementById('wind-colour1');
var colourInputWind2 = document.getElementById('wind-colour2');
var windColour1 = colourInputWind1.value;
var windColour2 = colourInputWind1.value;

colourInputWind1.addEventListener('input', function(e) {
  windColour1 = colourInputWind1.value;
  windChart.config.data.datasets[0].borderColor = windColour1;
  windChart.update();
});
colourInputWind2.addEventListener('input', function(e) {
  windColour2 = colourInputWind2.value;
  windChart.config.data.datasets[0].backgroundColor = windColour2;
  windChart.update();
});