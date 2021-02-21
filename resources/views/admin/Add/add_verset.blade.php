<div class="modal fade affiche" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">AJOUTER UN VERSET</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/managment/ajout/verset" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
            <div class="form-group col-sm-6">
               <label class="control-label">Reference</label>
                <input type="text" class="form-control" name="reference" placeholder="Ex: Matthieu 5 à 10" required="">
            </div>
            <div class="form-group col-sm-6">
               <label class="control-label">La date de publication</label>
                <input type="date" class="form-control" name="date_ajout" required="">
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <label class="control-label">Le verset</label>
              <textarea name="description" class="form-control" id="" cols="30" rows="4" required=""></textarea>
            </div>
          </div>
          <br><br>
          <div class="form-group col-12" align="center">
            <button class="btn btn-primary" type="submit" style="width: 150px;">
            <i class="fa fa-save"></i>
              <font style="vertical-align: inherit;">PUBLIER</font></font>
            </button>
          </div> 
          </div>
        </form>
    </div>
  </div>
</div>
<script type="text/javascript">      
  $('#modifSelect').select2();
  $('.modifSelect').select2();
</script>