<?php if(empty(Session::getCookies()['latitude'])): ?>
<div id="cb-cookie-banner" class="alert alert-dark text-center mb-0" style="position:-webkit-sticky; position: sticky;
      bottom: 0px;" role="alert">
🍪 Autoriser le stockage en temps réel de votre position
<a href="index.php?page=apropos" target="blank">En apprendre plus</a>
<button type="button" class="btn btn-primary btn-sm ms-3" onclick="agreeCookie()">
J'accepte
</button>
</div>

<script type="text/javascript">
  var loader = document.getElementById('loader');
  var home = document.getElementById('home');
  var cookieBar = document.getElementById('cb-cookie-banner');
  var options = {
    enableHighAccuracy: true,
    maximumAge: 0
    };

    var crd;

    function success(pos) {
      crd = pos.coords;

      document.cookie = 'latitude='+crd.latitude;
      document.cookie = 'longitude='+crd.longitude;

      loadPage();
    }

    function error(err) {
    console.warn(`ERREUR (${err.code}): ${err.message}`);
    }

    function loadPage() {
      var con = document.getElementById('home')
      var xhttp = new XMLHttpRequest();
      method = "GET",
       url = window.location.href;
      xhttp.open(method, url, true);

      xhttp.onreadystatechange = function () {
        if (xhttp.readyState == 4 && xhttp.status == 200) {
          con.innerHTML = "";
          con.innerHTML = con.innerHTML+"<div style='z-index:2;' class='alert alert-success alert-dismissible fade show' role='alert'> <strong>Géolocalisation avec succès</strong> Vous pouvez profiter pleinement de l'expérience Validé. <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'><span aria-hidden='true'></span></button></div>";
          con.innerHTML = con.innerHTML+xhttp.responseText;
          home.style.opacity = 1;
          loader.style.display = "none";
        }
      }
      xhttp.send();
    }

  function agreeCookie() {
    cookieBar.style.display = 'none';
    loader.style.display = "inline-block";
    home.style.opacity = 0.3;

    if(navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(success, error, options);
    } else {
      home.style.opacity = 1;
      loader.style.display = "none";
    }
  }

</script>

<?php endif ?>
