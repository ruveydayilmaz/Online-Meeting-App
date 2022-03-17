var button = document.querySelector('#start');                      //JITSI DÖKÜMANTASYONUNDAKİ ÖRNEĞİ KULLANDIM
var container = document.querySelector('#jitsi-container');
var api = null;

button.addEventListener('click', () => {
    var possible = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var stringLength = 30;

    function pickRandom() {
    return possible[Math.floor(Math.random() * possible.length)];
    }

var randomString = Array.apply(null, Array(stringLength)).map(pickRandom).join('');

    var domain = "meet.jit.si";
    var options = {
        "roomName": randomString,
        "parentNode": container,
        "width": 600,
        "height": 600,
    };
    api = new JitsiMeetExternalAPI(domain, options);
});

function Show() {
    document.getElementById('meet-btns').style.display = "none";
    document.getElementById('hide-btn').style.display = "block";
}

function Hide() {
    document.getElementById('meet-btns').style.display = "block";
    document.getElementById('jitsi-container').style.display = "none";
    document.getElementById('hide-btn').style.display = "none";
}