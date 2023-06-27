var handleSelectizeLoad = function () {
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
};

var handleRenderDatepicker1 = function () {
  $('#thread_updated').datepicker({
    autoclose: true,
    format: 'yyyy/mm/dd'
  });
  $('#release_date').datepicker({
    autoclose: true,
    format: 'yyyy/mm/dd'
  });
};

var handleHideType = function (type) {
  console.log(type);
  $('#releaseDateShow,#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
  switch (type) {
    case 'game':
      $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
      $('#releaseDateShow,#censorsipShow,#changelogShow,#devNotesShow,#genreShow,#installShow,#languageShow,#osShow,#prequelShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow,#trailerShow').show();
      break;
    case 'asset':
      $('#releaseDateShow,#thread_updatedShow,#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
      $('#compatibleShow,#includedListShow,#linkAssetShow,#userThankShow').show();
      break;
    case 'animation':
      $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
      $('#releaseDateShow,#censorsipShow,#changelogShow,#contentListShow,#devNotesShow,#genreShow,#installShow,#languageShow,#lengthShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#voicedShow,#trailerShow').show();
      break;
    case 'comic':
      $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
      $('#releaseDateShow,#censorsipShow,#changelogShow,#contentListShow,#devNotesShow,#genreShow,#installShow,#languageShow,#lengthShow,#originalTitleShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow').show();
      break;
    case 'manga':
      $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
      $('#releaseDateShow,#censorsipShow,#changelogShow,#contentListShow,#devNotesShow,#genreShow,#installShow,#languageShow,#lengthShow,#originalTitleShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow').show();
      break;
    case 'collection':
      $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
      $('#releaseDateShow,#voicedShow,#prequelShow,#sequelShow,#userThankShow,#vndbshow,#resShow,#contentShow,#censorsipShow,#pageShow,#contentListShow,#originalTitleShow,#lengthShow,#linkAssetShow,#includedListShow,#compatibleShow,#trailerShow').show();
      break;
    case 'other':
      $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
      $('#releaseDateShow,#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow,#trailerShow').show();
      break;
    default:
      $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
  }
};

var handleSaveBBCode = function () {
  $('#recentEditSave').on('click', function (e) {
    e.preventDefault();

    $.ajax({
      beforeSend: function (xhr) {
        xhr.setRequestHeader("Authorization", "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vdGVtcGxhdGUudGVzdC9hcGkvbG9naW4iLCJpYXQiOjE2ODYzNjIwNzAsIm5iZiI6MTY4NjM2MjA3MCwianRpIjoidUVFcXVRS3Qxd3llVGRpQyIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.vWUaMQhKEQ-n8V3D5fgYna233mzNeqBDQSguig5EqDY")
      },
      type: 'POST',
      url: '/api/table/view/bbcode/save',
      data: $('#viewBBCodeForm').serialize(),
      success: function (result) {
        $('.toast-body').empty().append(result.msg);
        $("#recentViewModal").modal("hide");
        $('.toast').toast('show');
      }
    });
  })
};

$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
    }
  });
  handleSelectizeLoad();
  handleRenderDatepicker1();

  $('#releaseDateShow,#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
  $('#gameType').on('change', function () {

    switch ($(this).val()) {
      case 'game':
        $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
        $('#releaseDateShow,#censorsipShow,#changelogShow,#devNotesShow,#genreShow,#installShow,#languageShow,#osShow,#prequelShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow,#trailerShow').show();
        break;
      case 'asset':
        $('#releaseDateShow,#thread_updatedShow,#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
        $('#compatibleShow,#includedListShow,#linkAssetShow,#userThankShow').show();
        break;
      case 'animation':
        $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
        $('#releaseDateShow,#censorsipShow,#changelogShow,#contentListShow,#devNotesShow,#genreShow,#installShow,#languageShow,#lengthShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#voicedShow,#trailerShow').show();
        break;
      case 'comic':
        $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
        $('#releaseDateShow,#censorsipShow,#changelogShow,#contentListShow,#devNotesShow,#genreShow,#installShow,#languageShow,#lengthShow,#originalTitleShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow').show();
        break;
      case 'manga':
        $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
        $('#releaseDateShow,#censorsipShow,#changelogShow,#contentListShow,#devNotesShow,#genreShow,#installShow,#languageShow,#lengthShow,#originalTitleShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow').show();
        break;
      case 'collection':
        $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
        $('#releaseDateShow,#voicedShow,#prequelShow,#sequelShow,#userThankShow,#vndbshow,#resShow,#contentShow,#censorsipShow,#pageShow,#contentListShow,#originalTitleShow,#lengthShow,#linkAssetShow,#includedListShow,#compatibleShow,#trailerShow').show();
        break;
      case 'other':
        $('#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#trailerShow,#userThankShow,#versionShow,#vndbshow,#voicedShow').hide();
        $('#releaseDateShow,#censorsipShow,#changelogShow,#compatibleShow,#contentListShow,#contentShow,#devNotesShow,#genreShow,#includedListShow,#installShow,#languageShow,#lengthShow,#linkAssetShow,#originalTitleShow,#osShow,#pageShow,#prequelShow,#resShow,#sequelShow,#userThankShow,#versionShow,#vndbshow,#voicedShow,#trailerShow').show();
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


  var templateTable = $('#recentTemplateTable').DataTable({
    dom: "<'row mb-3'<'col-sm-4'l><'col-sm-8 text-end'<'d-flex justify-content-end'fB>>>t<'d-flex align-items-center'<'me-auto'i><'mb-0'p>>",
    processing: true,
    serverSide: true,
    responsive: true,
    order: [[0, "desc"]],
    ajax: "/maker/recent",
    columns: [
      { data: 'id', name: 'id' },
      { data: 'type', name: 'type' },
      { data: 'game_name', name: 'game_name' },
      { data: 'devName', name: 'devName' },
      { data: 'version', name: 'version' },
      { data: 'action', name: 'action', orderable: false, searchable: false },
    ]
  });

  $('#recentTemplateTable tbody').on('click', '#bbcode', function () {

    var data_row = templateTable.row($(this).parents('tr')).data(); // here is the change
    $.ajax({
      type: 'GET',
      url: '/backend/table/view/bbcode/' + data_row.id,
      success: function (result) {
        $('#recentModalViewContent').empty().html(result.html);
        $("#recentViewModal").modal("show");
      }
    });

  });
  $('#recentTemplateTable tbody').on('click', '#edit', function () {

    var data_row = templateTable.row($(this).parents('tr')).data(); // here is the change
    $.ajax({
      type: 'GET',
      url: '/backend/table/edit/' + data_row.id,
      success: function (result) {
        $('#recentModalViewContent').empty().html(result.html);
        $("#recentViewModal").modal("show");
      }
    });
  });

  
});