<!-- https://coolors.co/131350-0f6de1-dfe5ec-d5759e-1ebff1-8a4282-d12a56 
    https://coolors.co/131350-48392a-f2f3d9-6ccff6-b8336a
-->
    <main>
        <div class="homeContent">
            <div class="fullProfilContent">
                <div class="profilContent pCHeader">
                    <div class="wallpaper"></div>
                    <div class="profilePhoto shadowStyle1"></div>
                </div>
                <div class="profilContent textContent pCText">
                    <h1>Dussart Henri</h1>
                    <p> Etudiant âgé de <?php echo date('Y')-2003; ?> ans et actuellement en deuxième année de BTS SIO (Services Informatiques aux Organisations), j'ai choisi l'option SLAM (Solutions Logicielles et Applications Métiers) afin de devenir développeur.</p>
                    <p> J'ai vécu une grande partie de ma jeunesse à Arras avant de déménager à Valenciennes où j'ai eu l'occasion de découvrir une passion pour les échecs et les ordinateurs. Je suis ensuite revenu à Arras où j'ai effectué un BAC Littéraire  
                    <p>Je suis depuis longtemps passionné d'Histoire, de jeux vidéo et d'informatique, c'est pour cela que j'ai choisi de poursuivre mes études dans ce domaine. Après mon BAC Littéraire mais j’ai choisi de me diriger vers ce BTS pour pouvoir faire ce qui me plait aujourd'hui: de l'informatique.</p>
                    <p>Je suis quelqu'un de passionné et curieux : Outre l'informatique, j'aime l'Histoire, les Echecs, le Handball, la musique ainsi que les jeux vidéos, mon préféré étant le jeu DESTINY 2 développé par Bungie Studio.</p>
                </div>
            </div>
            <div class="statueContent textContent">
                <h1>
                    AUJOURD'HUI
                </h1>
                <p>Actuellement en fin de 2nde année de BTS SIO, j'ai effectué mon dernier stage du 9 janvier au 11 février 2023 chez ADVISER, une société de conseils en nouvelles technologies. Je prépare aujourd'hui mes examens finaux car je souhaite poursuivre mes études dans le domaine de l'informatique pour plus tard lancer ma propre entreprise.</p>
            </div>
            <div id="etude" class="formationContent textContent fCWidth" >
                <div class="btsLogoContent">
                    <img  src="src/img/png/logo-btssio.png" alt="" class="btsLogo">
                </div>
                <p>Le BTS SIO où Services informatiques aux Organisations est un diplôme reconnu par l’Etat de niveau Bac +2 pouvant être étudié au Pôle Enseignement Supérieur Baudimont à Arras proposant deux spécialités bien distinctes : le BTS SIO SISR et le BTS SIO SLAM.</p>
                <p>-> L'option  SLAM est une formation proposant aux étudiants de se spécialiser dans le dévelloppement web et d'application.</p>
                <p>-> L'option  SISR est une formation proposant aux étudiants de se spécialiser dans le réseau.</p>
                <p>le BTS offre en plus de divers enseignements théoriques, la possibilité d'effectuer deux stages en entreprise en première année et en deuxième année d’études afin de découvrir le monde de l'entreprise en lien avec l'informatique tout en obtenant de nouvelles connaissances. </p>
                <p>En plus des matières en lien avec l’ingénierie informatique, la formation propose également divers enseignements comme de culture générale, de l’anglais, des mathématiques appliquées à l’informatique, ainsi que de la culture économique, juridique et managériale.</p>        
            </div>
            <div>
                <div class="fullContactContent textContent" id="contact">
                    <h1 >CONTACT</h1>
                    <div class="contactContent">
                        <div class="contactContantText">
                            <h2>Mes contacts :</h2>
                            <p>Je suis quelqu'un de sociable qui n'hésite pas à aller au contact des autres alors venez me parler</p>
                            <div class="contactContentInfo">
                                <div class="contactInfo">
                                    <a href="tel:+33646721496">
                                        <div class="Qbert reverseBackColor"><div class="icon contact phone"></div></div>
                                    </a>
                                    <p>06 46 72 14 96</p>
                                </div>
                                <div class="contactInfo">
                                    <a href="mailto:henrioc03@gmail.com">
                                        <div class="Qbert reverseBackColor"><div class="icon contact gmail"></div></div>
                                    </a>
                                    <p>henrioc03@gmail.com</p>
                                </div>
                                <div class="contactInfo">
                                    <a href="#map"><div class="Qbert reverseBackColor" id="#closeMap"><div class="icon contact map"></div></div></a>
                                    <p>21 rue du 19 mars<br>62223 ST Nicolas</p>
                                </div>
                            </div>
                        </div>
                        <div class="contactContantCard">
                            <form action="#contact" method="post" class="contactCard reverseBackColor" >
                                <div class="cCInput">
                                    <input type="text" name="" id="" placeholder="Nom">
                                </div>
                                <div class="cCInput">
                                    <input type="email" name="" id="" placeholder="Email">
                                </div>
                                <div class="cCInput ccItextA">
                                    <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
                                </div>
                                <div class="cCInput">
                                    <button type="submit" onclick="alert('Fonctionnalité non disponible')">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="map" class="overlay">
            <div class="popup map">
                <h2>Google Maps</h2>
                <a class="close" href="#closeMap">&times;</a>
                <div class="content map">
                <iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=21+Rue+du+19+Mars,+62223+Saint-Nicolas,+France&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"></iframe>
                </div>
            </div>
        </div>
    </main>

    