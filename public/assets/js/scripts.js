$(document).ready(function () {

    $('#genre-dropdown').selectize({
        create: false,
        sortField: 'text',
        hideSelected: true
    });

    var genre = $("#genre-dropdown")[0].selectize;
    genre.clearOptions();

    genre.addOptionGroup("technical", {
        label: "Technical"
    });
    genre.addOptionGroup("nonsexual", {
        label: "Non Sexual"
    });
    genre.addOptionGroup("sexual", {
        label: "Sexual"
    });
    
    genre.addOptionGroup("assets", {
        label: "Assets"
    });

    $.ajax({
        url: "http://localhost:9000/tags", success: function (result) {
            result.data[0].technical.forEach(function (index, value) { genre.addOption(index) });
            result.data[0].sexual.forEach(function (index, value) { genre.addOption(index) });
            result.data[0].nonsexual.forEach(function (index, value) { genre.addOption(index) });
            result.data[0].assets.forEach(function (index, value) { genre.addOption(index) });
            // genre.addOption(result.data[0].technical)
        }
    });
    genre.refreshOptions();

    $('#os-dropdown').selectize({
        create: false,
        sortField: 'text',
        hideSelected: true
    });
    $('#language-dropdown').selectize({
        create: false,
        sortField: 'text',
        hideSelected: true
    });
    var lang = $("#language-dropdown")[0].selectize;
    lang.clearOptions();
    $.ajax({
        url: "http://localhost:9000/lang", success: function (result) {
            result.data.forEach(function (index, value) { lang.addOption(index) });
        }
    });
    lang.refreshOptions();

    $('#voiced-language-dropdown').selectize({
        create: false,
        sortField: 'text',
        hideSelected: true
    });
    var vlang = $("#voiced-language-dropdown")[0].selectize;
    vlang.clearOptions();
    $.ajax({
        url: "http://localhost:9000/lang", success: function (result) {
            result.data.forEach(function (index, value) { vlang.addOption(index) });
        }
    });
    vlang.refreshOptions();

    $('#additional').selectize({
        create: false,
        sortField: 'text',
        hideSelected: true
    });
    $('#censorship-dropdown').selectize({
        create: false,
        sortField: 'text',
        hideSelected: true,
        allowEmptyOption: false
    });

    jQuery.fn.selectText = function () {
        var doc = document,
            element = this[0],
            range, selection;
        if (doc.body.createTextRange) {
            range = document.body.createTextRange();
            range.moveToElementText(element);
            range.select();
        } else if (window.getSelection) {
            selection = window.getSelection();
            range = document.createRange();
            range.selectNodeContents(element);
            selection.removeAllRanges();
            selection.addRange(range);
        }
    };
    function isValidHttpUrl(string) {
        let url;
        try {
          url = new URL(string);
        } catch (_) {
          return false;
        }
        return url.protocol === "http:" || url.protocol === "https:";
      }


    $('.additional, .downloads, #optVoice, #optPre, #optVN, #optThank, #optSequel, #windows, #macOS, #linux, #android, #other').hide();

    $(function () {
        $('#additional').on('change', function () {
            $('#sequel1, #optSequel')[$.inArray('sequel', $(this).val()) >= 0 ? 'show' : 'hide']();
            $('#voiced1, #optVoice')[$.inArray('voiced', $(this).val()) >= 0 ? 'show' : 'hide']();
            $('#prequel1, #optPre')[$.inArray('prequel', $(this).val()) >= 0 ? 'show' : 'hide']();
            $('#vndbr1, #optVNR')[$.inArray('vndb', $(this).val()) >= 0 ? 'show' : 'hide']();
            $('#vndbr2, #optVNR1')[$.inArray('vndb', $(this).val()) >= 0 ? 'show' : 'hide']();
            $('#vndb1, #optVN')[$.inArray('vndb', $(this).val()) >= 0 ? 'show' : 'hide']();
            $('#thank1, #thankHide')[$.inArray('thank', $(this).val()) >= 0 ? 'show' : 'hide']();
        });

        $('#os-dropdown').on('change', function () {
            $('#winDL1, #windows')[$.inArray('Windows', $(this).val()) >= 0 ? 'show' : 'hide']();
            $('#macOSDL1, #macOS')[$.inArray('macOS', $(this).val()) >= 0 ? 'show' : 'hide']();
            $('#linuxDL1, #linux')[$.inArray('Linux', $(this).val()) >= 0 ? 'show' : 'hide']();
            $('#androidDL1, #android')[$.inArray('Android', $(this).val()) >= 0 ? 'show' : 'hide']();
            $('#otherDL1, #other')[$.inArray('Other', $(this).val()) >= 0 ? 'show' : 'hide']();
        });
    });

    var title, overview, dev, version, release, update, censor, lang, os, genre, pre, seq, voice, install, change, vndb, winUrls, macUrls, linUrls, andUrls, otherUrls;

    $(function () {

        $('#formatButton').click(function () {
            title = $('#title').val();
            version = $('#version').val();
            dev = $('#dev').val();
            release = moment($('#release').val()).format('Y-MM-DD');
            update = moment($('#update').val()).format('Y-MM-DD');
            censor = $('#censorship-dropdown').text();
            os = $('#os-dropdown').val().join(', ');
            genre = $('#genre-dropdown').val().join(', ');
            lang = $('#language-dropdown').val().join(', ');
            voice = $('#voiced-language-dropdown').val().join(', ');
            pre = $('#sequel').val();
            seq = $('#prequel').val();
            winUrls = $('#winDL').val();
            macUrls = $('#macOSDL').val();
            linUrls = $('#linuxDL').val();
            andUrls = $('#androidDL').val();
            otherUrls = $('#otherDL').val();

            if (version === '') {
                $('#titleData').val(`${title} [${update}][${dev}]`);
                $('#versionData').hide();
            } else {
                $('#titleData').val(`${title} [${version}][${dev}]`);
                $('#versionData').show();
            }

            var tmp = [],
                num = 1,
                tmp1 = [],
                tmp2;

            $.each($('#installation').val().split('\n'), function (key, value) {
                tmp.push(num + " - " + value);
                num++
            });
            install = tmp.join('<br>');



            // $.each($('#overview').val().split('\n'), function (key2, value2) {
            //     tmp2.push(value2);
            // });
            // overview = tmp2.join('<br>');

            if ($('#changelog').val() === '') {
                $('#changeHide1').hide();
            } else {
                $.each($('#changelog').val().split('\n'), function (key1, value1) {
                    tmp1.push(value1);
                });
                change = tmp1.join('<br>');
                $('#chagnelogData').append(change);
            }

            if ($('#thank').val() === '') {
                $('thankHide').hide();
            } else {
                var utmp = $('#thank').val().split('/')[4];
                var uid = utmp.split('.')[1];
                var uname = utmp.split('.')[0];
                var thankYou = `[user=${uid}]${uname}[/user]`;
                $('#thankData').append(thankYou);
            }
            var vndbRelease = false

            if ($('#vndb').val() === '') {
                console.log('VNDB EMPTY');
            } else {
                var vndbid = $('#vndb').val();
                if (isValidHttpUrl(vndbid)) {
                    var vURL = vndbid.split('/');
                    $.ajax({
                    async: false,
                    url: 'http://localhost:9000/vn/'+vURL[3], success: function (result) {
                        // result.data.forEach(function (index, value) { lang.addOption(index) });
                        var data = result.data.results[0];
                        console.log(data)
                        // $('#optVN').append('https://vndb.org/'+data.id);
                        // $('#optVNR1').append(data.titles[0].title);
                        // $('#optVNR').append(data.titles[0].latin);
                        // $('#releaseData').append(data.released);
                        // vndbRelease = true
                    }
                });
                } 
                
           
                var vndburl = 'http://localhost:9000/vn/'+vndbid
                // $.ajax({
                //     async: false,
                //     url: vndburl, success: function (result) {
                //         // result.data.forEach(function (index, value) { lang.addOption(index) });
                //         var data = result.data.results[0];
                //         $('#optVN').append('https://vndb.org/'+data.id);
                //         $('#optVNR1').append(data.titles[0].title);
                //         $('#optVNR').append(data.titles[0].latin);
                //         $('#releaseData').append(data.released);
                //         vndbRelease = true
                //     }
                // });
            }

            $('#overviewData').append($('#overview').val());
            if (!vndbRelease) {
                $('#releaseData').append(release);

            }
            $('#updateData').append(update);
            $('#devData').append(dev);
            $('#censorData').append(censor);
            $('#versionData').append(version);
            $('#osData').append(os);
            $('#langData').append(lang);
            $('#genreData').append(genre);
            $('#tagData').val(genre);
            $('#installationData').append(install);
            $('#optVoice').append(voice);
            $('#optSequel').append(`[URL=${seq}]LINK[/URL]`);
            $('#optPre').append(`[URL=${pre}]LINK[/URL]`);
            // $('#optVNR1').append($('#vndbr').val());
            // $('#optVNR').append($('#vndbr2').val());
            // $('#optVN').append(`[URL=${vndb}]LINK[/URL]`);
            $('#windows').append("<p>Win: " + winUrls + "</p>");
            $('#macOS').append("<p>macOS:<br>" + macUrls + "</p>");
            $('#linux').append("<p>Linux:<br>" + linUrls + "</p>");
            $('#android').append("<p>Android:<br>" + andUrls + "</p>");
            $('#other').append("<p>Other:<br>" + otherUrls + "</p>");



            $(function () {
                $('selectall').on('click', function () {
                    $('#selectall').selectText();
                });
                $('#titleData').on('click', function () {
                    $(this).select();
                });
                $('#tagData').on('click', function () {
                    $(this).select();
                });
            });
        });
    });
});