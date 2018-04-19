const [a1, b1, c1, a2, b2, c2] = [1, 3, 2, 9, 2, 7];

let m = a1 * b2 - b1 * a2;

let m1 = c1 * b2 - b1 * c2;
let m2 = a1 * c2 - c1 * a2;

let x1 = m1 / m;
let x2 = m2 / m;

console.log('x1 = ' + x1 + ', ' + 'x2 = ' + x2);
