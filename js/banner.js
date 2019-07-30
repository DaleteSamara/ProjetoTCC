var imagens = ["fast.png", "img02.png", "img03.png", "img04.png"];
var imagematual = 0;

function trocaimagem() {
 imagematual = (imagematual + 1) % 4;
document.querySelector('.gif img'). src = imagens[imagematual];
}
setInterval(trocaimagem, 1500);