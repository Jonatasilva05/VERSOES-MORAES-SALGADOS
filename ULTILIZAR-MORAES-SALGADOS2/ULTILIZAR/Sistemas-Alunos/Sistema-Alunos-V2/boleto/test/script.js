var numbers = [];

function generateNumbers() {
  var gridItems = document.getElementsByClassName("grid-item");
  
  if (numbers.length >= 25) {
    alert("Todos os números já foram gerados!");
    return;
  }
  
  for (var i = 1; i <= 25; i++) {
    var randomNumber = generateRandomNumber();
    
    numbers.push(randomNumber);
    gridItems[i - 1].textContent = randomNumber;
    gridItems[i - 1].style.backgroundColor = "#ccc";
  }
}

function generateRandomNumber() {
  var randomNumber = Math.floor(Math.random() * 75) + 1;
  
  if (numbers.includes(randomNumber)) {
    return generateRandomNumber();
  }
  
  return randomNumber;
}
