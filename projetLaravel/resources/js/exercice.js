// JavaScript (script.js)
var questions = [
    { question: "Quel est le pluriel de 'chat' ?", options: ["Chats", "Chaton", "Chaten"], answer: "Chats" },
    { question: "Quel est le pluriel de 'chien' ?", options: ["Chiens", "Chien", "Chiene"], answer: "Chiens" },
    { question: "Quel est le pluriel de 'pomme' ?", options: ["Pommes", "Pom", "Pommo"], answer: "Pommes" }
];

var fillInTheBlankQuestion = "Le pluriel de 'arbre' est ";
var fillInTheBlankAnswer = "arbres";

var matchingPairs = [
    { singular: "fleur", plural: "fleurs" },
    { singular: "livre", plural: "livres" },
    { singular: "maison", plural: "maisons" }
];

var currentExercise = 0;
var feedback = document.getElementById("feedback");
var quizFeedback = document.getElementById("quiz-feedback");
var blankFeedback = document.getElementById("blank-feedback");
var matchingFeedback = document.getElementById("matching-feedback");

var quizElement = document.getElementById("quiz");
var fillInTheBlankElement = document.getElementById("fill-in-the-blank");
var matchingElement = document.getElementById("matching");

function displayQuiz() {
    currentExercise = 0;
    quizElement.style.display = "block";
    fillInTheBlankElement.style.display = "none";
    matchingElement.style.display = "none";
    displayQuestion();
}

function displayQuestion() {
    var question;
    switch (currentExercise) {
        case 0:
            question = questions[Math.floor(Math.random() * questions.length)];
            document.getElementById("question").textContent = question.question;
            document.getElementById("options").innerHTML = "";
            question.options.forEach(function(option) {
                var button = document.createElement("button");
                button.textContent = option;
                button.onclick = function() {
                    selectAnswer(option);
                };
                document.getElementById("options").appendChild(button);
            });
            break;
        case 1:
            document.getElementById("fill-in-the-blank-question").textContent = fillInTheBlankQuestion;
            document.getElementById("user-answer").value = "";
            break;
        case 2:
            document.getElementById("matching-container").innerHTML = "";
            matchingPairs.forEach(function(pair) {
                var div = document.createElement("div");
                div.textContent = pair.singular;
                div.dataset.plural = pair.plural;
                div.draggable = true;
                div.ondragstart = function(event) {
                    event.dataTransfer.setData("text/plain", pair.singular);
                };
                document.getElementById("matching-container").appendChild(div);
            });
            break;
    }
}

function selectAnswer(selectedOption) {
    var question = questions[currentQuestion];
    if (selectedOption === question.answer) {
        feedback.textContent = "Bonne réponse !";
    } else {
        feedback.textContent = "Mauvaise réponse. La réponse correcte est : " + question.answer;
    }
}

function checkBlankAnswer() {
    var userAnswer = document.getElementById("user-answer").value.trim();
    if (userAnswer.toLowerCase() === fillInTheBlankAnswer) {
        blankFeedback.textContent = "Bonne réponse !";
    } else {
        blankFeedback.textContent = "Mauvaise réponse. La réponse correcte est : " + fillInTheBlankAnswer;
    }
}

function checkMatching() {
    var correct = true;
    var divs = document.getElementById("matching-container").getElementsByTagName("div");
    for (var i = 0; i < divs.length; i++) {
        if (divs[i].textContent.toLowerCase() !== divs[i].dataset.plural.toLowerCase()) {
            correct = false;
            break;
        }
    }
    if (correct) {
        matchingFeedback.textContent = "Toutes les correspondances sont correctes !";
    } else {
        matchingFeedback.textContent = "Au moins une correspondance est incorrecte.";
    }
}

function nextExercise() {
    currentExercise++;
    switch (currentExercise) {
        case 0:
            displayQuiz();
            break;
        case 1:
            fillInTheBlankElement.style.display = "block";
            quizElement.style.display = "none";
            matchingElement.style.display = "none";
            break;
        case 2:
            matchingElement.style.display = "block";
            quizElement.style.display = "none";
            fillInTheBlankElement.style.display = "none";
            break;
    }
}

window.onload = displayQuiz;
