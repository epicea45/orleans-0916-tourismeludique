<div class="sectionForm" id="ancreForm">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs leftSide">
            <div class="row">
                <div class="col-lg-6">
                    <img src="image/logolabodetoure.png" class="img-responsive logolabo" alt="logo Le Lab'O">
                </div>
                <div class="col-lg-6">
                    <p class="adresse">
                        Le Lab'O<br/>
                        1 Avenue du champs de Mars<br/>
                        Orléans
                    </p>
                </div>
            </div>
            <iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://www.openstreetmap.org/export/embed.html?bbox=1.8892514705657961%2C47.89133419118289%2C1.8968582153320315%2C47.8957799548847&amp;layer=mapnik&amp;marker=47.893557120745015%2C1.8930602073669434" style="border: 1px solid black"></iframe><br/>
            <small><a  class="legendecarte" href="http://www.openstreetmap.org/?mlat=47.89356&amp;mlon=1.89306#map=17/47.89356/1.89305">View Larger Map</a></small>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
            <form method="post" action="formPost.php">
                <div class="form-group">
                    <input type="Nom" class="form-control input-lg" id="Nom" placeholder="Nom *" aria-label="Votre nom"
                           required><br/>
                </div>
                <div class="form-group">
                    <input type="Prenom" class="form-control input-lg" id="Prenom" placeholder="Prénom"
                           aria-label="Votre prénom" required><br/>
                </div>
                <div class="form-group">
                    <input type="Entreprise" class="form-control input-lg" id="Entreprise" placeholder="Entreprise, Société, Organisme..." aria-label="Votre entreprise, société, organisme"><br/>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control input-lg" id="Email" placeholder="Email*"
                           aria-label="Votre email" required><br/>
                </div>
                <div class="form-group">
                    <textarea name="Message" class="form-control input-lg" placeholder="Message*" aria-label="Votre
                    message" rows="10" required></textarea><br/>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-warning"><p class="catForm">Envoyer</p></button>
                </div>
            </form>
        </div>
    </div>
</div>
