
<form action="upload.php" method="post" enctype="multipart/form-data">
   <fieldset>
      <div class="area">
         <label for="path">Select file:</label>
            <input class="upload" type="file" name="video"></input>
            <span><?php echo $error; ?></span><br />
      </div>
   </fieldset>

   <input type="submit" name="insert" value="upload"></input>
</form>