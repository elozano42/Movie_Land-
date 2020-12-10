<?php
include(__DIR__ . "./header.php");
?>

<div class="container-fluid">
    <form>
        <div class="mb-3" id="listmovie">
            <label for="search" class="form-label">Nom du film</label>
            <input type="text" class="form-control" id="search" placeholder="rechercher un film...">
        </div>
        <button href="" type="submit" class="btn btn-primary">Rechercher</button>

        <!--
        echo '<div id="btnSearch" style="padding: 3px 10px; border-radius: 4px; margin: auto; background-color: #009688; width: fit-content; color: #ffff;">Rechercher</div>';
        echo '<div id="listmovie">'; -->

    </form>
</div>

<?php
include(__DIR__ . "./footer.php");
?>