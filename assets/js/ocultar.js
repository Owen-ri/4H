document.getElementById('showButton').addEventListener('click', function() {
    var contenido = document.getElementById('contenido');
    var showButton = document.getElementById('showButton');
    var hideButton = document.getElementById('hideButton');
    contenido.style.display = 'block';
    showButton.style.display = 'none';
    hideButton.style.display = 'inline';
});

document.getElementById('hideButton').addEventListener('click', function() {
    var contenido = document.getElementById('contenido');
    var showButton = document.getElementById('showButton');
    var hideButton = document.getElementById('hideButton');
    contenido.style.display = 'none';
    showButton.style.display = 'inline';
    hideButton.style.display = 'none';
});