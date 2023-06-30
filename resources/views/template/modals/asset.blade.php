@php 
$type = ['animation' => 'Animation', 'assets' => 'Assets', 'collection' => 'Collection', 'comic' => 'Comic', 'game' => 'Game', 'manga' => 'Manga', 'other' => 'Other'];
$censor = ['1' => 'Yes - Mosaics', '2' => 'Yes - Patch w/ Mosaics', '3' => 'Yes - Patch w/o Mosaics', '4' => 'No', '5' => 'No Sexual Content'];
$lang2 = explode(', ', $template->langauge);
@endphp
<!-- Modal Header -->
<div class="modal-header">
    <h4 class="modal-title">{{ $template->game_name }} @if (!($template->version == NULL)) [{{ $template->version }}]@endif[{{ $template->devName }}]</h4>
    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<!-- Modal body -->
<div class="modal-body">
    <form method="post" id="recentModalForm">
        @csrf
        <div class="col-xl-12">
            <div class="row">
                <div class="col-xl-8"> {{-- Title --}}
                    <div class="form-group mb-3">
                        <label class="form-label" for="game_name">Game/Comic/Manga/Animation/Collection
                            name</label>
                        <input type="text" class="form-control" id="game_name" name="game_name"
                            placeholder="pezzo is gay" value={!! $template->game_name !!}>
                    </div>

                </div>

                <div class="col-xl-6">{{-- Dev Name --}}
                    <div class="form-group mb-3">
                        <label class="form-label" for="devName">Developer/Artist
                            Name</label>
                        <input type="text" class="form-control" id="devName" name="devName"
                            placeholder="Sarcia is a furry" value="{{ $template->devName }}">
                    </div>
                </div>
                <div class="col-xl-6">{{-- Dev Links --}}
                    <div class="form-group mb-3">
                        <label for="devLinks" class="form-label">Dev Links</label>
                        <input type="text" class="form-control" name="devLinks" id="devLinks" value="{{ $template->devLinks }}">
                        <small id="trailerHelpBlock" class="form-text text-muted">
                            <kbd>Format: SiteName|url,Sitename|url</kbd>
                        </small>
                    </div>
                </div>
                <div class="col-xl-12">{{-- Overview --}}
                    <div class="form-group mb-3">
                        <label class="form-label" for="overview">Overview</label>
                        <textarea class="form-control" id="overview" rows="3" name="overview"
                            placeholder="souleater is not into his cousin">{{ $template->overview }}</textarea>
                    </div>
                </div>
                <div class="col-xl-4" id="userThankShow">{{-- User Thanks --}}
                    <div class="mb-3">
                        <label for="userThankYou" class="form-label">User Thank
                            You</label>
                        <input type="text" name="userThanks" id="userThanks" class="form-control" value="{{ $template->userThanks }}">
                    </div>
                </div>
                <div class="col-xl-4">{{-- Link To Asset --}}
                    <div class="mb-3">
                        <label for="linkAsset" class="form-label">Link To Asset</label>
                        <input type="text" name="linkAsset" id="linkAsset" class="form-control" value="{{ $template->linkAsset }}">
                        <small id="trailerHelpBlock" class="form-text text-muted">
                            <kbd>Format: SiteName|url,Sitename|url</kbd>
                        </small>
                    </div>
                </div>
                <div class="col-xl-4" id="compatibleShow">{{-- Software --}}
                    <div class="mb-3">
                        <label class="form-label">compatible Software</label>
                        <select class="form-select" name="compatible[]" id="compatible" multiple>
                            <optgroup label="Blender">
                                @foreach ($blender as $blen)
                                    <option {{ in_array($blen->name, explode(', ', $template->compatible)) ? 'selected' : '' }} value="{{ $blen->name }}">{{ $blen->name }}
                                    </option>
                                @endforeach
                            </optgroup>
                            <optgroup label="Unreal Engine">
                                @foreach ($unreal as $unr)
                                    <option {{ in_array($unr->name, explode(', ', $template->compatible)) ? 'selected' : '' }} value="{{ $unr->name }}">{{ $unr->name }}
                                    </option>
                                @endforeach
                            </optgroup>
                            <optgroup label="None">
                                @foreach ($none as $nones)
                                    <option {{ in_array($nones->name, explode(', ', $template->compatible)) ? 'selected' : '' }} value="{{ $nones->name }}">{{ $nones->name }}
                                    </option>
                                @endforeach
                            </optgroup>
                        </select>
                    </div>
                </div>
            </div>
            </div>
            <div class="row" id="includedListShow">{{-- Included --}}
                <div class="col-xl-12">
                    <div class="form-group mb-3">
                        <label class="form-label" for="included">Included
                            Models/Assets</label>
                        <textarea class="form-control" id="included" rows="3" name="included" placeholder="ThiccStudios is a cover">{{ $template->included }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

<!-- Modal footer -->
<div class="modal-footer">
    <button type="submit" class="btn btn-primary" id="recentEditSave">Save</button>
    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
</div>
</form>
