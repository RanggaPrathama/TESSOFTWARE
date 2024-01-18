function convertAMPMto24Hours(timeString) {
    var timeArray = timeString.split(":");
    var hours = parseInt(timeArray[0], 10);
    var minutes = parseInt(timeArray[1], 10);
  
    
    if (timeString.toLowerCase().indexOf('pm') !== -1 && hours < 12) {
      hours += 12;
    }
  
  
    if (timeString.toLowerCase().indexOf('am') !== -1 && hours === 12) {
      hours = 0;
    }

    var hours24 = hours < 10 ? "0" + hours : hours;
    var minutes24 = minutes < 10 ? "0" + minutes : minutes;
  
    
    var time24 = hours24 + ":" + minutes24;
  
    return time24;
  }
  
  
  var ampmTime = "03:30 PM";
  var militaryTime = convertAMPMto24Hours(ampmTime);
  console.log(militaryTime);
  