<div style="display:block;margin-left:auto;margin-right:auto;text-align:center;margin-top:10px">
  <form style="font:#fff;" class="form-inline" action="index.php" method="GET">
    <br>
      <label class="link-light">Type de recherche</label>
      <select name="page" style="width:33%;display:block;margin-left:auto;margin-right:auto;text-align:center;margin-top:10px" class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option value="tracks" name="tracks" selected>Musiques</option>
        <option value="artists">Artistes</option>
      </select>

      <br>

    <input style="width:33%; margin:0 auto; border-radius: 5px; border: none; padding: .5em;" type="search" name="q" id="search" placeholder="Musique/Artiste">

    <button type="submit" class="btn btn-secondary">
      <i class="fas fa-search"></i>
    </button>

  </form>
</div>
