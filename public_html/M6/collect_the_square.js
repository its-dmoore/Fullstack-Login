// Collect The Square game

// Get a reference to the canvas DOM element
var canvas = document.getElementById('canvas');
// Get the canvas drawing context
var context = canvas.getContext('2d');

// Your score
var score = 0;

// Properties for your square
var x = 50; // X position
var y = 100; // Y position
var speed = 6; // Distance to move each frame
var sideLength = 50; // Length of each side of the square

// FLags to track which keys are pressed
var down = false;
var up = false;
var right = false;
var left = false;

// Properties for the target square
var targetX = 0;
var targetY = 0;
var targetLength = 25;

// Determine if number a is within the range b to c (exclusive)
function isWithin(a, b, c) {
  return (a > b && a < c);
}

// Countdown timer (in seconds)
var countdown = 10;
// ID to track the setTimeout
var id = null;

// Listen for keydown events
canvas.addEventListener('keydown', function(event) {
  event.preventDefault();
  console.log(event.key, event.keyCode);
  if (event.keyCode === 40) { // DOWN
    down = true;
  }
  if (event.keyCode === 38) { // UP
    up = true;
  }
  if (event.keyCode === 37) { // LEFT
    left = true;
  }
  if (event.keyCode === 39) { // RIGHT
    right = true;
  }
});

// Listen for keyup events
canvas.addEventListener('keyup', function(event) {
  event.preventDefault();
  console.log(event.key, event.keyCode);
  if (event.keyCode === 40) { // DOWN
    down = false;
  }
  if (event.keyCode === 38) { // UP
    up = false;
  }
  if (event.keyCode === 37) { // LEFT
    left = false;
  }
  if (event.keyCode === 39) { // RIGHT
    right = false;
  }
});

// Show the start menu
function menu() {
  erase();
  context.fillStyle = '#000000';
  context.font = '36px Arial';
  context.textAlign = 'center';
  context.fillText('COLLECT THE SQUARE!', canvas.width / 2, canvas.height / 2.5);
  context.font = '24px Arial';
  context.fillText('CLICK TO START', canvas.width / 2, canvas.height / 2);
  context.font = '18px Arial'
  context.fillText('CONTROLS: ARROW KEYS', canvas.width / 2, (canvas.height / 5) * 3);
  // Start the game on a click
  canvas.addEventListener('click', startGame);
}

// Start the game
function startGame() {
	// Reduce the countdown timer ever second
  id = setInterval(function() {
    countdown--;
  }, 1000)
  // Stop listening for click events
  canvas.removeEventListener('click', startGame);
  // Put the target at a random starting point
	moveTarget();
  // Kick off the draw loop
  draw();
}

// Show the game over screen
function endGame(){ 
	// Stop the countdown
  clearInterval(id);
  // Display the final score
  erase();
  context.fillStyle = '#000000';
  context.font = '24px Arial';
  context.textAlign = 'center';
  context.fillText('FINAL SCORE: ' + score, canvas.width / 2, canvas.height / 2);
  context.fillText('GAME OVER', canvas.width / 2 , canvas.height / 2.5);
  context.fillText('CLICK TO PLAY AGAIN', canvas.width / 2 , canvas.height / 1.6);
}

// Move the target square to a random position
function moveTarget() {
  targetX = Math.round(Math.random() * canvas.width - targetLength);
  targetY = Math.round(Math.random() * canvas.height - targetLength)
 // Keep target square in bounds
  if (targetY + sideLength > canvas.height) {
    y = canvas.height - sideLength;
  }
  if (targetY < 0) {
    targetY = 0;
  }
  if (targetX < 0) {
    targetX = 0;
  }
  if (targetX + sideLength > canvas.width) {
    targetX = canvas.width - sideLength;
  }
}

// Clear the canvas
function erase() {
  context.fillStyle = '#FFFFFF';
  context.fillRect(0, 0, 600, 400);
}

// The main draw loop
function draw() {
  erase();
  // Move the square
  if (down) {
    y += speed;
  }
  if (up) {
    y -= speed;
  }
  if (right) {
    x += speed;
  }
  if (left) {
    x -= speed;
  }
  // Keep the square within the bounds
  if (y + sideLength > canvas.height) {
    y = canvas.height - sideLength;
  }
  if (y < 0) {
    y = 0;
  }
  if (x < 0) {
    x = 0;
  }
  if (x + sideLength > canvas.width) {
    x = canvas.width - sideLength;
  }
  // Collide with the target
  if (isWithin(targetX, x, x + sideLength) || isWithin(targetX + targetLength, x, x + sideLength)) 
  { // X
    if (isWithin(targetY, y, y + sideLength) || isWithin(targetY + targetLength, y, y + sideLength)) 
    { // Y
      // Respawn the target
      moveTarget();
      // Increase the speed/increase/change score
      score++;
      speed++;
      countdown++;
    }
  }
  // Draw the square
  context.fillStyle = '#FF0000';
  context.fillRect(x, y, sideLength, sideLength);
  // Draw the target 
  context.fillStyle = '#00FF00';
  context.fillRect(targetX, targetY, targetLength, targetLength);
  // Draw the score and time remaining
  context.fillStyle = '#000000';
  context.font = '24px Arial';
  context.textAlign = 'left';
  context.fillText('Score: ' + score, 10, 24);
  context.fillText('Time Remaining: ' + countdown, 10, 50);
  // End the game or keep playing
  if (countdown <= 0) {
    endGame();
  } else {
    window.requestAnimationFrame(draw);
  }
}

// Start the game
menu();
canvas.focus();