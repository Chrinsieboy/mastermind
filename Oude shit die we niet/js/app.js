function makeID() {
    let id = "";
    let possible = "12345678";

    for (let i = 0; i < 4; i++)
        id += possible.charAt(Math.floor(Math.random() * possible.length));
    var digits = id.toString().split('');

    // Hieronder is een testknop om te testen
    return document.getElementById('tb2').innerText = digits;

}

function getID() {
    
}

function sendID() {
    
}

function checkID() {
    
}
