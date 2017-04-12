<link href="modules/SA_Quizzes/css/startQuiz.css" rel="stylesheet" type="text/css"/>

<div id="quiz-dialog" class="modal fade modal-search in" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 id="question-name" class="modal-title">Quiz Dialog</h4>
            </div>
            <div class="modal-body" id="searchList">
                <form name="addInvite" method="post" action="index.php?module=SA_Assignments&amp;action=sendInvite">
                    <div id="questions-wrapper">
                        <div id="question-1">
                            <fieldset id="question-1-group">
                                <div id="option-1" class="question-row">
                                    <label id="question-1-answer-a-label" for="question-1-answer-a"></label>
                                    <input type="radio" id="question-1-answer-a" name="question-1" value="">
                                </div>
                                <div id="option-2" class="question-row">
                                    <label id="question-1-answer-b-label" for="question-1-answer-b"></label>
                                    <input type="radio" id="question-1-answer-b" name="question-1" value="">
                                </div>
                                <div id="option-3" class="question-row">
                                    <label id="question-1-answer-c-label" for="question-1-answer-c"></label>
                                    <input type="radio" id="question-1-answer-c" name="question-1" value="">
                                </div>
                                <div id="option-4" class="question-row">
                                    <label id="question-1-answer-d-label" for="question-1-answer-d"></label>
                                    <input type="radio" id="question-1-answer-d" name="question-1" value="">
                                </div>
                            </fieldset>
                        </div>
                        <div id="question-2">
                            <fieldset id="question-2-group">
                                <div id="option-1" class="question-row">
                                    <label id="question-2-answer-a-label" for="question-2-answer-a"></label>
                                    <input type="radio" id="question-2-answer-a" name="question-2" value="">
                                </div>
                                <div id="option-2" class="question-row">
                                    <label id="question-2-answer-b-label" for="question-2-answer-b"></label>
                                    <input type="radio" id="question-2-answer-b" name="question-2" value="">
                                </div>
                                <div id="option-3" class="question-row">
                                    <label id="question-2-answer-c-label" for="question-2-answer-c"></label>
                                    <input type="radio" id="question-2-answer-c" name="question-2" value="">
                                </div>
                                <div id="option-4" class="question-row">
                                    <label id="question-2-answer-d-label" for="question-2-answer-d"></label>
                                    <input type="radio" id="question-2-answer-d" name="question-2" value="">
                                </div>
                            </fieldset>
                        </div>
                        <div id="question-3">
                            <fieldset id="question-3-group">
                                <div id="option-1" class="question-row">
                                    <label id="question-3-answer-a-label" for="question-3-answer-a"></label>
                                    <input type="radio" id="question-3-answer-a" name="question-3" value="">
                                </div>
                                <div id="option-2" class="question-row">
                                    <label id="question-3-answer-b-label" for="question-3-answer-b"></label>
                                    <input type="radio" id="question-3-answer-b" name="question-3" value="">
                                </div>
                                <div id="option-3" class="question-row">
                                    <label id="question-3-answer-c-label" for="question-3-answer-c"></label>
                                    <input type="radio" id="question-3-answer-c" name="question-3" value="">
                                </div>
                                <div id="option-4" class="question-row">
                                    <label id="question-3-answer-d-label" for="question-3-answer-d"></label>
                                    <input type="radio" id="question-3-answer-d" name="question-3" value="">
                                </div>
                            </fieldset>
                        </div>
                        <div id="question-4">
                            <fieldset id="question-4-group">
                                <div id="option-1" class="question-row">
                                    <label id="question-4-answer-a-label" for="question-4-answer-a"></label>
                                    <input type="radio" id="question-4-answer-a" name="question-4" value="">
                                </div>
                                <div id="option-2" class="question-row">
                                    <label id="question-4-answer-b-label" for="question-4-answer-b"></label>
                                    <input type="radio" id="question-4-answer-b" name="question-4" value="">
                                </div>
                                <div id="option-3" class="question-row">
                                    <label id="question-4-answer-c-label" for="question-4-answer-c"></label>
                                    <input type="radio" id="question-4-answer-c" name="question-4" value="">
                                </div>
                                <div id="option-4" class="question-row">
                                    <label id="question-4-answer-d-label" for="question-4-answer-d"></label>
                                    <input type="radio" id="question-4-answer-d" name="question-4" value="">
                                </div>
                            </fieldset>
                        </div>
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