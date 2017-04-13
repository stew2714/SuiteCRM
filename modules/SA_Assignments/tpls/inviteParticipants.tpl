<link href="modules/SA_Assignments/css/inviteParticipants.css" rel="stylesheet" type="text/css"/>

<div id="invite-dialog" class="modal fade modal-search in" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Add Invite Participants</h4>
            </div>
            <div class="modal-body" id="searchList">
                <form name="addInvite" method="post" action="index.php?module=SA_Assignments&amp;action=sendInvite">
                    <input name="id" type="hidden" value="{$id}">
                    <div>
                        <label class="drop-label" for="invite">Invite:</label>
                        <select name="invite" class="drop-label" id="invite-select" onchange="participantsChange(this)">
                            <option value=""></option>
                            <option value="all">All</option>
                            <option value="user-group">User Group</option>
                            <option value="user">Single User</option>
                        </select>
                    </div>
                    <div id="user">
                        <label class="drop-label" for="">User:</label>
                        <select name="user[]" id="user-select" class="child-select-spacer" multiple="multiple">
                            {$users_options}
                        </select>
                    </div>
                    <div id="user-group" class="child-select-spacer">
                        <label class="drop-label" for="user-group">Group:</label>
                        <select name="user-group" id="user-group-select">
                            {$group_options}
                        </select>
                    </div>
                    <div id="invite-buttons-container">
                        <input type="submit" name="button" class="button invite-submit-button" id="invite_dialog_submit" title="Submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>