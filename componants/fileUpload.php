<!-- BOUTON A PERSONALISER -->
<button id="fileUploadBtn" type="button" class="btn btn-warning">Ajouter un fichier</button>

<!-- 
    MODELE POUR SELECTION D'UN FICHIER
-->

<section id="fileUpload">
    <form action="" method="POST" name="fileUploadContainer" id="fileUploadContainer">
        <label for="fileInput">
            <div>
                <i class="bi bi-cloud-arrow-up-fill"></i>
            </div>
            <div>
                Cliquez sur le carré bleu afin d'ajouter un fichier.
                <input type="file" name="tpImg" id="fileInput">
            </div>
        </label>
        <button id="selectImgSubmit" type="submit">Submit</button>
    </form>
</section>