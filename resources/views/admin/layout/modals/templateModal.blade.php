
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h4 class="modal-title" id="myModalLabel">View/Edit: {{ $template->game_name }}</h4>
  </div>
  <div class="modal-body">

    <div class="form-group">

      <!--<input type="text" id="username" placeholder="User Name" class="form-control"/>-->
      <!-- <div id="confirmdetails">Confirmation details go here...</div>-->
      <label for="age">Age</label>
      <input type="text" id="age" class="form-control" />

    </div>

  </div>
  <div class="modal-footer">
    <!-- onclick="cancelRecord()" -->
    <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
  </div>