// MAIN
// Settings
var AUTO = false;

$(document).ready(function () {
    inputData();
    if(AUTO) {
        next();
    } else {
        addButton();
    }
});

function addButton() {
   $('#container').prepend("<button onclick='next()'>Test</button>");
}

function inputData() {
   $('input[type=text]').each(function(index) {
       //sqrt doesn't like 1
       $(this).val((index+1)*2?index+2:index+3);
   });
}

function clickSubmit() {
    $('input[type=submit]').click();
}

function next() {
    if(nextFormula()) {
        clickSubmit();
    } else {
        if(!nextCategory()) {
            return;
        }
    }
}

function nextCategory() {
    if(selectNext(document.getElementById('category'))) {
        $("#category").trigger("change");
        return true;
    } else {
        return false;
    }
}

function nextFormula() {
    if(selectNext(document.getElementById('Formula'))) {
        $("#Formula").trigger("change");
        return true;
    } else {
        return false;
    }
}

function selectNext(el) {
    var options = el.options;
    var i = 0;
    for(i=0; i < options.length; i++) {
        if(options[i].selected == true) {
            if(i == options.length - 1) {
                return false;
            }

            // set current selection false
            options[i].selected = false;
            //select next item unless it's the last item
            options[i+1].selected = true;
            return true;
        }
    }
    return false;
}

