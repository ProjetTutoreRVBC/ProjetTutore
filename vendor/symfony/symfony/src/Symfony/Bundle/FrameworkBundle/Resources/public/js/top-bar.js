   function handleWindow() {
          var width;
          var type;
          var space = 150;
          var element;
          var element1;          
          if(document.getElementById("signIn")){
            element = "signIn";
          }
          if(document.getElementById("signed")){
            space = 50; 
            element = "signed";
            element1 = "signed-1"
            }
       
          width =   500;
          document.getElementById("search-bar").style.marginLeft= "16px";
          document.getElementById("right-log").style.display= "";
          document.getElementById("logo").style.display= "";
          document.getElementById("logIn").style.display= "";
          document.getElementById(element).style.display= "";
          
          if(window.outerWidth < (1000 - space) ) {
            type = "px";
            document.getElementById("videos").style.marginTop= "130px";
            width = window.outerWidth - (509 - space);
          if(space === 50){
            document.getElementById(element1).style.display= "";
          }
          }
          if(window.outerWidth < 660){
            document.getElementById("videos").style.marginTop= "100px";
            document.getElementById("logo").style.display= "none";
            type="px";
            width = 200;
          }
          
          
          if(space === 50 && window.outerWidth < 600){
            document.getElementById(element1).style.display= "none";
          }
          
          
          if(window.outerWidth < 550){
            
            document.getElementById("videos").style.marginTop= "160px";
            document.getElementById("liste").style.display= "block";
          }
                    
          if(window.outerWidth < 555){
            document.getElementById(element).style.display= "none";
          }
          
          if(window.outerWidth < 460){
            document.getElementById("right-log").style.display= "none";
            document.getElementById("logIn").style.display= "none";
            document.getElementById("search-bar").style.marginLeft= "40px";
          }
        
          document.getElementById("search-bar").style.width = width+type;
      }