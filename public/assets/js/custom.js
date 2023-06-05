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
  $('#osSys').selectize({
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
  $('#compatible').selectize({
      sortField: 'text',
      hideSelected: true,
      searchField: ["text"]
  });
  $('#length').selectize({
      hideSelected: true,
      searchField: ["text"]
  });


$('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
$('#gameType').on('change',function () {

  switch($(this).val()) {
      case 'game':
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#censorsipShow,#changelogShow,#devNotesShow,#genreShow,#installShow,#languageShow,#osShow,#prequelShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow,#trailerShow').show();
        break;
      case 'asset':
          $('#releaseDateShow,#thread_updatedShow,#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#compatibleShow,#includedListShow,#linkAssetShow,#userThankShow').show();
        break;
      case 'animation':
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#censorsipShow,#changelogShow,#contentListShow,#devNotesShow,#genreShow,#installShow,#languageShow,#lengthShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#voicedShow,#trailerShow').show();
        break;
      case 'comic':
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#censorsipShow,#changelogShow,#contentListShow,#devNotesShow,#genreShow,#installShow,#languageShow,#lengthShow,#originalTitleShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow').show();
        break;
      case 'manga':
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#censorsipShow,#changelogShow,#contentListShow,#devNotesShow,#genreShow,#installShow,#languageShow,#lengthShow,#originalTitleShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow').show();
        break;
      case 'collection':
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#voicedShow,#prequelShow,#sequelShow,#userThankShow,#vndbshow,#resShow,#contentShow,#censorsipShow,#pageShow,#contentListShow,#originalTitleShow,#lengthShow,#linkAssetShow,#includedListShow,#compatibleShow,#trailerShow').show();
        break;
      case 'other':
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow,#trailerShow').show();
        break;
      default:
          $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
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
});