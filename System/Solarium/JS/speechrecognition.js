function reconocimientovocal(){
  var btn = document.getElementById("btn");
var interimResult = document.getElementById("interimResult");
var finalResult = document.getElementById("quequiere");

var finalTranscript = "";
var isRecognizing = false;

var SpeechRecognition = SpeechRecognition || webkitSpeechRecognition;
var recognition = new SpeechRecognition();
recognition.continuous = true;
recognition.interimResults = true;
recognition.lang = 'es_AR';

btn.addEventListener("click", function(event){
  if (isRecognizing) {
    recognition.stop();
    btn.value="start to listen";
  } else {  
    finalTranscript = "";
    finalResult.innerHTML = "";
    interimResult.innerHTML = "";
    btn.value="stop";
    recognition.start();
  }
});


recognition.onresult = function(event) {
  $("#quequiere").attr("value",finalTranscript);
  var interimTranscript = "";
  for (var i = event.resultIndex; i < event.results.length; i++) {
    var _transcript = event.results[i][0].transcript;
    if (event.results[i].isFinal) {
      finalTranscript += StringUtils.capitalize(_transcript) + ".";
    } else {
      interimTranscript += _transcript;
    }
  }
  finalResult.innerHTML = finalTranscript;
  interimResult.innerHTML = interimTranscript;
};
recognition.onstart = function() {
    isRecognizing = true;
};
recognition.onend = function() {

  $("#quequiere").attr("value",finalTranscript);
  piensa();
  isRecognizing = false;
  if (!finalTranscript) {
    return;
    alert("no");
  }
};
/*
recognition.onerror = function(event) {
  alert("error: "+event.error);
  console.log(event.error);
  //'no-speech','audio-capture','not-allowed'
};*/


var StringUtils = {
  FIRST_CHAR : /\S/,
  capitalize : function(s) {
    return s.replace(this.FIRST_CHAR, function(m) { return m.toUpperCase(); });
  }
}
}