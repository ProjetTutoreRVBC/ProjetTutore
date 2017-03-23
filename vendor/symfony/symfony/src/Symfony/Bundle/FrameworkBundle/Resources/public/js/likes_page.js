var path='/web/bundles/framework/images/';
var src ={
  "likes":{
    "on":path+'thumbs-up-hand-symbol.png',
    "off":path+'thumbs-up.png'  
  },
  "dislikes":{
    "on":path+'thumbs-down-silhouette.png',
    "off":path+'thumb-down.png'
  }
  }; 

function likes(idButton){
        var idPost = $('#'+idButton+'-post-like').val();
        var idButtonDislike = idButton+1;
        var nbLikes = $("#"+idButton+" #content").html();
        var nbDislikes = $("#"+idButtonDislike+" #content").html();
        var icon0 = $('#'+idButton+' #icon'+idButton);
        var icon1 = $('#'+idButtonDislike+' #icon'+idButtonDislike);
        var like;
        var dislike;
        if($(icon0).attr('src') != src.likes.on){
          if($(icon1).attr('src') == src.dislikes.on){
            nbLikes++; 
            nbDislikes--;
            like = 1;
            dislike = 0;
          }
          else {
            nbLikes++;
            like = 1;
            dislike = 0;
          }
          $(icon0).attr('onmouseover','');
          $(icon0).attr('onmouseout','');
          $(icon1).attr('onmouseout','resetIconDown("icon'+idButtonDislike+'");');
          $(icon0).attr('src',src.likes.on);
          $(icon1).attr('src',src.dislikes.off);
        }
        else{ 
          nbLikes--;
          like = 0;
          dislike = 0;
          $(icon0).attr('onmouseout','resetIconUp("icon'+idButton+'");');
          $(icon0).attr('src',src.likes.off);
        }

        $("#"+idButton+" #content").html(nbLikes);
        $("#"+idButtonDislike+" #content").html(nbDislikes);
        $.post("/web/bundles/framework/php/likes_page.php", {likes : like, dislikes : dislike, idPost : idPost});
    }
    function dislikes(idButton){ 
        var idPost = $('#'+idButton+'-post-dislike').val();
        var idButtonLike = idButton-1;
        var nbLikes = $("#"+idButtonLike+" #content").html();
        var nbDislikes = $("#"+idButton+" #content").html();
        var icon0 = $('#'+idButtonLike+' #icon'+idButtonLike);
        var icon1 = $('#'+idButton+' #icon'+idButton);
        var like;
        var dislike;
        if($(icon1).attr('src') != src.dislikes.on){
          if($(icon0).attr('src') == src.likes.on){
            nbLikes--; 
            nbDislikes++;
            like = 0;
            dislike = 1;
          }
          else {
            nbDislikes++;
            like = 0;
            dislike = 1;
          }
          $(icon1).attr('onmouseover','');
          $(icon1).attr('onmouseout','');
          $(icon0).attr('onmouseout','resetIconUp("icon'+idButtonLike+'");');
          $(icon0).attr('src',src.likes.off);
          $(icon1).attr('src',src.dislikes.on);
        }
        else{
          like = 0;
          dislike = 0;
          nbDislikes--;
          $(icon1).attr('onmouseout','resetIconDown("icon'+idButton+'");');
          $(icon1).attr('src',src.dislikes.off);
        }

        $("#"+idButtonLike+" #content").html(nbLikes);
        $("#"+idButton+" #content").html(nbDislikes);
        $.post("/web/bundles/framework/php/likes_page.php", {dislikes : dislike, likes : like, idPost : idPost});
    }