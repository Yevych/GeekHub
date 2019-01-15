function add (a, b) {
  return a + b
}

function subtruct (a, b) {
  return a - b
}

function multiply (a, b) {
  return a * b
}

function divade (a, b) {
  if (b === 0) {
    return false
  }
  return a / b
}

function cos (x) {
  return Math.cos(x)
}

function sin (x) {
  return Math.sin(x)
}

function sqrt (x) {
  if (x < 0) {
    return false
  }
  return Math.sqrt(x)
}

function factorial (n) {
  if (n < 0) {
    return false
  }
  return n ? n * factorial(n - 1) : 1
}

function power (x, n) {
  let result = x

  for (let i = 1; i < n; i++) {
    result *= x
  }

  return result
}