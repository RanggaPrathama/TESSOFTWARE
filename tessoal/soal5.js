function convertToEnglishWords(hours, minutes) {
    const hourWords = [
        "midnight", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten", "eleven", "twelve"
    ];

    const minuteWords = [
        "", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine", "ten",
        "eleven", "twelve", "thirteen", "fourteen", "fifteen", "sixteen", "seventeen",
        "eighteen", "nineteen", "twenty"
    ];

    
    let hourWord = hourWords[hours % 12];
    if (hours === 0 || hours === 24) {
        hourWord = hourWords[0];
    }

    let minuteWord = "";
    if (minutes > 0 && minutes <= 20) {
        minuteWord = minuteWords[minutes];
    } else if (minutes > 20) {
        minuteWord = "twenty " + minuteWords[minutes % 10];
    }

    
    const period = (hours < 12) ? "morning" : "afternoon";

    // Construct the English words
    let result = `It's ${hourWord}`;
    if (minutes > 0) {
        result += ` ${minuteWord}`;
    }
    result += ` in the ${period}.`;

    return result;
}

// Contoh penggunaan
console.log(convertToEnglishWords(15, 30)); 
console.log(convertToEnglishWords(8, 45));  
