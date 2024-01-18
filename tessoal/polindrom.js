function isPalindrome(number) {
    var originalNumber = number;
    var reversedNumber = 0;
    
    while (number > 0) {
      var digit = number % 10;
      reversedNumber = reversedNumber * 10 + digit;
      number = Math.floor(number / 10);
    }
  
    return originalNumber === reversedNumber;
  }
  
 
  var angka = 131;
  
  if (isPalindrome(angka)) {
    console.log(angka + " adalah  palindrom.");
  } else {
    console.log(angka + " bukan angka palindrom.");
  }
  