var x,
    quizId,
    questions,
    currentQuestion,
    numberOfQuestions,
    modalVisible,
    quizSubmit,
    quizResults,
    currentDate,
    errors = false;

function startQuiz(id) {
  // Reset form to be a new session
  modalVisible = $('#quiz-dialog').hasClass('in');

  if (modalVisible === true) {
    questions = JSON.parse(getQuestions(id));
    numberOfQuestions = questions.length;

    // Add the Questions to the Quiz Template
    buildTemplate(numberOfQuestions);
  }

  $('#quizForm').trigger("reset");
  x = 0;
  currentQuestion = x + 1;

  // Display the initial Question
  displayQuestion();

  quizId = id;
  currentDate = new Date().getTime() / 1000;
  $('#quiz-dialog').modal("toggle");
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

function buildTemplate(numberOfQuestions) {
  for (i=1; i<=numberOfQuestions; i++) {
    var template = '<div id="question-' + i + '"> \
      <fieldset id="question-' + i + '-group">\
      <div id="option-1" class="question-row"> \
      <label id="question-' + i + '-answer-a-label" for=""></label> \
      <input type="radio" id="question-' + i + '-answer-a" name="" value="a"> \
      </div> \
      <div id="option-2" class="question-row"> \
      <label id="question-' + i + '-answer-b-label" for=""></label> \
      <input type="radio" id="question-' + i + '-answer-b" name="" value="b"> \
      </div> \
      <div id="option-3" class="question-row"> \
      <label id="question-' + i + '-answer-c-label" for=""></label> \
      <input type="radio" id="question-' + i + '-answer-c" name="" value="c"> \
      </div> \
      <div id="option-4" class="question-row"> \
      <label id="question-' + i + '-answer-d-label" for="question-' + i + '-answer-d"></label> \
      <input type="radio" id="question-' + i + '-answer-d" name="" value="d"> \
      </div> \
      </fieldset> \
      </div>';

    $("#questions-wrapper").append(template);
  }
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

  // Question's Title/Name Applied to the Header
  $('#question-name').text("Question " + currentQuestion + ": " + questions[x]['name']);

  // Option A Grouping
  $('#question-' + currentQuestion + '-answer-a-label').text(questions[x]['answer_a']);
  $('#question-' + currentQuestion + '-answer-a-label').attr("for",questions[x]['id']);
  $('#question-' + currentQuestion + '-answer-a').attr("name",questions[x]['id']);

  // Option B Grouping
  $('#question-' + currentQuestion + '-answer-b-label').text(questions[x]['answer_b']);
  $('#question-' + currentQuestion + '-answer-b-label').attr("for",questions[x]['id']);
  $('#question-' + currentQuestion + '-answer-b').attr("name",questions[x]['id']);

  // Option C Grouping
  $('#question-' + currentQuestion + '-answer-c-label').text(questions[x]['answer_c']);
  $('#question-' + currentQuestion + '-answer-c-label').attr("for",questions[x]['id']);
  $('#question-' + currentQuestion + '-answer-c').attr("name",questions[x]['id']);

  // Option D Grouping
  $('#question-' + currentQuestion + '-answer-d-label').text(questions[x]['answer_d']);
  $('#question-' + currentQuestion + '-answer-d-label').attr("for",questions[x]['id']);
  $('#question-' + currentQuestion + '-answer-d').attr("name",questions[x]['id']);

  handleButtons();
}

function handleButtons(){
  // Next and Submit Buttons
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

$(document).ready(function() {
  $('#quizForm').on('submit', function(e){
    e.preventDefault();
    // Fetch all questions associated with the quiz
    quizSubmit = $.ajax({
      type: "POST",
      url: "index.php?module=SA_QuizQuestions&action=quizSubmit",
      data: {
        'form': $('#quizForm').serialize(),
        'questions': questions,
        'id': quizId,
        'time': Math.floor(currentDate),
      },
      dataType: "json",
      success: function (data) {
        return data;
      }
    });

    quizResults = quizSubmit.responseText;

    buildResultTemplate(quizResults);
  });
}

function buildResultTemplate(quizResults) {
  quizResults = JSON.parse(quizResults);

  // Empty Questions Wrapper to be blank
  $('#questions-wrapper').empty();

  // Hide Any Possible Buttons
  $('#next-question').hide();
  $('#previous-question').hide();
  $('#submit-questions').hide();
  $('#invite-buttons-container').hide();

  var resultsTemplate = '<div id="quiz-pass"></div> \
  <div id="quiz-score"></div> \
  <div id="quiz-questions"></div> \
  <div id="quiz-total-correct"></div> \
  <div id="quiz-time-started"></div> \
  <div id="quiz-time-ended"></div> \
  <div id="quiz-time-spent"></div>';

  $("#questions-wrapper").append(resultsTemplate);

  if (quizResults['pass'] === "yes") {
    $('#question-name').text("Congratulations, you passed!");
  } else if (quizResults['pass'] === "no") {
    $('#question-name').text("Sorry, you haven't passed!");
  }

  if (quizResults['pass'] === "yes") {
    $('#quiz-pass').text("Passed: Yes");
  } else if (quizResults['pass'] === "no") {
    $('#quiz-pass').text("Passed: No");
  }

  $('#quiz-score').text("Score: " + quizResults['score'] + "%");
  $('#quiz-questions').text("Questions: " + quizResults['total_questions']);
  $('#quiz-total-correct').text("Total Correct: " + quizResults['total_correct']);
  $('#quiz-time-started').text("Started: " + quizResults['time_start']);
  $('#quiz-time-ended').text("Ended: " + quizResults['time_ended']);
  $('#quiz-time-spent').text("Time Spent: " + quizResults['time_spent'] + ' seconds');
}