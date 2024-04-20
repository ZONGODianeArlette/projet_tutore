function checkAnswer1(answer) {
    var feedback = document.getElementById('feedback1');
    if (answer === 'baobabs') {
      feedback.textContent = 'Correct!';
    } else {
      feedback.textContent = 'Incorrect. La réponse correcte est "baobabs".';
    }
  }
  