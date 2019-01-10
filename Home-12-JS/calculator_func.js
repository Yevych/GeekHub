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
  return a / b
  if (b === 0) {
    return false
  }
}

function cos (x) {
  return Math.cos(x)
}

function sin (x) {
  return Math.sin(x)
}

function sqrt (x) {
  return Math.sqrt(x)
  if (x < 0) {
    return false
  }
}

function factorial (n) {
  return n ? n * factorial(n - 1) : 1
  if (n < 0) {
    return false
  }
}

function power (x, n) {
  let result = x

  for (let i = 1; i < n; i++) {
    result *= x
  }

  return result
}