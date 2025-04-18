let display = document.getElementById('display');
let currentInput = '0';

const buttonNum0 = document.querySelector(".num0");
const buttonNum1 = document.querySelector(".num1");
const buttonNum2 = document.querySelector(".num2");
const buttonNum3 = document.querySelector(".num3");
const buttonNum4 = document.querySelector(".num4");
const buttonNum5 = document.querySelector(".num5");
const buttonNum6 = document.querySelector(".num6");
const buttonNum7 = document.querySelector(".num7");
const buttonNum8 = document.querySelector(".num8");
const buttonNum9 = document.querySelector(".num9");

const buttonOpenScaple = document.querySelector(".openScaple");
const buttonCloseScaple = document.querySelector(".closeScaple");

const buttonReset = document.querySelector(".reset");
const buttonDelete = document.querySelector(".delete");
const buttonCalculate = document.querySelector(".calculate");

const buttonMultiplier = document.querySelector(".multiplier");
const buttonDivision = document.querySelector(".division");
const buttonMinus = document.querySelector(".minus");
const buttonPlus = document.querySelector(".plus");

buttonNum0.addEventListener('click', () => appendToDisplay(buttonNum0.textContent))
buttonNum1.addEventListener('click', () => appendToDisplay(buttonNum1.textContent))
buttonNum2.addEventListener('click', () => appendToDisplay(buttonNum2.textContent))
buttonNum3.addEventListener('click', () => appendToDisplay(buttonNum3.textContent))
buttonNum4.addEventListener('click', () => appendToDisplay(buttonNum4.textContent))
buttonNum5.addEventListener('click', () => appendToDisplay(buttonNum5.textContent))
buttonNum6.addEventListener('click', () => appendToDisplay(buttonNum6.textContent))
buttonNum7.addEventListener('click', () => appendToDisplay(buttonNum7.textContent))
buttonNum8.addEventListener('click', () => appendToDisplay(buttonNum8.textContent))
buttonNum9.addEventListener('click', () => appendToDisplay(buttonNum9.textContent))
buttonCloseScaple.addEventListener('click', () => appendToDisplay(buttonCloseScaple.textContent))
buttonOpenScaple.addEventListener('click', () => appendToDisplay(buttonOpenScaple.textContent))
buttonMultiplier.addEventListener('click', () => appendToDisplay(buttonMultiplier.textContent))
buttonDivision.addEventListener('click', () => appendToDisplay(buttonDivision.textContent))
buttonMinus.addEventListener('click', () => appendToDisplay(buttonMinus.textContent))
buttonPlus.addEventListener('click', () => appendToDisplay(buttonPlus.textContent))

function updateDisplay() {
    display.textContent = currentInput;
}

function appendToDisplay(value) {
    if (currentInput === '0' && value !== '.') {
        currentInput = value;
    } else {
        currentInput += value;
    }
    updateDisplay();
}

buttonReset.addEventListener('click', () => clearDisplay())
function clearDisplay() {
    currentInput = '0';
    updateDisplay();
}

buttonDelete.addEventListener('click', () => backspace())
function backspace() {
    if (currentInput.length === 1) {
        currentInput = '0';
    } else {
        currentInput = currentInput.slice(0, -1);
    }
    updateDisplay();
}

buttonCalculate.addEventListener('click', () => calculate())
function calculate() {
    
    fetch('main.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'expression=' + encodeURIComponent(currentInput)
    })
    .then(response => response.text())
    .then(result => {
        currentInput = result;
        updateDisplay();
    })
    .catch(error => {
        console.error('Ошибка:', error);
        currentInput = 'Ошибка';
        updateDisplay();
    });
}

// Инициализация дисплея
updateDisplay();