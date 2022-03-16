<div class="container formPost">
    <form method="POST" action="#" enctype="multipart/form-data" >
        <img src="assets/img/logoCFPT.png" class="imgProfilPost"/>
        <input type="text" class="contenuPost" name="contenuPost" placeholder="Write something..."/>
        <div class="containerAvecIcon">
        
            <button type="file" class="btnAvecIcon btn" name="btnImage">
                <i class="glyphicon glyphicon-user"></i>
            </button>
            <input type="file" multiple name="userfile[]" id="userfile" class="glyphicon glyphicon-picture btnAvecIcon" accept="image/png, image/jpeg*"/>
            <input type="file" multiple name="userfile[]" id="userfile" class="glyphicon glyphicon-music btnAvecIcon" accept=".mp3*">
            <input type="file" multiple name="userfile[]" id="userfile" class="glyphicon glyphicon-facetime-video btnAvecIcon" accept="video/mp4"/>
        </div>
        <div class="containerBtnPost">
            <button type="submit" class="btnPublish btn" name="btnPublish">
                Publish
            </button>
        </div>
        <?php
        print_r($valeur);
        
        ?>
        

    </form>
</div>
