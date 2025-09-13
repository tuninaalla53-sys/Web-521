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
document.getElementById('filter').innerHTML = `Long Words: ${longWords.join(', ')}`;




const numbers1 = [1, 2, 3, 4];

// Используем reduce для нахождения суммы всех чисел
const sum = numbers1.reduce((acc, current) => acc + current, 0);


console.log(sum); // 10

// Добавляем результат на страницу
document.getElementById('reduce').innerHTML = `Sum: ${sum}`;



// Массив студентов
const students = [{name: 'Alice', age: 21}, {name: 'Bob', age: 22}];

// Используем forEach для вывода имен студентов
students.forEach(student => {
  console.log(student.name);
});

// Добавляем результат на страницу
document.getElementById('forEach').innerHTML = `Students: ${students.map(s => s.name).join(', ')}`;



// Массив книг
const books = [
  {title: '1984', author: 'George Orwell'},
  {title: 'To Kill a Mockingbird', author: 'Harper Lee'}
];

// Используем find для поиска книги по названию
const book = books.find(b => b.title === '1984');


console.log(book);

// Добавляем результат на страницу
document.getElementById('findOutput').innerHTML = `Found Book: ${book.title} by ${book.author}`;




// Массив чисел
const numbers2 = [1, 2, 3, 4];

// Используем some для проверки, содержит ли массив хотя бы одно четное число
const hasEvenNumber = numbers2.some(number => number % 2 === 0);

// Выводим результат в консоль
console.log(hasEvenNumber); // true

// Добавляем результат на страницу
document.getElementById('some').innerHTML = `Массив содержит четное число: ${hasEvenNumber}`;


// Массив чисел
const numbers3 = [1, 2, 3, 4];

// Используем every для проверки, все ли числа положительные
const allPositive = numbers3.every(number => number > 0);

// Выводим результат в консоль
console.log(allPositive); // true

// Добавляем результат на страницу
document.getElementById('every').innerHTML = `Все числа положительные: ${allPositive}`;



// Массив данных о продажах
const sales = [
  {date: '2023-10-01', item: 'apple', amount: 100},
  {date: '2023-10-02', item: 'banana', amount: 150},
  {date: '2023-10-01', item: 'apple', amount: 200},
];

// Используем reduce для вычисления общей суммы продаж по каждому товару
const salesByItem = sales.reduce((acc, sale) => {
  if (!acc[sale.item]) {
    acc[sale.item] = 0;
  }
  acc[sale.item] += sale.amount;
  return acc;
}, {});

// Выводим результат в консоль
console.log(salesByItem); // {apple: 300, banana: 150}

// Добавляем результат на страницу
document.getElementById('sales').innerHTML = `Сводка продаж: ${JSON.stringify(salesByItem)}`;



// Массив данных о пользователях
const users = [
  {name: 'Alice', age: 28, isSubscribed: true},
  {name: 'Bob', age: 35, isSubscribed: false},
  {name: 'Charlie', age: 40, isSubscribed: true},
];

// Используем filter для фильтрации пользователей с активной подпиской и возрастом старше 30 лет
const filteredUsers = users.filter(user => user.isSubscribed && user.age > 30);

// Выводим результат в консоль
console.log(filteredUsers);

// Добавляем результат на страницу
document.getElementById('filterUsers').innerHTML = `Отфильтрованные пользователи: ${JSON.stringify(filteredUsers)}`;



// Массив задач
const tasks = [
  {task: 'Write report', status: 'completed', priority: 'high'},
  {task: 'Send email', status: 'pending', priority: 'low'},
  {task: 'Fix bug', status: 'pending', priority: 'high'}
];

// Используем forEach для вывода задач с высоким приоритетом и статусом "pending"
tasks.forEach(task => {
  if (task.priority === 'high' && task.status === 'pending') {
    console.log(task.task); // Выводит "Fix bug"
  }
});

// Добавляем результат на страницу
document.getElementById('tasks').innerHTML = `Отложенные задачи с высоким приоритетом: ${tasks.filter(task => task.priority === 'high' && task.status === 'pending').map(task => task.task).join(', ')}`;





