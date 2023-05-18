$(document).ready(function () {
  $('#language').selectize({
      sortField: 'text',
      hideSelected: true,
      searchField: ["text"]
  });
  $('#genre').selectize({
      sortField: 'text',
      hideSelected: true,
      searchField: ["text"]
  });
  $('#os-sys').selectize({
      sortField: 'text',
      hideSelected: true,
      searchField: ["text"]
  });
  $('#voiced-lang').selectize({
      sortField: 'text',
      hideSelected: true,
      searchField: ["text"]
  });
  $('#gameType').selectize({
      sortField: 'text',
      hideSelected: true,
      searchField: ["text"]
  });
  $('#voiced-lang').selectize({
      sortField: 'text',
      hideSelected: true,
      searchField: ["text"]
  });


$('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
$('#gameType').on('change',function () {
  console.log($(this).val())

  switch($(this).val()) {
      case 'game':
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#censorsipShow,#changelogShow,#devNotesShow,#genreShow,#installShow,#languageShow,#lengthShow,#originalTitleShow,#osShow,#prequelShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').show();
        break;
      case 'asset':
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#compatibleShow,#includedListShow,#languageShow,#linkAssetShow,#userThankShow,#versionShow').show();
        break;
      case 'animation':
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#censorsipShow,#changelogShow,#contentListShow,#devNotesShow,#genreShow,#installShow,#languageShow,#lengthShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#voicedShow').show();
        break;
      case 'comic':
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#censorsipShow,#changelogShow,#contentListShow,#devNotesShow,#genreShow,#installShow,#languageShow,#lengthShow,#originalTitleShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow').show();
        break;
      case 'manga':
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#censorsipShow,#changelogShow,#contentListShow,#devNotesShow,#genreShow,#installShow,#languageShow,#lengthShow,#originalTitleShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow').show();
        break;
      case 'collection':
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#voicedShow,#prequelShow,#sequelShow,#userThankShow,#vndbshow,#resShow,#contentShow,#censorsipShow,#pageShow,#contentListShow,#originalTitleShow,#lengthShow,#linkAssetShow,#includedListShow,#compatibleShow').show();
        break;
      case 'other':
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').show();
        break;
      default:
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
      }
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

var gameNameText = $('#game_name').val(), originalText = $('#originalTitle').val(), lengthText = $('#length').val(), versionText = $('#version').val(), overiewText = $('#overview').val(), threadUpdatedText = $('#thread_updated').val(), releaseDateText = $('#release_date').val(), devText = $('#devName').val(), censorText = $('#censorsip').val(), osText = $('#os-sys').val(), langText = $('#language').val(), genreText = $('#genre').val(), installText = $('#installation').val(), prequelText = $('#prequel').val(), sequelText = $('#sequel').val(), voicedText = $('#voiced-lang').val(), userText = $('#userThanks').val(), vndbText = $('#vndb').val(), resText = $('#resolution').val(), contentText = $('#content').val(), pagesText = $('#pages').val(), contentListText = $('#contentList').val(), changeLogText = $('#changelog').val(), devNotesText = $('#devNotes').val();
var topBBcode = "\
[CENTER](COVER ART; DELETE THIS)\
\
[B]Overview:[/B]" +
overiewText + "[/CENTER]\
\
[B]Thread Updated[/B]:" + threadUpdatedText
+"[B]Release Date[/B]: "+ releaseDateText
console.log(topBBcode)

// +"[B]Original Title[/B]: "+originalText
// [B]Developer[/B]: ${devText}
// [B]Censored[/B]: ${censorText}
// [B]Version[/B]: ${versionText}
// [B]OS[/B]: ${osText}
// [B]Language[/B]: ${langText}
// [B]Resolution[/B]: ${resText}
// [B]Content[/B]: ${contentText}
// [B]Pages[/B]: ${pagesText}
// [B]Voiced[/B]: ${voicedText}
// [B]VNDB[/B]: ${vndbText}
// [B]Length[/B]: ${lengthText}
// [B]Genre[/B]:
// [SPOILER]
// ${genreText}
// [/SPOILER]

// [B]Installation[/B]:
// [SPOILER]
// ${installText}
// [/SPOILER]

// [B]Changelog[/B]:
// [SPOILER]
// ${changeLogText}
// [/SPOILER]

// [B]Developer Notes[/B]:
// [SPOILER]
// ${devNotesText}
// [/SPOILER]

// [CENTER][B][SIZE=6]DOWNLOAD[/SIZE][/B]
// [SIZE=5][B]Win[/B]: 
// [B]Linux[/B]: 
// [B]Mac[/B]: 
// [B]Others[/B]: 
// [/SIZE]
// [SIZE=1][USER=1]@F95[/USER] thanks for the share.[/SIZE]

// (SAMPLES/SCREENSHOTS; DELETE THIS)[/CENTER]`;
});