
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
        if (tensAndOnes < 10) {
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
      return 'zero';
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

  function commonText(data) {
      names=Object.keys(data);
       value = Object.values(data);
       console.log(names);
       for (let i = 0; i < names.length; i++) {
         
           document.getElementById(names[i]).innerText =  value[i] || '';
           }}//?
  
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

        document.getElementById(certificateType).querySelectorAll('input[type=text]').forEach(function(input) {
        input.setAttribute('onkeyup', 'updateText()');
        console.log(input);
        });
        document.getElementById(certificateType).querySelectorAll('input[type=date]').forEach(function(input) {
        input.setAttribute('onchange', 'updateText()');
        });

      console.log(doc);
      iframe.src = doc;  

  }


  function printIframe() {
    var iframe = document.getElementById('myIframe');
var iframeWindow = iframe.contentWindow;
iframeWindow.print(); 
  }

  function updateText() { 
    console.log("okkk");
    var iframe = document.getElementById('myIframe').contentWindow;
      var text = document.getElementById(document.getElementById('certificateType').value).querySelectorAll('input[type=text]');
      // console.log();
      var data = {};
      
      for (var y = 0; y < text.length; y++) {
        data["var"+y] = text[y].value;
    }
    data["document_type"] = document.getElementById('certificateType').value;
      
      iframe.postMessage(data, '*');
  }
