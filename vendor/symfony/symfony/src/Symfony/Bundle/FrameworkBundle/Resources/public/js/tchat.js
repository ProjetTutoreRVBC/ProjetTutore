/* version JSON */

window.addEventListener("load",function(){
	document
		.getElementById("form")
		.addEventListener(
			"submit",
			function(ev){
				ev.preventDefault();
				var message = {"message":this.message.value};
				var ajax=new XMLHttpRequest();
				var t=Date.now();
				var that=this;
				ajax.open("POST","/home/web/bundles/framework/php/serveur.php");
				ajax.setRequestHeader("Content-type", "application/json");
				ajax.send(JSON.stringify(message));
				document.getElementById('spinner').style.visibility = "visible";
				ajax.onreadystatechange=function(){
					if (this.readyState == this.DONE	&&	this.status == 200){
						var li = document.createElement("li");
						var ul = document.getElementById("listeMessages");
						ul.insertBefore(li,ul.firstChild);
						li.innerHTML=JSON.parse(this.responseText).message + " <span class='tag-box -success'>" +(Date.now()-t)+" ms</span>";
						document.getElementById('spinner').style.visibility = "hidden";
						that.reset();
					}
				}
			})
})