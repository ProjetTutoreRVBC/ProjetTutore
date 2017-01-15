
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
            texte += voteur+" : "+votes[key][matiere].length+"<br>";
            document.getElementById("demo").innerHTML = texte;
            if(voteur === login){
            	return votes[key][matiere].length;
            }
            i++;
        }
        
    }


function pagerank(){

    var value = 0;                                                                                                                    
    var listeClassement =[];                                                                                                                  
    var matiere = "ASR";                                                                                                   
    var listeTriee = [];
    
    var texte = "";
    for( var i = 0; i < 1; i++){                                                                                                          
        for(var log in  logins) {                                                                                       	
            listeTriee = votePour(log,matiere);
            value = value+0.15;
            for( var name in listeTriee){ 
                value = value + 0.85 * (value / nbVotePour(listeTriee[name],matiere));
            }                                                                                                                        
           	listeClassement.push(log);
            listeClassement[log] = value;
            
            //texte += log+" : PR="+value+" : "+nbVotePour(listeTriee[name],matiere)+"<br>";
            
            //document.getElementById("demo").innerHTML = texte;
            
            
        }                                                                                                                            
    }
}