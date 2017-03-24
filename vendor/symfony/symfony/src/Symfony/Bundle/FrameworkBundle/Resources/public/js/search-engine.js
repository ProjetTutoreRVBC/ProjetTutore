function suggest(str) {
       if (str.length === 0) { 
        document.getElementById("completion").innerHTML = "";
        document.getElementById("sugg_list").style.display = "none";
         return;
       } else {
         var xmlhttp = new XMLHttpRequest();
         xmlhttp.onreadystatechange = function() {
             if (this.readyState == 4 && this.status == 200) {
                //document.getElementById("completion").innerHTML = this.responseText;
              var reponse = JSON.parse(this.responseText);
              document.getElementById("sugg_list").style.display = "";
              while( document.getElementById("sugg_list").firstChild ){
                document.getElementById("sugg_list").removeChild( document.getElementById("sugg_list").firstChild );
              }
              reponse.forEach(function(el){
                var newLI = document.createElement('li');
                 var a = document.createElement('a');
                 newLI.appendChild(document.createTextNode(el.nameVideo));
                 a.href = "watch?v="+el.idVideo;
                 a.style.color = "black";
                 a.appendChild(newLI);
                 document.getElementById("sugg_list").appendChild(a);
                
              })
             // 
             }
         };
         xmlhttp.open("GET", "/web/bundles/framework/php/gethint.php?q=" + str, true);
         xmlhttp.send();
      
         }
       }