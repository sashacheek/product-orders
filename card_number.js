var original_number = document.getElementById('card_number').value;

function hideCardNumbers() {
    var card_number = document.getElementById('card_number');
    if (card_number.value.length > original_number.length) {
        original_number += card_number.value.slice(-1);
        // alert(original_number);
    }
    if (card_number.value.length < original_number.length) {
        original_number = original_number.substring(0, original_number.length - 1);
        // alert(original_number);
    }



    // alert(original_number);

    var hidden_number = "";
    if (original_number.length > 12) {
        hidden_number += "************";
        hidden_number += original_number.substring(12, original_number.length)
    }
    else {
        for (var i = 0; i < original_number.length; i++) {
            hidden_number += "*"
        }

    }

    

    document.getElementById('card_number').value = hidden_number;
    // var count = comments.value.length; 
    // if (count > 100) {
    // comments.value = comments.value.slice(0, 100);
    // }
    // count = comments.value.length;   
    // U.$('character_count').innerHTML = count + "/100"; 
}

function init() {
    var card_number = document.getElementById("card_number");
    if (card_number) {
        hideCardNumbers();
        card_number.addEventListener("input", hideCardNumbers);
    }
}

window.onload = init;