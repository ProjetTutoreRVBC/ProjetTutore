
function likes(){
        var idVideo = $("video").attr('id');
        var nbLikes = $("button[name='likes'] #content").html();
        var nbDislikes = $("button[name='dislikes'] #content").html();
        var like = 0;
        var dislike = 0;
        if($("#icon0").attr('src') != '/web/bundles/framework/images/thumbs-up-hand-symbol.png'){
          if($("#icon1").attr('src') == '/web/bundles/framework/images/thumbs-down-silhouette.png'){
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
          //$("button[name='likes']").prop('disabled', true);
          //$("button[name='dislikes']").removeAttr("disabled");
          $("#icon0").attr('onmouseover','');
          $("#icon0").attr('onmouseout','');
          $("#icon1").attr('onmouseout','resetIconDown("icon1");');
          //$("#icon1").attr('onmouseover','changeIconDown("icon1");');
          $("#icon0").attr('src','/web/bundles/framework/images/thumbs-up-hand-symbol.png');
          $("#icon1").attr('src','/web/bundles/framework/images/thumb-down.png');
        }
        else{ 
          nbLikes--;
          like = 0;
          dislike = 0;
          //$("button[name='likes']").removeAttr("disabled");
          $("#icon0").attr('onmouseout','resetIconUp("icon0");');
          //$("#icon0").attr('onmouseover','changeIconUp("icon0");');
          $("#icon0").attr('src','/web/bundles/framework/images/thumbs-up.png');
        }

        $("button[name='likes'] #content").html(nbLikes);
        $("button[name='dislikes'] #content").html(nbDislikes);
        $.post("/web/bundles/framework/php/likes.php", {like : like, dislike : dislike, idVideo : idVideo});
    }
    function dislikes(){  
        var idVideo = $("video").attr('id');
        var nbLikes = $("button[name='likes'] #content").html();
        var nbDislikes = $("button[name='dislikes'] #content").html();
        var like = 0;
        var dislike = 0;
        if($("#icon1").attr('src') != '/web/bundles/framework/images/thumbs-down-silhouette.png'){
          if($("#icon0").attr('src') == '/web/bundles/framework/images/thumbs-up-hand-symbol.png'){
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
          $("#icon1").attr('onmouseover','');
          $("#icon1").attr('onmouseout','');
          $("#icon0").attr('onmouseout','resetIconUp("icon0");');
          //$("#icon0").attr('onmouseover','changeIconUp("icon0");');
          $("#icon0").attr('src','/web/bundles/framework/images/thumbs-up.png');
          $("#icon1").attr('src','/web/bundles/framework/images/thumbs-down-silhouette.png');
        }
        else{
          like = 0;
          dislike = 0;
          nbDislikes--;
          //$("button[name='dislikes']").removeAttr("disabled");
          $("#icon1").attr('onmouseout','resetIconDown("icon1");');
          //$("#icon1").attr('onmouseover','changeIconDown("icon1");');
          $("#icon1").attr('src','/web/bundles/framework/images/thumb-down.png');
        }

        $("button[name='likes'] #content").html(nbLikes);
        $("button[name='dislikes'] #content").html(nbDislikes);
        $.post("/web/bundles/framework/php/likes.php", {dislike : dislike, like : like, idVideo : idVideo});
    }