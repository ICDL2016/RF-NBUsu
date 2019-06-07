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