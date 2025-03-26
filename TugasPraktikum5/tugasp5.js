
function fibonacci(n) {
    let fibo = [0, 1]; 
    for (let i = 2; i < n; i++) {
        fibo[i] = fibo[i - 1] + fibo[i - 2];
    }
    return fibo;
}

console.log("Deret Fibonacci:", fibonacci(10).join(", "));

const kalkulator = (operator, ...angka) => {
    switch (operator) {
        case '+':
            return angka.reduce((a, b) => a + b, 0);
        case '-':
            return angka.reduce((a, b) => a - b);
        case '*':
            return angka.reduce((a, b) => a * b, 1);
        case '/':
            return angka.reduce((a, b) => a / b);
        case '%':
            return angka.reduce((a, b) => a % b);
        default:
            return "Operator tidak valid!";
    }
};

console.log("Penjumlahan:", kalkulator('+', 10, 5, 2));
console.log("Pengurangan:", kalkulator('-', 20, 5, 3));
console.log("Perkalian:", kalkulator('*', 2, 3, 4));
console.log("Pembagian:", kalkulator('/', 100, 5, 2));
console.log("Modulus:", kalkulator('%', 10, 3));
