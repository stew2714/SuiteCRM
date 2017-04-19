
<link href="modules/SuiteFeed/css/SuiteFeedUserList.css" rel="stylesheet" type="text/css"/>

<div id="ok-dialog" class="modal fade modal-search in" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 id="question-name" class="modal-title">User List</h4>
            </div>
            <div class="modal-body" id="searchList">
                    <div id="user_list">
                    </div>
                    <div id="invite-buttons-container">
                        <div class="ok-dialog">
                            <input type="button" onclick="SuiteFeed.userListFeed('','')" name="ok-dialog" class="button" id="ok-dialog" title="OK" value="Ok">
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
