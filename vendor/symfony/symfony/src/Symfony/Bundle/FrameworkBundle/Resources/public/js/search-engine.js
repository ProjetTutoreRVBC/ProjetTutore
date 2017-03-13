function suggest(str) {
      if (str.length === 0) { 
        document.getElementById("sugg_list").style.display = "none";
        return;
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              var reponse = JSON.parse(this.responseText);
              //document.getElementById("NOMBRE DE LIKES").value = reponse;                
              })
             // 
            }
        };
        xmlhttp.open("GET", "/web/bundles/framework/php/gethint.php?id=" + str, true);
        xmlhttp.send();
      
        }
      }