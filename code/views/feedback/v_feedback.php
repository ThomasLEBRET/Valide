<div class="modal fade" id="feedback" tabindex="-1" aria-labelledby="feedback" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="feedback">Votre avis compte pour nous</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="index.php?page=sendFeedback" style="width:90%; padding:1em">
        <div class="form-group">
          <label for="sexe">Sexe</label>
          <select class="form-control" name="sexe">
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>
            <option value="Autre">Autre</option>
          </select>

          <br>

          <label for="note">Notez notre site</label>
          <input required name="note" oninput="displayNote()" type="range" class="form-range" min="0" max="5" step="1" id="rangeNote">
          <p id="avis"></p>
          <script type="text/javascript">
          avis.innerHTML =rangeNote.value;
            function displayNote() {
              var avis = document.getElementById("avis");
              var rangeNote =  document.getElementById("rangeNote");
                avis.innerHTML =rangeNote.value;
              }
          </script>
          <label for="avis">Critiquez nous ;)</label>
          <textarea required style="border:1px solid black;border-radius:5px; width:100%" name="avis" rows="8" cols="80" placeholder="Votre avis"></textarea>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </div>
      </form>
    </div>
  </div>
</div>
