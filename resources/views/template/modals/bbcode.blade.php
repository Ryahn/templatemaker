<!-- Modal Header -->
<div class="modal-header">
    <h4 class="modal-title">{{ $template->game_name }} [{{ $template->version }}][{{ $template->devName }}]</h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<!-- Modal body -->
<div class="modal-body">
    <form method="post" id="viewBBCodeForm" action="{{ route('api.save.bbcode') }}">
        
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="form-group mb-3">
                        <label class="form-label" for="bbcode">BBCode</label>
                        <input type="hidden" name="id" value="{{ $template->id }}">
                        <textarea class="form-control" id="bbcode" rows="40" name="bbcode">{!! $bbcode->bbcode !!}</textarea>
                    </div>
                </div>
        </div>
    </form>
</div>

<!-- Modal footer -->
<div class="modal-footer">
    <button type="submit" class="btn btn-primary" id="recentEditSave" onclick="handleSaveBBCode()">Save</button>
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
</div>
</form>
