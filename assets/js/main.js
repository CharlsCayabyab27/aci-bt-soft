
function getOrdinalSuffix(number) {
  if (number % 100 >= 11 && number % 100 <= 13) {
      return "th";
  }
  switch (number % 10) {
      case 1: return "st";
      case 2: return "nd";
      case 3: return "rd";
      default: return "th";
  }
}
function convertTime(timeInput) {
  // Get the input element
  // var timeInput = document.getElementById('timeInput');
  // Split the input value into hours and minutes
  var timeParts = timeInput.split(':');
  var hours = parseInt(timeParts[0]);
  var minutes = parseInt(timeParts[1]);

  // Determine AM or PM
  var period = (hours >= 12) ? 'PM' : 'AM';

  // Convert to 12-hour format
  hours = (hours > 12) ? hours - 12 : hours;
  hours = (hours == 0) ? 12 : hours;

  // Return the converted time
  return hours + ':' + minutes.toString().padStart(2, '0') + ' ' + period;
}
function numberToWords(number) {
  const ones = ['', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine'];
  const teens = ['', 'Eleven', 'Twelve', 'Thirteen', 'Fourteen', 'Fifteen', 'Sixteen', 'Seventeen', 'Eighteen', 'Nineteen'];
  const tens = ['', 'Ten', 'Twenty', 'Thirty', 'Forty', 'Fifty', 'Sixty', 'Seventy', 'Eighty', 'Ninety'];
  const suffixes = ['', 'Thousand', 'Million', 'Billion', 'Trillion'];

  function convertGroup(num) {
    const [hundreds, tensAndOnes] = [Math.floor(num / 100), num % 100];
    let result = '';

    if (hundreds > 0) {
      result += ones[hundreds] + ' Hundred ';
    }

    if (tensAndOnes > 0) {
      if (tensAndOnes === 10) {
        result += 'Ten';
      } else if (tensAndOnes < 10) {
        result += ones[tensAndOnes];
      } else if (tensAndOnes < 20) {
        result += teens[tensAndOnes - 10];
      } else {
        const [tensDigit, onesDigit] = [Math.floor(tensAndOnes / 10), tensAndOnes % 10];
        result += tens[tensDigit] + ' ' + ones[onesDigit];
      }
    }

    return result.trim();
  }

  if (number === 0) {
    return 'Zero';
  }

  let words = '';
  let groupIndex = 0;

  while (number > 0) {
    const group = number % 1000;
    if (group > 0) {
      const groupWords = convertGroup(group) + ' ' + suffixes[groupIndex];
      words = groupWords + ' ' + words;
    }
    number = Math.floor(number / 1000);
    groupIndex++;
  }

  return words.trim();
}


 
    function toggleFields() {
      var certificateType = document.getElementById('certificateType').value;
      var forms = document.getElementsByClassName('certificates')[0].children;
      
      
      for (var i = 0; i < forms.length; i++) {
        if (forms[i].id === certificateType) {
            forms[i].classList.add('active');
   
        } else {
            forms[i].classList.remove('active');
        }
    }
    var iframe = document.getElementById('myIframe');
    doc ="certificates/"+certificateType + ".html"

        document.getElementById(certificateType).querySelectorAll('input[type=text], input[type=number]').forEach(function(input) {
        input.setAttribute('oninput', 'updateText()');
        // console.log(input);
        });
        document.getElementById(certificateType).querySelectorAll('input[type=date], input[type=time]').forEach(function(input) {
        input.setAttribute('onchange', 'updateText()');
        });
        document.getElementById(certificateType).querySelectorAll('input[type=checkbox]').forEach(function(input) {
          input.setAttribute('onclick', 'updateText()');
          });

      // console.log(doc);
      iframe.src = doc;  
  }





  
  function printIframe() {
    var iframe = document.getElementById('myIframe');
var iframeWindow = iframe.contentWindow;
iframeWindow.print(); 
  }

  function updateText() { 

    var iframe = document.getElementById('myIframe');          


        var text = document.getElementById(document.getElementById('certificateType').value).querySelectorAll('input[type=text]');
        var number =document.getElementById(document.getElementById('certificateType').value).querySelectorAll('input[type=number]');
        var date= document.getElementById(document.getElementById('certificateType').value).querySelectorAll('input[type=date]');
        var time= document.getElementById(document.getElementById('certificateType').value).querySelectorAll('input[type=time]');
        var checkbox = document.getElementById(document.getElementById('certificateType').value).querySelectorAll('input[type=checkbox]');
    
      // console.log(text[0].value);
      var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;
      var data = {};
      for (var x = 0; x < text.length; x++) {
       
        var Var = iframeDocument.getElementById('var'+x);
        if (Var) {
          Var.innerText = text[x].value;
      }
       
        }
    
    
    
  for (var x = 0; x < number.length; x++) {
    var Number = iframeDocument.getElementById('num'+x);
    
    if (certificateType.value == 'lot_ownership' && x == 1) {
        let lotnum = iframeDocument.getElementById('lotnum');
        
        if (lotnum) {
            Number.innerText = number[x].value;
            lotnum.innerText = numberToWords(number[x].value);
        }
    } else if (Number) {
        Number.innerText = number[x].value;
    }
}

  for (var x = 0; x < date.length; x++) {
    var day = iframeDocument.getElementById('day'+x);
    var month = iframeDocument.getElementById('month'+x);
    var year = iframeDocument.getElementById('year'+x);
    var sup = iframeDocument.getElementById('sup'+x);

    var dateValue = new Date(date[x].value);

  
        if (day || month || year) {
            day.innerText = dateValue.toLocaleDateString('en-US',{day: 'numeric'});
          year.innerText = dateValue.toLocaleDateString('en-US',{year: 'numeric'});
         
        }
        if (month) {
          month.innerText = dateValue.toLocaleDateString('en-US',{month: 'long'});
        }
        if(sup){

          sup.innerText = getOrdinalSuffix(dateValue.getDate());
        }

  }

  for (var x = 0; x < time.length; x++) {

    var Time = iframeDocument.getElementById('time'+x);
    if (Time) {
      Time.innerText = convertTime(time[x].value);

      
  }
}
if(certificateType.value == 'lot_ownership') {
  for (let y = 0; y < checkbox.length; y++) {
    var check = iframeDocument.getElementById('check'+y);
    if (checkbox[y].checked) {
        check.innerText = '/';
    } else {
        check.innerText = ' ';
    }
}

}
console.log(document.getElementById('gg').value);

if(certificateType.value == 'barangay_clearance') {

  
  // switch () {
  //   case value:
      
  //     break;
  
  //   default:
  //     break;
  }


}
if (certificateType.value == 'certificate_of_income') {
var num = iframeDocument.getElementById('intext').value;

if (num ) { 

  num.innerText = 

}
if (certificateType.value == 'indigency') {
  var stat = iframeDocument.getElementById('stat');
  var stato = document.getElementById('civil').value;

  switch (stato) {
      case 'm':
        
          stat.innerHTML = "<u>married</u>, single, widow";
          break;
      case 'w':
          stat.innerHTML = "married, single, <u>widow</u>";
          break;
      case 's':
          stat.innerHTML = "married, <u>single</u>, widow";
          break;
      default:
          stat.innerText = "married, single, widow";
          break;
  }
}


}

function update() {
  
  var iframe = document.getElementById('myIframe');          
  var iframeDocument = iframe.contentDocument || iframe.contentWindow.document;

  var stat = iframeDocument.getElementById('stats');

  stat.innerText =  document.getElementById('gg').value;
  console.log(document.getElementById('gg').value);
  
}


document.addEventListener('DOMContentLoaded', function() {
  const currentDate = new Date();

    const day = currentDate.getDate();
    const month = currentDate.getMonth() ; 
    const year = currentDate.getFullYear();

    const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    const monthName = monthNames[month];
  document.getElementById('days').innerText = day;
  document.getElementById('months').innerText = monthName;
  document.getElementById('sups').innerText = getOrdinalSuffix(day);
  document.getElementById('years').innerText =year;
});
console.log('tset');

console.log(numberToWords(10000)); // Output: "Ten Thousand"
