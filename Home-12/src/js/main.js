//Arithmetic

function add () {
  var firstNum, secondNum, result;
  firstNum = document.getElementById('first-number').value;
  secondNum = document.getElementById('second-number').value;
  if (firstNum === '' || secondNum === '') {
    document.getElementById('arithmetic-output').innerHTML = 'The field is not filled';
  } else {
    firstNum = parseFloat(firstNum);
    secondNum = parseFloat(secondNum);
    result = firstNum + secondNum;
    document.getElementById('arithmetic-output').innerHTML = result.toFixed(2);
  }
}

function subtract () {
  var firstNum, secondNum, result;
  firstNum = document.getElementById('first-number').value;
  secondNum = document.getElementById('second-number').value;
  if (firstNum === '' || secondNum === '') {
    document.getElementById('arithmetic-output').innerHTML = 'The field is not filled';
  } else {
    firstNum = parseFloat(firstNum);
    secondNum = parseFloat(secondNum);
    result = firstNum - secondNum;
    document.getElementById('arithmetic-output').innerHTML = result.toFixed(2);
  }
}

function multiply () {
  var firstNum, secondNum, result;
  firstNum = document.getElementById('first-number').value;
  secondNum = document.getElementById('second-number').value;
  if (firstNum === '' || secondNum === '') {
    document.getElementById('arithmetic-output').innerHTML = 'The field is not filled';
  } else {
    firstNum = parseFloat(firstNum);
    secondNum = parseFloat(secondNum);
    result = firstNum * secondNum;
    document.getElementById('arithmetic-output').innerHTML = result.toFixed(2);
  }
}

function divide () {
  var firstNum, secondNum, result;
  firstNum = document.getElementById('first-number').value;
  secondNum = document.getElementById('second-number').value;
  if (firstNum === '' || secondNum === '') {
    document.getElementById('arithmetic-output').innerHTML = 'The field is not filled';
  } else {
    firstNum = parseFloat(firstNum);
    secondNum = parseFloat(secondNum);
    result = firstNum / secondNum;
    document.getElementById('arithmetic-output').innerHTML = result.toFixed(2);
  }
  if (secondNum === 0) {
    document.getElementById('arithmetic-output').innerHTML = 'Dividing by zero is impossible';
  }
}

//Trigonometry

function trygonometryCos() {
  var trygonometryNum, result;
  trygonometryNum = document.getElementById('number-cos').value;
  result = Math.cos(trygonometryNum);
  document.getElementById('trigonometry-output').innerHTML = `cos(${trygonometryNum}) = ` + result;
  if (trygonometryNum === '') {
    document.getElementById('trigonometry-output').innerHTML = 'The field is not filled';
  }
}

function trygonometrySin() {
  var trygonometryNum, result;
  trygonometryNum = document.getElementById('number-sin').value;
  result = Math.sin(trygonometryNum);
  document.getElementById('trigonometry-output').innerHTML = `sin(${trygonometryNum}) = ` + result;
  if (trygonometryNum === '') {
    document.getElementById('trigonometry-output').innerHTML = 'The field is not filled';
  }
}

//Root of a number

function root() {
  var sqrtNum, result;
  sqrtNum = document.getElementById('number-sqrt').value;
  result = Math.sqrt(sqrtNum);
  document.getElementById('combinatorics-output').innerHTML = `sqrt(${sqrtNum}) = ` + result;
  if (sqrtNum < 0) {
    document.getElementById('combinatorics-output').innerHTML = `sqrt(${sqrtNum}) = ` + 'Invalid data entered';
  } else if (sqrtNum === '') {
    document.getElementById('combinatorics-output').innerHTML = 'The field is not filled';
  }
}

//Factorial

function factorial() {
  var i, n, factorial;
  factorial = 1;
  n = document.getElementById('number-factorial').value;
  for (i=1; i<=n; i++) {
    n = parseInt(n);
    factorial = factorial * i;
  }
  document.getElementById('combinatorics-output').innerHTML = `${n}! = ` + factorial;
  if (n < 0) {
    document.getElementById('combinatorics-output').innerHTML = `${n}! = ` + 'A positive integer is expected';
  } else if (n === '') {
    document.getElementById('combinatorics-output').innerHTML = 'The field is not filled';
  }
}

//Power

function power() {
  var x, n;
  var i = 0;
  var result = 1;
  x = document.getElementById('number-raised').value;
  n = document.getElementById('number-power').value;
  while (i < n) {
    x = parseInt(x);
    n = parseInt(n);
    result = result * x;
    i++;
  }
  while (i > n) {
    x = parseInt(x);
    n = parseInt(n);
    result = result / x;
    i--;
  }
  document.getElementById('power-output').innerHTML = `${x}<sup>${n}</sup> = ` + result;
  if (x === '' || n === '') {
    document.getElementById('power-output').innerHTML = 'The field is not filled';
  } else if (x === 0 && n < 0) {
    document.getElementById('power-output').innerHTML = 'LOTS OF :-)';
  }
}
