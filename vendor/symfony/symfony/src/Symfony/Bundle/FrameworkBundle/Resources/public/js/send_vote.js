function send_vote(idVid, statut) {
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      var reponse = JSON.parse(this.responseText);
      if(reponse == "...") {
        document.getElementById("span").value = reponse; 
        document.getElementById("icon").src = "thumbs_up.png" 
        document.getElementById("icon").onMouseOver = "......"
        document.getElementById("icon").onMouseOut = "......"
        document.getElementById("button").disabled = true;
      }
    }
  };

  switch (statut) {
    case 0: //ADD LIKE
      xmlhttp.open("GET", "/web/bundles/framework/php/send_like.php?id=" + idVid, true);
      break;
    case 1: //RM LIKE
      xmlhttp.open("GET", "/web/bundles/framework/php/send_rmlike.php?id=" + idVid, true);
      break;
    case 2: //ADD DISLIKE
      xmlhttp.open("GET", "/web/bundles/framework/php/send_dislike.php?id=" + idVid, true);
      break;
    case 3: //RM DISLIKE
      xmlhttp.open("GET", "/web/bundles/framework/php/send_rmdislike.php?id=" + idVid, true);
      break;
    default:
      return false;
  }
  
  xmlhttp.send();

}