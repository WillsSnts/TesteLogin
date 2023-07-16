var canvas = document.getElementById("matrix");
var ctx = canvas.getContext("2d");

var fontSize = 14;
var lineHeight = 16;

var canvasWidth = canvas.width = window.innerWidth;
var canvasHeight = canvas.height = window.innerHeight;

var columns = canvasWidth / fontSize;
var rows = canvasHeight / lineHeight;

var chars = "你好吗我很好谢谢";
chars = chars.split("");

var drops = [];
for (var i = 0; i < columns; i++) 
{
  drops[i] = 1;
}

ctx.fillStyle = "rgba(0, 0, 0)"; 
ctx.fillRect(0, 0, canvasWidth, canvasHeight);

function draw() 
{
  ctx.fillStyle = "rgba(0, 0, 0, 0.05)"; // Define a cor dos caracteres como roxo
  ctx.fillRect(0, 0, canvasWidth, canvasHeight);

  for (var i = 0; i < drops.length; i++) 
  {
    var text = chars[Math.floor(Math.random() * chars.length)];
    ctx.fillStyle = "rgb(0, 255, 0)"; // Define a cor dos caracteres como roxo
    ctx.fillText(text, i * fontSize, drops[i] * lineHeight);
    if (drops[i] * lineHeight > canvasHeight && Math.random() > 0.975) 
    {
      drops[i] = 0;
    }
    drops[i]++;
  }
}

// Execute a função de animação em loop
setInterval(draw, 50);