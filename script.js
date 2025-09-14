const numbers = [1, 2, 3, 4];
// Используем метод map, чтобы умножить каждое число на 2
const doubledNumbers = numbers.map(number => number * 2);

// Выводим результат в консоль
console.log(doubledNumbers); // [2, 4, 6, 8]

// Добавляем результат на страницу
document.getElementById('output').innerHTML = `Doubled Numbers: ${doubledNumbers.join(', ')}`;




const words = ['apple', 'banana', 'kiwi', 'grapefruit'];

// Используем filter для фильтрации слов, длина которых больше 5 символов
const longWords = words.filter(word => word.length > 5);


console.log(longWords); // ['banana', 'grapefruit']

// Добавляем результат на страницу
document.getElementById('filteredOutput').innerHTML = `Long Words: ${longWords.join(', ')}`;




const numbers1 = [1, 2, 3, 4];

// Используем reduce для нахождения суммы всех чисел
const sum = numbers.reduce((acc, current) => acc + current, 0);


console.log(sum); // 10

// Добавляем результат на страницу
document.getElementById('reduceOutput').innerHTML = `Sum: ${sum}`;



// Массив студентов
const students = [{name: 'Alice', age: 21}, {name: 'Bob', age: 22}];

// Используем forEach для вывода имен студентов
students.forEach(student => {
  console.log(student.name);
});

// Добавляем результат на страницу
document.getElementById('forEach').innerHTML = `Students: ${students.map(s => s.name).join(', ')}`;


