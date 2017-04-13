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

    // Add the Questions to the Quiz Template
    buildTemplate(numberOfQuestions);

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

function buildTemplate(numberOfQuestions) {
  for (i=1; i<=numberOfQuestions; i++) {
    var template = '<div id="question-' + i + '"> \
      <fieldset id="question-' + i + '-group">\
      <div id="option-1" class="question-row"> \
      <label id="question-' + i + '-answer-a-label" for=""></label> \
      <input type="radio" id="question-' + i + '-answer-a" name="" value=""> \
      </div> \
      <div id="option-2" class="question-row"> \
      <label id="question-' + i + '-answer-b-label" for=""></label> \
      <input type="radio" id="question-' + i + '-answer-b" name="" value=""> \
      </div> \
      <div id="option-3" class="question-row"> \
      <label id="question-' + i + '-answer-c-label" for=""></label> \
      <input type="radio" id="question-' + i + '-answer-c" name="" value=""> \
      </div> \
      <div id="option-4" class="question-row"> \
      <label id="question-' + i + '-answer-d-label" for="question-' + i + '-answer-d"></label> \
      <input type="radio" id="question-' + i + '-answer-d" name="" value=""> \
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

$('#myForm').on('submit', function(e){
  e.preventDefault();
  var len = $('#username').val().length;
  if (len < 6 && len > 1) {
    this.submit();
  }
});