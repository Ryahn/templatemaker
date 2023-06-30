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
                <div class="col-xl-4" id="thread_updatedShow">{{-- Updated --}}
                    <div class="mb-3">
                        <label class="form-label" for="thread_updated">Thread
                            Updated</label>
                        <input type="text" class="form-control" id="thread_updated" name="thread_updated"
                            placeholder="yyyy/mm/dd" value="{{ $template->thread_updated }}">
                    </div>
                </div>
                <div class="col-xl-4">{{-- Release --}}
                    <div class="mb-3">
                        <label class="form-label">Release Date</label>
                        <input type="text" class="form-control" id="release_date" name="release_date"
                            placeholder="yyyy/mm/dd" value="{{ $template->release_date }}">
                    </div>
                </div>
                <div class="col-xl-4" id="censorsipShow">{{-- Censorship --}}
                    <div class="mb-3">
                        <label class="form-label">Censorship</label>
                        <select class="form-select" name="censorship" id="censorsip">
                          @foreach ($censor as $key => $value)
                          <option value="{{ $key }}" @if ($template->type == $key) selected @endif>{{ $value }}</option>
                          @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xl-4" id="languageShow">{{-- Language --}}
                    <div class="mb-3">
                        <label class="form-label" for="language">Language</label>
                        <select name="langauge[]" id="language" class="form-select" multiple>
                            @foreach ($languages as $lang)
                                <option {{ in_array($lang['name'], $lang2) ? 'selected' : '' }} value="{{ $lang['name'] }}">
                                    {{ $lang['name'] }}
                                    ({{ $lang['code'] }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xl-4" id="genreShow">{{-- Genre --}}
                    <div class="mb-3">
                        <label class="form-label">Genre</label>
                        <select multiple class="form-select" name="genre[]" id="genre">
                            <optgroup label="Technical">
                                @foreach ($technical as $tech)
                                    <option {{ in_array($tech->value, explode(', ', $template->genre)) ? 'selected' : '' }} value="{{ $tech->value }}">{{ $tech->value }}
                                    </option>
                                @endforeach
                            </optgroup>
                            <optgroup label="Non-Sexual">
                                < @foreach ($nonsexual as $nonsex)
                                    <option {{ in_array($nonsex->value, explode(', ', $template->genre)) ? 'selected' : '' }} value="{{ $nonsex->value }}">{{ $nonsex->value }}
                                    </option>
                                    @endforeach
                            </optgroup>
                            <optgroup label="Sexual">
                                @foreach ($sexual as $sex)
                                    <option {{ in_array($sex->value, explode(', ', $template->genre)) ? 'selected' : '' }} value="{{ $sex->value }}">{{ $sex->value }}
                                    </option>
                                @endforeach
                            </optgroup>
                            <optgroup label="Assets">
                                @foreach ($assets as $asset)
                                    <option {{ in_array($asset->value, explode(', ', $template->genre)) ? 'selected' : '' }} value="{{ $asset->value }}">{{ $asset->value }}
                                    </option>
                                @endforeach
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="col-xl-4" id="osShow">{{-- OS --}}
                    <div class="mb-3">
                        <label for="osSys" class="form-label">Operating
                            System</label>
                        <select name="osSys[]" id="osSys" multiple class="form-select">
                            @foreach ($os as $o)
                                <option {{ in_array($o['name'], explode(', ', $template->osSys)) ? 'selected' : '' }} value="{{ $o['name'] }}">{{ $o['name'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xl-4" id="voicedShow">{{-- Voices --}}
                    <div class="mb-3">
                        <label class="form-label" for="voiced-lang">Voiced
                            Language</label>
                        <select name="voiced[]" id="voiced-lang" class="form-select" multiple>
                            @foreach ($languages as $lang)
                                <option {{ in_array($lang['name'], explode(', ', $template->voiced)) ? 'selected' : '' }} value="{{ $lang['name'] }}">{{ $lang['name'] }}
                                    ({{ $lang['code'] }})
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-xl-4" id="prequelShow">{{-- Prequel --}}
                    <div class="mb-3">
                        <label for="prequel" class="form-label">Prequel</label>
                        <input class="form-control" type="text" name="prequel" id="prequel"
                            placeholder="itznik likes lolis and femigurlz" value="{{ $template->prequel }}">
                    </div>
                </div>
                <div class="col-xl-4" id="sequelShow">{{-- Sequel --}}
                    <div class="mb-3">
                        <label for="sequel" class="form-label">Sequel</label>
                        <input class="form-control" type="text" name="sequel" id="sequel" value="{{ $template->sequel }}">
                    </div>
                </div>
                <div class="col-xl-4" id="userThankShow">{{-- User Thanks --}}
                    <div class="mb-3">
                        <label for="userThankYou" class="form-label">User Thank
                            You</label>
                        <input type="text" name="userThanks" id="userThanks" class="form-control" value="{{ $template->userThanks }}">
                    </div>
                </div>
                <div class="col-xl-4" id="vndbshow">{{-- VNDB --}}
                    <div class="mb-3">
                        <label for="vndb" class="form-label">VNDB ID/URL</label>
                        <input type="text" name="vndb" id="vndb" class="form-control" value="{{ $template->vndb }}">
                    </div>
                </div>
                <div class="col-xl-4" id="resShow">{{-- Resolution --}}
                    <div class="mb-3">
                        <label for="resolution" class="form-label">Resolution</label>
                        <input type="text" name="resolution" id="resolution" class="form-control" value="{{ $template->resolution }}">
                    </div>
                </div>
                <div class="col-xl-12" id="contentShow">{{-- Content --}}
                    <div class="mb-3">
                        <label for="content" class="form-label">Content</label>
                        <textarea class="form-control" id="content" rows="3" name="content" placeholder="sam is always watching">{{ $template->content }}</textarea>
                    </div>
                </div>
                <div class="col-xl-4" id="pageShow">{{-- Pages --}}
                    <div class="mb-3">
                        <label for="pages" class="form-label">Pages</label>
                        <input type="text" name="pages" id="pages" class="form-control" value="{{ $template->pages }}">
                    </div>
                </div>
                <div class="col-xl-4" id="trailerShow">{{-- Trailer --}}
                    <div class="mb-3">
                        <label for="trailer" class="form-label">Trailer Video/GIF</label>
                        <input type="text" name="trailer" id="trailer" class="form-control" value="{{ $template->trailer }}">
                        <small id="trailerHelpBlock" class="form-text text-muted">
                            <kbd>Youtube.com, Vimeo.com, store.steampowered.com, imgur.com and drive.google.com links
                                are supported</kbd>
                        </small>
                    </div>
                </div>
            </div>
            </div>
            <div class="row" id="installShow">{{-- Install --}}
                <div class="col-xl-12">
                    <div class="form-group mb-3">
                        <label class="form-label" for="installation">Installation</label>
                        <textarea class="form-control" id="installation" rows="3" name="installation"
                            placeholder="sam is always watching">{{ $template->installation }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row" id="changelogShow">{{-- Changelog --}}
                <div class="col-xl-12">
                    <div class="form-group mb-3">
                        <label class="form-label" for="changelog">Changelog</label>
                        <textarea class="form-control" id="changelog" rows="3" name="changelog"
                            placeholder="Alexander Krisnov is russia">{{ $template->changelog }}</textarea>
                    </div>
                </div>
            </div>
            <div class="row" id="contentListShow">{{-- Content List --}}
                <div class="col-xl-12">
                    <div class="form-group mb-3">
                        <label class="form-label" for="contentList">Content
                            List</label>
                        <textarea class="form-control" id="contentList" rows="3" name="contentList"
                            placeholder="LazyBloodlines actually does work">{{ $template->contentList }}</textarea>
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
