/* AUTEURS : REILHAC Mickael, VASSEUR Simon */
         function votePour(login,matiere) {
          var liste = [];
          var texte = "";
          var i = 0;
          for(var key in votes) {
            voteur = Object.keys(votes)[i];
            for(var j = 0; j < votes[key][matiere].length; j++){
              if(votes[key][matiere][j] === login) {
                  liste.push(voteur);
                }
            }
            i++;
          }
          return liste;
        }  

        function nbVotePour(login,matiere) {
          var i = 0;
            var texte = "";
          for(var key in votes){
              voteur = Object.keys(votes)[i];
                //texte += voteur +" "+votes[key][matiere].length+"<br>";
            //document.getElementById("demo").innerHTML = texte;	
                if(voteur === login){
                  return votes[key][matiere].length;
                }
                i++;
            }	
        }

        function classement(liste){
          var max = 0;
          var classer = [];
          var i = 0;
          var tmp;
          while(classer.length < liste.length){
          for(var key in liste){
            if(max <= liste[key]){
              max=liste[key];
              tmp = key;
            }

          }
            classer[tmp] = max;
            liste[tmp] = 0;
            max = 0;
            tmp = 0;
          }
          return classer;
        }
    
    function getSelectValues() {
      var select = document.getElementById("option");
      var result = [];
      var options = select && select.options;
      var opt;

      for (var i=0, iLen=options.length; i<iLen; i++) {
        opt = options[i];

        if (opt.selected) {
          result.push(opt.value || opt.text);
        }
      }
      return result;
    }
    function pagerank(){
        
        var coef = {"ACDA" : 2.5,
        "ANG" : 2.5,
        "APL" : 3,
        "ART" : 1,
        "ASR" : 4,
        "EC" : 1.5,
        "EGOD" : 4,
        "MAT" : 4,
        "SGBD" : 1.5,
        "SPORT" : 1};
        var value = 0;                                                                                                                    
        var listeClassement = [];  
        var listeTriee = [];
        var matieres = getSelectValues();
        var matiere;
        var texte = "";

        var value_dep = 0;

        var add = 0;

        var iterations = 40;
        var res=0;
        var nb=0;
        var liste = [];
        var temp = [];
        var sum_coef;
        
        function len(arr) {
          var count = 0;
          for (var k in arr) {
            if (arr.hasOwnProperty(k)) {
              count++;
            }
          }
          return count;
        }
        
        for(var key in matieres){
          matiere = matieres[key];
          sum_coef += coef[matiere];
          for( var i = 0; i < iterations; i++){ 
              //Calcul du PageRank
              for(var log in  logins) {
                  listeTriee = votePour(log,matiere);

                  for( var name in listeTriee){
                    if(listeTriee[name] != log) {
                    if(listeClassement[listeTriee[name]])
                          add += (listeClassement[listeTriee[name]] / nbVotePour(listeTriee[name],matiere));
                      else
                            add += value_dep;
                          //texte += log+" : "+add+" = "+listeClassement[listeTriee[name]]+" / "+ nbVotePour(listeTriee[name],matiere)+"<br>";
                  //if(i==1)
                    //texte += log+" a--> "+value+" "+listeClassement[listeTriee[name]]+"<br>";
                    if(i === iterations -1){
                      //texte += "("+listeClassement[listeTriee[name]]+"/"+nbVotePour(listeTriee[name],matiere)+") + ";
                    }
                    }
                  }
                  temp[log] = add;
                  add = 0;
               }
                for(var log in  logins) {
                  value = 0.15 +(0.85 * temp[log]);
                  //texte += log+" : 0.15 + 0.85 * "+add+" =============>  "+value+"<br>";
                  if(i === iterations - 1){


                  if(votePour(log,matiere) !== 0 || nbVotePour(log,matiere) != null){
                    res += value;
                    nb++;
                    var vote = votePour(log,matiere);
                    //texte += logins[log]+" =============>  "+value+" votes : "+vote.length+" || a voté : "+nbVotePour(log,matiere)+"<br>";
                  } 

                  }
                  listeClassement[log] = value;
                //texte += log+" : "+listeClassement[log]+"<br>";
                if(i == iterations-1)  
                if(liste[log])  
                  liste[log] += value * coef[matiere];
                else
                  liste[log] = value * coef[matiere];
                
            }
          }
        }
          var max = 0;
          var classer = [];
          var t  = liste;
          var tmp1 =0;
        for(var tmp = 0;tmp < len(t);tmp++){
          for(var k in t){
            if(max <= t[k]){
              max=t[k];
              tmp1 = k;
            }

          }
            texte += "<tr style='width:100%;'>"+(tmp+1)+" : "+logins[tmp1]+"</tr><br>";
            t[tmp1] = 0;
            max = 0;
          
          
          }
        document.getElementById("demo").innerHTML = texte;
    }