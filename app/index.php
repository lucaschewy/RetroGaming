<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- FACEBOOK OPEN GRAPH -->
    <meta property="og:url"                content="http://www.nytimes.com/2015/02/19/arts/international/when-great-minds-dont-think-alike.html" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="When Great Minds Don’t Think Alike" />
    <meta property="og:description"        content="How much does culture influence creative thinking?" />
    <meta property="og:image"              content="http://static01.nyt.com/images/2015/02/19/arts/international/19iht-btnumbers19A/19iht-btnumbers19A-facebookJumbo-v2.jpg" />
    <!-- TITLE -->
    <title>RetroGaming</title>
    <!-- FONTAWESOME -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="dist/assets/css/style.css">
</head>
<body>
  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.2"></script>
  <section class="splash">
    <div class="header">
      <div class="logo">
        <img class="esd" src="src/img/esd.png" alt="">      
      </div>
      <div class="links">
        <a href="index.php">Accueil</a>
        <a href="team.php">La Team</a>
      </div>
    </div>
    <div class="titre">
      <div class="table">
          <?php
            if(isset($_GET['message'])){
            $text = $_GET['message'];
            echo "<div class='message'><img src='src/img/error.gif'>" . $text . '</div>';
            }
          ?>
        <div class="price"></div>
        <div class="classement">
          <?php
            // Connect to database
            require 'connect.php';

            $q = $db->prepare("SELECT * FROM votes ORDER BY nb_vote DESC");
            $q->bindParam(":game", $_GET["game"]);
            $q->execute();

            while($donnees = $q->fetch(PDO::FETCH_ASSOC)){           
              echo '<div class="jeux">' . $donnees['game'] . ' ' . $donnees['nb_vote'] . '</div>';
            }
          ?>
        </div>
      </div>
      <form method="post" action="commentaires.php" class="formulaire">
        <select name="choix">
          <option value="">Jeux</option>
          <option value="stargzing">Stargazing</option>
          <option value="pain">Pain</option>
          <option value="tempestGame">Tempest Game</option>
          <option value="topDown">TopDown</option>
          <option value="fleursDuMal">Fleurs du mal</option>
          <option value="schoolFighter">School Fighter</option>
          <option value="zombiRush">Zombirush</option>
          <option value="macron">Macron</option>
          <option value="odysseePlanete">odysseePlanete</option>
          <option value="spellsign">Spellsign</option>
          <option value="swapkat">Swapkat</option>
        </select>
        <input type="text" name="pseudo" value="pseudo"/>
        <textarea name="message" value="message" rows="8" cols="45" placeholder="Votre message ici."></textarea>
        <input type="submit">
      </form>
    </div>
    <!-- Your share button code -->
    <div class="fb-share-button" data-href="https://ecole-du-digital.com/" data-layout="button" data-size="large">
      <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fecole-du-digital.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Partager</a>
    </div> 
    <div class="next">
        <a><i class="fas fa-angle-down"></i></a>
    </div>
  </section>
  <section class="games">
    <div class="bd-example">
      <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <div class="test">
          <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span aria-hidden="true"><i class="fas fa-angle-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span aria-hidden="true"><i class="fas fa-angle-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"><div class="thumbnail thumb-0"></div></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"><div class="thumbnail thumb-1"></div></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"><div class="thumbnail thumb-2"></div></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"><div class="thumbnail thumb-3"></div></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="4"><div class="thumbnail thumb-4"></div></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="5"><div class="thumbnail thumb-5"></div></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="6"><div class="thumbnail thumb-6"></div></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="7"><div class="thumbnail thumb-7"></div></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="8"><div class="thumbnail thumb-8"></div></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="9"><div class="thumbnail thumb-9"></div></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="10"><div class="thumbnail thumb-10"></div></li>
          </ol>
        </div> 
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="sombre"></div>
            <img src="src/img/pain.gif" class="d-block w-100" alt="...">
            <div class="content-slide">
              <div class="img-0"></div>
              <div class="txt blanc">
                <h1 class="titre">Pain</h1>
                <p class="description">
                Pain est un jeu permettant aux joueurs de s’immerger dans un monde apocalyptique plongé dans de multiples guerres, toutes plus douleureuses les unes que les autres. Le personnage principal de ce jeu, au fil de sa progression fera la connaissance de ces conflits, sera plongé dans la définition du desespoir et essaiera de surmonter cela.</p>
                </p>
                <a href="increase_vote.php?game=pain">
                  <i class="fas fa-star"></i>
                </a>
                <div class="commentaires">
                  <h4>Les commentaires</h4>
                  <hr width="100%" color="white">
                  <?php
                  $q = $db->prepare("SELECT * FROM commentaires");
                  $q->bindParam(":game", $_GET["game"]);
                  $q->execute();
      
                  while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
                      if($donnees['game'] == 'pain'){
                        echo '<strong>' . $donnees['pseudo'] . ': ' . '</strong>' . $donnees['commentaire'];
                      }
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="sombre"></div>
            <img src="src/img/star.gif" class="d-block w-100" alt="...">
              <div class="content-slide">
                <div class="img-1"></div>
                <div class="txt blanc">
                  <h1 class="titre">STARGAZING</h1>
                  <p class="description">
                  STARGAZING est un platformer 2d en side scroll. Vous jouez un astronaute dont la planète natale à été détruite,laissant ce dernier perdu dans le fin fond du cosmos, seul avec son vaisseau. Le but est de parcourir les étoiles à travers l’espace afin de trouver une planète habitable.</p>
                  <a href="increase_vote.php?game=stargazing">
                    <i class="fas fa-star"></i>
                  </a>
                  <div class="commentaires">
                    <h4>Les commentaires</h4>
                    <hr width="100%" color="white">
                    <?php
                    $q = $db->prepare("SELECT * FROM commentaires");
                    $q->bindParam(":game", $_GET["game"]);
                    $q->execute();
        
                    while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
                        if($donnees['game'] == 'stargazing'){
                          echo '<strong>' . $donnees['pseudo'] . ': ' . '</strong>' . $donnees['commentaire'];
                        }
                    }
                    ?>
                </div>
                </div>
              </div>
            </div>
          <div class="carousel-item">
            <div class="sombre"></div>
            <img src="src/img/fantom.gif" class="d-block w-100" alt="...">
              <div class="content-slide">
                <div class="img-2"></div>
                <div class="txt blanc">
                  <h1 class="titre">Top Down</h1>
                  <p class="description">
                  Le but est de faire le meilleur score en finissant le jeu. Le joueur commence dans une salle et peut se déplacer de salle en salle afin de récupérer les 3 clés permettant d’ouvrir la porte finale du jeu et remporter la partie. Les golds et le timer constituent le score. Des niveaux bonus seront dissimulés sous forme de jeu de plateforme contemplatif, ils n'impacteront pas le score. Le score sera disponible en ligne afin d’apporter une compétition arcade.</p>
                  <a href="increase_vote.php?game=topDown">
                    <i class="fas fa-star"></i>
                  </a>
                  <div class="commentaires">
                    <h4>Les commentaires</h4>
                    <hr width="100%" color="white">
                    <?php
                    $q = $db->prepare("SELECT * FROM commentaires");
                    $q->bindParam(":game", $_GET["game"]);
                    $q->execute();
        
                    while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
                        if($donnees['game'] == 'topDown'){
                          echo '<strong>' . $donnees['pseudo'] . ': ' . '</strong>' . $donnees['commentaire'];
                        }
                    }
                    ?>
                </div>
                </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="sombre"></div>
            <img src="src/img/fleurspluie.gif" class="d-block w-100" alt="...">
              <div class="content-slide">
                <div class="img-3"></div>
                <div class="txt blanc">
                  <h1 class="titre">Les Fleurs du Mal</h1>
                  <p class="description">
                  Vous incarnez une fleur bienveillante, évoluant au coeur d'un monde intriguant en espace fermé. Vous partirez à la découverte d'un seul et même niveau, ce dernier se déclinant sous différents thèmes et ambiances, plus immersives les une que les autres.</p>
                  <a href="increase_vote.php?game=fleursDuMal">
                    <i class="fas fa-star"></i>
                  </a>
                  <div class="commentaires">
                    <h4>Les commentaires</h4>
                    <hr width="100%" color="white">
                    <?php
                    $q = $db->prepare("SELECT * FROM commentaires");
                    $q->bindParam(":game", $_GET["game"]);
                    $q->execute();
        
                    while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
                        if($donnees['game'] == 'fleursDuMal'){
                          echo '<strong>' . $donnees['pseudo'] . ': ' . '</strong>' . $donnees['commentaire'];
                        }
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
          <div class="sombre"></div>
            <img src="src/img/combat.gif" class="d-block w-100" alt="...">
              <div class="content-slide">
                <div class="img-4"></div>
                <div class="txt blanc">
                  <h1 class="titre">School Fighter</h1>
                  <p class="description">
                  Retrouvez vous dans l’esprit d’un étudiant de l’École Supérieur du Digitale. Votre but ultime est d’obtenir votre diplôme, mais, malheureusement pour vous, vous serez confronté à d'immenses obstacles. Vous allez devoir combattre vos démons (peur, doute, frustration), représentés allégoriquement par des personnages aux multiples facettes. A chaque fin de niveau, vous devrez battre différents boss, avant d'arriver finalement au boss final qui détient votre diplôme.</p>
                  <a href="increase_vote.php?game=schoolFighter">
                    <i class="fas fa-star"></i>
                  </a>
                  <div class="commentaires">
                    <h4>Les commentaires</h4>
                    <hr width="100%" color="white">
                    <?php
                    $q = $db->prepare("SELECT * FROM commentaires");
                    $q->bindParam(":game", $_GET["game"]);
                    $q->execute();
        
                    while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
                        if($donnees['game'] == 'schoolFighter'){
                          echo '<strong>' . $donnees['pseudo'] . ': ' . '</strong>' . $donnees['commentaire'];
                        }
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="sombre"></div>
            <img src="src/img/tempest.gif" class="d-block w-100" alt="...">
              <div class="content-slide">
                <div class="img-5"></div>
                <div class="txt blanc">
                  <h1 class="titre">Tempest Game</h1>
                  <p class="description">
                  Kakeo, jeune informaticien et concepteur de jeu, travail dans une entreprise coréenne depuis plus de 10 ans. Il était sur la création d’un jeu vidéo qu’il aime particulièrement, « Tempest Game » ! Comme tous jeux avant sa sortie, il devait réaliser un dernier rush pour vérifier qu’il n’y ait pas de bugs. Il dormi donc comme à son habitude au travail pour pouvoir avoir le temps de le finir. Après de longues heures de travail, il partit enfin dormir ! Le lendemain matin ne se passa pas comme prévu car il ne se trouva pas dans son lit au bureau mais dans une grotte sombre et où il avait à la main un arc ! Il comprit alors qu’il n’était plus en Coréen mais dans le jeu qu’il avait développé !</p>
                  <a href="increase_vote.php?game=tempestGame">
                    <i class="fas fa-star"></i>
                  </a>
                  <div class="commentaires">
                    <h4>Les commentaires</h4>
                    <hr width="100%" color="white">
                    <?php
                    $q = $db->prepare("SELECT * FROM commentaires");
                    $q->bindParam(":game", $_GET["game"]);
                    $q->execute();
        
                    while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
                        if($donnees['game'] == 'tempestGame'){
                          echo '<strong>' . $donnees['pseudo'] . ': ' . '</strong>' . $donnees['commentaire'];
                        }
                    }
                    ?>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="sombre"></div>
            <img src="src/img/spell.gif" class="d-block w-100" alt="...">
              <div class="content-slide">
                <div class="img-6"></div>
                <div class="txt blanc">
                  <h1 class="titre">Spellsign</h1>
                  <p class="description">
                  Un monde où la magie existe. Autrefois, les magiciens pouvaient extraire la mana brute de leur environnement, et la transformer en magie élémentaire pour réaliser d'incroyables sorts. Mais ils sont allés trop loin ; suite à une expérience ratée, la mana ambiante prend maintenant la forme de monstres. Ayant perdu l'accès à la mana sur laquelle leur civilisation était fondée, les magiciens se sont fait massacrer par les monstres.
                  </p>
                  <a href="increase_vote.php?game=spellsign">
                    <i class="fas fa-star"></i>
                  </a>
                  <div class="commentaires">
                    <h4>Les commentaires</h4>
                    <hr width="100%" color="white">
                    <?php
                    $q = $db->prepare("SELECT * FROM commentaires");
                    $q->bindParam(":game", $_GET["game"]);
                    $q->execute();
        
                    while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
                        if($donnees['game'] == 'spellsign'){
                          echo '<strong>' . $donnees['pseudo'] . ': ' . '</strong>' . $donnees['commentaire'];
                        }
                    }
                    ?>
                </div>
                </div>
              </div>
            </div>
          <div class="carousel-item">
            <div class="sombre"></div>
            <img src="src/img/planete.gif" class="d-block w-100" alt="...">
              <div class="content-slide">
                <div class="img-7"></div>
                <div class="txt blanc">
                  <h1 class="titre">L'odyssée des planètes</h1>
                  <p class="description">
                    Sauver et récupérer les pouvoirs des animaux pour nous aider à suivre la quête
                  </p>
                  <a href="increase_vote.php?game=odysseePlanete">
                    <i class="fas fa-star"></i>
                  </a>
                  <div class="commentaires">
                    <h4>Les commentaires</h4>
                    <hr width="100%" color="white">
                    <?php
                    $q = $db->prepare("SELECT * FROM commentaires");
                    $q->bindParam(":game", $_GET["game"]);
                    $q->execute();
        
                    while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
                        if($donnees['game'] == 'odysseePlanete'){
                          echo '<strong>' . $donnees['pseudo'] . ': ' . '</strong>' . $donnees['commentaire'];
                        }
                    }
                    ?>
                </div>
                </div>
              </div>
            </div>
          <div class="carousel-item">
            <div class="sombre"></div>
            <img src="src/img/fr.gif" class="d-block w-100" alt="...">
              <div class="content-slide">
                <div class="img-8"></div>
                <div class="txt blanc">
                  <h1 class="titre">Macronie the game</h1>
                  <p class="description">
                  Le joueur incarnera un jeune politicien ambitieux souhaitant entrer dans le gouvernement d’Emmanuel Macron, à un poste très haut placé. Ce dernier lui confie alors la mission, presque impossible, de régler dans un premier temps la crise des gilets jaunes s’il veut un poste. C’est ainsi que le joueur partira en croisade à travers la France pour mettre un terme à la révolte des gilets jaunes.
                  </p>
                  <a href="increase_vote.php?game=macron">
                    <i class="fas fa-star"></i>
                  </a>
                  <div class="commentaires">
                    <h4>Les commentaires</h4>
                    <hr width="100%" color="white">
                    <?php
                    $q = $db->prepare("SELECT * FROM commentaires");
                    $q->bindParam(":game", $_GET["game"]);
                    $q->execute();
        
                    while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
                        if($donnees['game'] == 'macron'){
                          echo '<strong>' . $donnees['pseudo'] . ': ' . '</strong>' . $donnees['commentaire'];
                        }
                    }
                    ?>
                </div>
                </div>
              </div>
            </div>
          <div class="carousel-item">
            <div class="sombre"></div>
            <img src="src/img/zomb.gif" class="d-block w-100" alt="...">
              <div class="content-slide">
                <div class="img-9"></div>
                <div class="txt blanc">
                  <h1 class="titre">Zombie Rush</h1>
                  <p class="description">
                  Zombie Rush est un jeu d’action se voulant être un défouloir et un challenge réaliste. Le but du jeu étant de survivre le plus longtemps possible en affrontant des vagues d’ennemis sur une map fermée, parsemée de pièges et disposant de différents décors
                  </p>
                  <a href="increase_vote.php?game=zombiRush">
                    <i class="fas fa-star"></i>
                  </a>
                  <div class="commentaires">
                    <h4>Les commentaires</h4>
                    <hr width="100%" color="white">
                    <?php
                    $q = $db->prepare("SELECT * FROM commentaires");
                    $q->bindParam(":game", $_GET["game"]);
                    $q->execute();
        
                    while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
                        if($donnees['game'] == 'zombiRush'){
                          echo '<strong>' . $donnees['pseudo'] . ': ' . '</strong>' . $donnees['commentaire'];
                        }
                    }
                    ?>
                </div>
                </div>
              </div>
            </div>
          <div class="carousel-item">
            <div class="sombre"></div>
            <img src="src/img/catrain.gif" class="d-block w-100" alt="...">
              <div class="content-slide">
                <div class="img-10"></div>
                <div class="txt blanc">
                  <h1 class="titre">The Swapkat</h1>
                  <p class="description">
                  L'objectif principal est d'atteindre un score assez élevé pour passer au niveau suivant. Selon le niveau, les exigences changent et sont indiquées sur l'écran.
                  </p>
                  <a href="increase_vote.php?game=swapkat">
                    <i class="fas fa-star"></i>
                  </a>
                  <div class="commentaires">
                    <h4>Les commentaires</h4>
                    <hr width="100%" color="white">
                    <?php
                    $q = $db->prepare("SELECT * FROM commentaires");
                    $q->bindParam(":game", $_GET["game"]);
                    $q->execute();
        
                    while($donnees = $q->fetch(PDO::FETCH_ASSOC)){
                        if($donnees['game'] == 'swapkat'){
                            echo '<strong>' . $donnees['pseudo'] . ': ' . '</strong>' . $donnees['commentaire'];
                        }
                    }
                    ?>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="logo">
        <img class="esd" src="src/img/esd.png" alt="">
      </div>
      <div class="mentions">COPYRIGHT @ 2019 LUCAS CHEVALIER - Tout droits réservés</div>
    </div>
  </footer>

  <!-- JS -->
  <script src="src/assets/js/script.js"></script>

  <!-- BOOTSTRAP -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>