function toggleDivs() {
    var divs = document.querySelectorAll('.div-box');
    divs.forEach(function(div) {
        if (div.classList.contains('hidden')) {
            div.classList.remove('hidden');
        } else {
            div.classList.add('hidden');
        }
    });
}