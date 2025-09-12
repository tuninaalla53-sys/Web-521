const numbers = [1, 2, 3, 4];
// Используем метод map, чтобы умножить каждое число на 2
const doubledNumbers = numbers.map(number => number * 2);

// Выводим результат в консоль
console.log(doubledNumbers); // [2, 4, 6, 8]

// Добавляем результат на страницу
document.getElementById('output').innerHTML = `Doubled Numbers: ${doubledNumbers.join(', ')}`;
