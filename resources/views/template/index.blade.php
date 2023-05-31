@extends('layouts.app')

@section('content')
    <!-- BEGIN container -->
    <div class="container">
        <div class="toast bg-danger text-white" data-autohide="false" style="position: absolute;top: 4rem;right: 0;">
            <div class="toast-header">
                <i class="far fa-bell text-muted me-2"></i>
                <strong class="me-auto">Message</strong>
                <small>{{ \Carbon\Carbon::now()->diffForHumans() }}</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast"></button>
            </div>
            <div class="toast-body">
               
            </div>
        </div>
        <!-- BEGIN row -->
        <div class="row justify-content-center">
            <!-- BEGIN col-10 -->
            <div class="col-xl-12">
                <!-- BEGIN row -->
                <div class="row">
                    <!-- BEGIN col-9 -->
                    <div class="col-xl-7">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Template Maker</li>
                        </ul>

                        <h1 class="page-header">
                            Create <small>a template for a game to be posted</small>
                        </h1>

                        <hr class="mb-4">
                        <form id="templateForm">
                            @csrf
                            <!-- BEGIN #header -->
                            <div id="headerInfo" class="mb-5">
                                <h4>Header Info</h4>
                                <p>This template tool is meant to be used for F95Zone purposes only. If you need
                                    something fixed, suggestions, etc. Please contact <a
                                        href="https://f95zone.to/members/ryahn.99264/">Ryahn</a> on F95Zone or
                                    F95Zone Discord.</p>
                                <div class="card">

                                    <div class="card-body pb-2">

                                        <div class="row">
                                            <div class="col-xl-4">{{-- Type --}}
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="gameType">Type</label>
                                                    <select class="form-select" id="gameType" name="type">
                                                        <option></option>
                                                        <option value="animation">Animation</option>
                                                        <option value="asset">Assets</option>
                                                        <option value="collection">Collection</option>
                                                        <option value="comic">Comic</option>
                                                        <option value="game">Game</option>
                                                        <option value="manga">Manga</option>
                                                        <option value="other">Other</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-8"> {{-- Title --}}
                                                <div class="form-group mb-3">
                                                    <label class="form-label"
                                                        for="game_name">Game/Comic/Manga/Animation/Collection
                                                        name</label>
                                                    <input type="text" class="form-control" id="game_name"
                                                        name="game_name" placeholder="pezzo is gay">
                                                </div>

                                            </div>
                                            
                                            <div class="row">
                                                <div class="col-xl-6">{{-- Dev Name --}}
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="devName">Developer/Artist
                                                            Name</label>
                                                        <input type="text" class="form-control" id="devName"
                                                            name="devName" placeholder="Sarcia is a furry">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6" id="versionShow">{{-- Version --}}
                                                    <div class="form-group mb-3">
                                                        <label class="form-label" for="version">Version</label>
                                                        <input type="text" class="form-control" id="version"
                                                            name="version" placeholder="BaasB likes futa furries">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-12">
                                                    <div class="form-group mb-3">
                                                        <label for="devLinks" class="form-label">Dev Links</label>
                                                        <input type="text" class="form-control" name="devLinks" id="devLinks">
                                                        <small id="trailerHelpBlock" class="form-text text-muted">
                                                            <kbd>Format: SiteName|url,Sitename|url</kbd>
                                                          </small>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>

                                    </div>
                                    <div class="card-arrow">
                                        <div class="card-arrow-top-left"></div>
                                        <div class="card-arrow-top-right"></div>
                                        <div class="card-arrow-bottom-left"></div>
                                        <div class="card-arrow-bottom-right"></div>
                                    </div>

                                </div>
                            </div>
                            <!-- END #header -->

                            <!-- BEGIN #general -->
                            <div id="generalinfo" class="mb-5">
                                <h4>General Info</h4>
                                <p>The important stuff</p>
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <div class="row">
                                            <div class="col-xl-12">{{-- Overview --}}
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="overview">Overview</label>
                                                    <textarea class="form-control" id="overview" rows="3" name="overview"
                                                        placeholder="souleater is not into his cousin"></textarea>
                                                </div>
                                            </div>
                                            {{-- </div> --}}
                                            {{-- <div class="row"> --}}
                                            <div class="col-xl-4">{{-- Updated --}}
                                                <div class="mb-3">
                                                    <label class="form-label" for="thread_updated">Thread
                                                        Updated</label>
                                                    <input type="text" class="form-control" id="thread_updated"
                                                        name="thread_updated" placeholder="yyyy/mm/dd">
                                                </div>
                                            </div>
                                            <div class="col-xl-4">{{-- Release --}}
                                                <div class="mb-3">
                                                    <label class="form-label">Release Date</label>
                                                    <input type="text" class="form-control" id="release_date"
                                                        name="release_date" placeholder="yyyy/mm/dd">
                                                </div>
                                            </div>
                                            <div class="col-xl-4" id="censorsipShow">{{-- Censorship --}}
                                                <div class="mb-3">
                                                    <label class="form-label">Censorship</label>
                                                    <select class="form-select" name="censorship" id="censorsip">
                                                        <option></option>
                                                        <option value="1">Yes - Mosaics</option>
                                                        <option value="2">Yes - Patch w/ Mosaics
                                                        </option>
                                                        <option value="3">Yes - Patch w/o Mosaics
                                                        </option>
                                                        <option value="4">No</option>
                                                        <option value="5">No Sexual Content</option>
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- </div> --}}
                                            {{-- <div class="row"> --}}
                                            <div class="col-xl-4" id="languageShow">{{-- Language --}}
                                                <div class="mb-3">
                                                    <label class="form-label" for="language">Language</label>
                                                    <select name="langauge[]" id="language" class="form-select"
                                                        multiple>
                                                        @foreach ($languages as $lang)
                                                            <option @if ($lang['selected']) selected @endif
                                                                value="{{ $lang['name'] }}">{{ $lang['name'] }}
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
                                                                <option value="{{ $tech->value }}">{{ $tech->value }}
                                                                </option>
                                                            @endforeach
                                                        </optgroup>
                                                        <optgroup label="Non-Sexual">
                                                            < @foreach ($nonsexual as $nonsex)
                                                                <option value="{{ $nonsex->value }}">{{ $nonsex->value }}
                                                                </option>
                                                                @endforeach
                                                        </optgroup>
                                                        <optgroup label="Sexual">
                                                            @foreach ($sexual as $sex)
                                                                <option value="{{ $sex->value }}">{{ $sex->value }}
                                                                </option>
                                                            @endforeach
                                                        </optgroup>
                                                        <optgroup label="Assets">
                                                            @foreach ($assets as $asset)
                                                                <option value="{{ $asset->value }}">{{ $asset->value }}
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
                                                            <option value="{{ $o['name'] }}">{{ $o['name'] }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            {{-- </div> --}}
                                            {{-- <div class="row" id="row1Show"> --}}
                                            <div class="col-xl-4" id="voicedShow">{{-- Voices --}}
                                                <div class="mb-3">
                                                    <label class="form-label" for="voiced-lang">Voiced
                                                        Language</label>
                                                    <select name="voiced[]" id="voiced-lang" class="form-select"
                                                        multiple>
                                                        @foreach ($languages as $lang)
                                                            <option value="{{ $lang['name'] }}">{{ $lang['name'] }}
                                                                ({{ $lang['code'] }})
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-xl-4" id="prequelShow">{{-- Prequel --}}
                                                <div class="mb-3">
                                                    <label for="prequel" class="form-label">Prequel</label>
                                                    <input class="form-control" type="text" name="prequel"
                                                        id="prequel" placeholder="itznik likes lolis and femigurlz">
                                                </div>
                                            </div>
                                            <div class="col-xl-4" id="sequelShow">{{-- Sequel --}}
                                                <div class="mb-3">
                                                    <label for="sequel" class="form-label">Sequel</label>
                                                    <input class="form-control" type="text" name="sequel"
                                                        id="sequel">
                                                </div>
                                            </div>
                                            {{-- </div> --}}
                                            {{-- <div class="row"> --}}
                                            <div class="col-xl-4" id="userThankShow">{{-- User Thanks --}}
                                                <div class="mb-3">
                                                    <label for="userThankYou" class="form-label">User Thank
                                                        You</label>
                                                    <input type="text" name="userThanks" id="userThanks"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-4" id="vndbshow">{{-- VNDB --}}
                                                <div class="mb-3">
                                                    <label for="vndb" class="form-label">VNDB ID/URL</label>
                                                    <input type="text" name="vndb" id="vndb"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-4" id="resShow">{{-- Resolution --}}
                                                <div class="mb-3">
                                                    <label for="resolution" class="form-label">Resolution</label>
                                                    <input type="text" name="resolution" id="resolution"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            {{-- </div> --}}
                                            {{-- <div class="row"> --}}
                                            <div class="col-xl-12" id="contentShow">{{-- Content --}}
                                                <div class="mb-3">
                                                    <label for="content" class="form-label">Content</label>
                                                    <textarea class="form-control" id="content" rows="3" name="content" placeholder="sam is always watching"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xl-4" id="pageShow">{{-- Pages --}}
                                                <div class="mb-3">
                                                    <label for="pages" class="form-label">Pages</label>
                                                    <input type="text" name="pages" id="pages"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-4" id="trailerShow">{{-- Trailer --}}
                                                <div class="mb-3">
                                                    <label for="trailer" class="form-label">Trailer Video/GIF</label>
                                                    <input type="text" name="trailer" id="trailer"
                                                        class="form-control">
                                                        <small id="trailerHelpBlock" class="form-text text-muted">
                                                            <kbd>Youtube.com, Vimeo.com, store.steampowered.com, imgur.com and drive.google.com links are supported</kbd>
                                                          </small>
                                                </div>
                                            </div>
                                            {{-- </div> --}}
                                            {{-- <div class="row"> --}}
                                            {{-- <div class="col-xl-4" id="lengthShow">
                                                <div class="mb-3">
                                                    <label class="form-label">Play Time</label>
                                                    <select class="form-select" name="length" id="length">
                                                        <option></option>
                                                        <option value="Very short (< 2 hours)">Very short (< 2
                                                                hours)</option>
                                                        <option value="Short (2 - 10 hours)">Short (2 - 10 hours)</option>
                                                        <option value="Medium (10 - 30 hours)">Medium (10 - 30 hours)
                                                        </option>
                                                        <option value="Long (30 - 50 hours)">Long (30 - 50 hours)</option>
                                                        <option value="Very long (> 50 hours)">Very long (> 50 hours)
                                                        </option>
                                                    </select>
                                                </div>
                                            </div> --}}
                                            <div class="col-xl-4" id="linkAssetShow">{{-- Link To Asset --}}
                                                <div class="mb-3">
                                                    <label for="linkAsset" class="form-label">Link To Asset</label>
                                                    <input type="text" name="linkAsset" id="linkAsset"
                                                        class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-xl-4" id="compatibleShow">{{-- Software --}}
                                                <div class="mb-3">
                                                    <label class="form-label">compatible Software</label>
                                                    <select class="form-select" name="compatible[]" id="compatible"
                                                        multiple>
                                                        <optgroup label="Blender">
                                                            @foreach ($blender as $blen)
                                                                <option value="{{ $blen->name }}">{{ $blen->name }}
                                                                </option>
                                                            @endforeach
                                                        </optgroup>
                                                        <optgroup label="Unreal Engine">
                                                            @foreach ($unreal as $unr)
                                                                <option value="{{ $unr->name }}">{{ $unr->name }}
                                                                </option>
                                                            @endforeach
                                                        </optgroup>
                                                        <optgroup label="None">
                                                            @foreach ($none as $nones)
                                                                <option value="{{ $nones->name }}">{{ $nones->name }}
                                                                </option>
                                                            @endforeach
                                                        </optgroup>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-arrow">
                                        <div class="card-arrow-top-left"></div>
                                        <div class="card-arrow-top-right"></div>
                                        <div class="card-arrow-bottom-left"></div>
                                        <div class="card-arrow-bottom-right"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END #general -->

                            <!-- BEGIN #general2 -->
                            <div id="notes" class="mb-5">
                                <h4>Notes</h4>
                                <p>Notes &amp; Stuff</p>
                                <div class="card">
                                    <div class="card-body pb-2">
                                        <div class="row" id="installShow">{{-- Install --}}
                                            <div class="col-xl-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="installation">Installation</label>
                                                    <textarea class="form-control" id="installation" rows="3" name="installation"
                                                        placeholder="sam is always watching"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="changelogShow">{{-- Changelog --}}
                                            <div class="col-xl-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="changelog">Changelog</label>
                                                    <textarea class="form-control" id="changelog" rows="3" name="changelog"
                                                        placeholder="Alexander Krisnov is russia"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="devNotesShow">{{-- Dev Notes --}}
                                            <div class="col-xl-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="devNotes">Dev Notes</label>
                                                    <textarea class="form-control" id="devNotes" rows="3" name="devNotes"
                                                        placeholder="rf46 FBI is looking for you"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="contentListShow">{{-- Content List --}}
                                            <div class="col-xl-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="contentList">Content
                                                        List</label>
                                                    <textarea class="form-control" id="contentList" rows="3" name="contentList"
                                                        placeholder="LazyBloodlines actually does work"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row" id="includedListShow">{{-- Included --}}
                                            <div class="col-xl-12">
                                                <div class="form-group mb-3">
                                                    <label class="form-label" for="included">Included
                                                        Models/Assets</label>
                                                    <textarea class="form-control" id="included" rows="3" name="included" placeholder="ThiccStudios is a cover"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <button class="btn btn-outline-theme btn-lg d-block w-100 fw-500 mb-3"
                                            id="makeBBcode">Make</button>
                                    </div>
                                    <div class="card-arrow">
                                        <div class="card-arrow-top-left"></div>
                                        <div class="card-arrow-top-right"></div>
                                        <div class="card-arrow-bottom-left"></div>
                                        <div class="card-arrow-bottom-right"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END #general2 -->
                            
                        </form>
                    </div>
                    <!-- END col-9-->
                    <div class="col-xl-5">

                        <!-- BEGIN #general3 -->
                        <div id="notes" class="mb-5">
                            <h4>BBCODE</h4>
                            <div class="card">
                                <div class="card-body pb-2">
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="mb-3">
                                                <div class="input-group flex-nowrap">
                                                    <input type="text" class="form-control" readonly id="titleFormat">
                                                    <span class="input-group-text copyToClipBoard" data-clipboard-target="#titleFormat"><i class="fas fa-lg fa-fw me-2 fa-clipboard"></i></span>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <div class="mb-3">
                                                <div class="input-group flex-nowrap">
                                                    <input type="text" class="form-control" readonly id="genreFormat">
                                                    <span class="input-group-text copyToClipBoard" data-clipboard-target="#genreFormat"><i class="fas fa-lg fa-fw me-2 fa-clipboard"></i></span>
                                                  </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-12">
                                            <div class="form-group mb-3">
                                                <button class="btn btn-primary mb-2 copyToClipBoard" id="bbcodeCopy" data-clipboard-target="#bbcode"><i class="fas fa-lg fa-fw me-2 fa-clipboard"></i>Copy BBCODE</button>
                                                <textarea class="form-control" id="bbcode" rows="40" readonly></textarea>
                                                
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="card-arrow">
                                    <div class="card-arrow-top-left"></div>
                                    <div class="card-arrow-top-right"></div>
                                    <div class="card-arrow-bottom-left"></div>
                                    <div class="card-arrow-bottom-right"></div>
                                </div>
                            </div>
                        </div>
                        <!-- END #general3 -->
                        
                        </div>
                </div>
                <!-- END row -->
            </div>
            <!-- END col-10 -->

        </div>
        <!-- END row -->
    </div>
    <!-- END container -->
@endsection
@section('scripts')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#templateForm").on('submit', function(e) {

            e.preventDefault();
            // console.log($(this).serialize())

            $.ajax({
                type: 'POST',
                url: "/maker/store",
                data: $(this).serialize(),
                success: function(data) {
                    if($.isEmptyObject(data.errors)){
                    // console.log(data)
                        $('.toast-body').empty().append(data.msg);
                        $('.toast').toast('show');
                        $.ajax({
                            type: 'GET',
                            url: "/maker"+"/"+data.id,
                            success: function(data1) {
                                $('#titleFormat').val(`${data1.template.game_name} [${data1.template.version}][${data1.template.devName}]`);
                                $('#genreFormat').val(data1.template.genre);
                                $('#bbcode').val(data1.html);
                            }
                        })
                    } else {
                        $('.toast-body').empty();
                        $.each( data.errors, function( key, value ) {
                            $('.toast-body').append(`<p>${value}</p>`);
                        });
                        $('.toast').toast('show', {
                        delay: 10000
                        });
                    }
                }
            });

        });

        var clipboard = new ClipboardJS('.copyToClipBoard');

        clipboard.on('success', function(e) {
            $('.toast-body').empty().append('Copied to clipboard');
            $('.toast').toast('show', {
                        delay: 10000
                        });
            e.clearSelection();
        });

        clipboard.on('error', function(e) {
            $('.toast-body').empty().append('Could not copy to clipboard!!');
            $('.toast').toast('show', {
                        delay: 10000
                        });
        });
    </script>
@endsection
