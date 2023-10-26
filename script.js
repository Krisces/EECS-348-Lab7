function applyColor() {
    var borderR = document.getElementById('borderR').value;
    var borderG = document.getElementById('borderG').value;
    var borderB = document.getElementById('borderB').value;
    var borderWidth = document.getElementById('borderWidth').value;
    var backgroundR = document.getElementById('backgroundR').value;
    var backgroundG = document.getElementById('backgroundG').value;
    var backgroundB = document.getElementById('backgroundB').value;
    var content = document.getElementById('content').querySelector('p');

    var borderRgb = `rgb(${borderR},${borderG},${borderB})`;
    var backgroundRgb = `rgb(${backgroundR},${backgroundG},${backgroundB})`;

    content.style.borderColor = borderRgb;
    content.style.borderWidth = borderWidth + 'px';
    content.style.backgroundColor = backgroundRgb;
}