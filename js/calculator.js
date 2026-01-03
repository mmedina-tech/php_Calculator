var calcBase = window.CALC_BASE_URL || '';
var redir = function(sel) {
    window.location =
        calcBase + '/form_select.php?category=' + sel.value;
};
var redire = function(sel, sele) {
    window.location =
        calcBase + '/input.php?category=' + sel.value + '&Formula=' + sele.value;
};
