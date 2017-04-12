var x,
    questions,
    currentQuestion,
    numberOfQuestions,
    modalVisible;

function startQuiz(id) {
  $('#quiz-dialog').modal("toggle");

  modalVisible = $('#quiz-dialog').hasClass('in');

  if (modalVisible === true) {
    x = 0;
    questions = JSON.parse(getQuestions(id));
    currentQuestion = x + 1;
    numberOfQuestions = questions.length;

    // Display the initial Question
    displayQuestion();
  }
}

function getQuestions(id) {
  // Fetch all questions associated with the quiz
  questions = $.ajax({
    url: "index.php?module=SA_QuizQuestions&action=getQuestions",
    data: {id:id},
    dataType: "json",
    success: function (data) {
      return data;
    }
  });

  return questions.responseText;
}

function displayNextQuestion(){
  // Set the position of what Question should be displayed
  x++;
  currentQuestion = x + 1;

  displayQuestion();
}

function displayPreviousQuestion(){
  // Set the position of what Question should be displayed
  x--;
  currentQuestion = x + 1;

  displayQuestion();
}

function displayQuestion() {
  // Show current question and hide others.
  $("#question-" + currentQuestion).show();
  $("#question-" + currentQuestion).siblings().hide();

  // Update nodes to show the related question's information
  $('#question-name').text("Question " + questions[x]['question_number'] + ": " + questions[x]['name']);
  $('#question-' + currentQuestion + '-answer-a-label').text(questions[x]['answer_a']);
  $('#question-' + currentQuestion + '-answer-b-label').text(questions[x]['answer_b']);
  $('#question-' + currentQuestion + '-answer-c-label').text(questions[x]['answer_c']);
  $('#question-' + currentQuestion + '-answer-d-label').text(questions[x]['answer_d']);

  handleButtons();
}

function handleButtons(){
  // Next Buttons
  if (currentQuestion === numberOfQuestions) {
    $('#next-question').hide();
    $('#submit-questions').show();
  } else if (currentQuestion !== numberOfQuestions) {
    $('#next-question').show();
    $('#submit-questions').hide();
  }

  // Previous Buttons
  if (currentQuestion > 1) {
    $('#previous-question').show();
  } else if (currentQuestion === 1) {
    $('#previous-question').hide();
  }
}