<?php
include(__DIR__ . "./header.php");
?>

<center>
<form action="?page=newAd" method="post">
    
    <div class="form-group">
        <label class="text" for="title">Titre</label>
        <input type="text" name="title" class="form-control" id="title" required>
    </div>
    <div class="form-group">
        <label class="text" for="dsc">Année</label>
        <textarea name="years" class="form-control" id="years" rows="3"></textarea>
    </div>
    <div class="form-group">
        <label class="text" for="img">Image</label>
        <input type="text" step="0.1" name="url" class="form-control" id="img">
    </div>

    <script>
function myfun() {
    var x1=document.getElementById('title').value; 
    var x2=document.getElementById('years').value; 
    var x3=document.getElementById('img').value; 
    alert("votre film a bien été ajoutée !"); 
}
    </script>

    <!--<input type="button" value="Submit" onclick="myfun()">-->
    <button type="submit" id="submit" class="btn" value="Submit" onclick="myfun()">Enregistrer</button>
</form>
</center>

<?php
include(__DIR__ . "./footer.php");
?>