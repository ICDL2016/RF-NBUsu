var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player1;
var player2;
function onYouTubeIframeAPIReady() {
    player1 = new YT.Player('divPlayer1', {
        height: '200',
        width: '100%',
        videoId: 'd8Oc90QevaI',});

    player2 = new YT.Player('divPlayer2', {
        height: '200',
        width: '100%',
        videoId: 'd8Oc90QevaI',});

}
function play1(event) {
    event.target.style.display = 'none';
    $('#divPlayer1').show();
    player1.playVideo();
}
function play2(event) {
    event.target.style.display = 'none';
    $('#divPlayer2').show();
    player2.playVideo()
}

// псевдовалидация

let emptyTop = false;
let emptyBottom = false;
$('.form-input__name').on('click', function () {

    emptyTop = true;
    if (emptyBottom === true && ($(this).parent().children('.form-input__email').val().length === 0 || $(this).parent().children('.form-input__email').val().indexOf('@') === -1)) {
        $(this).parent().children('.form-input__span-email').show();
    }
}).on('input', function () {
    $(this).parent().children('.form-input__span-name').hide();
});

$('.form-input__email').on('click', function () {
    emptyBottom = true;
    if (emptyTop === true && $(this).parent().children('.form-input__name').val().length === 0) {
        $(this).parent().children('.form-input__span-name').show();
    }
}).on('input', function () {
    $(this).parent().children('.form-input__span-email').hide();
});
