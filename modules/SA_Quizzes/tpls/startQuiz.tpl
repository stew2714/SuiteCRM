<link href="modules/SA_Quizzes/css/startQuiz.css" rel="stylesheet" type="text/css"/>

<div id="quiz-dialog" class="modal fade modal-search in" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 id="question-name" class="modal-title">Quiz Dialog</h4>
            </div>
            <div class="modal-body" id="searchList">
                <form id="quizForm" name="quizForm">
                    <div id="questions-wrapper">

                    </div>
                    <div id="invite-buttons-container">
                        <div class="previous-question">
                            <input type="button" onclick="displayPreviousQuestion()" name="previous-question" class="button question-nav-button invite-submit-button" id="previous-question" title="Previous Question" value="Previous Question">
                        </div>
                        <div class="next-question">
                            <input type="button" onclick="displayNextQuestion()" name="next-question" class="button question-nav-button invite-submit-button" id="next-question" title="Next Question" value="Next Question">
                            <input type="submit" name="next-question"  class="button question-submit-button invite-submit-button" id="submit-questions" title="Submit Answers" value="Submit Answers">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>