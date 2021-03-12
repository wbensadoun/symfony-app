Installation de symfony création de projet commande a suivre 
- composer create-project symfony/skeleton + nom du dossier
-symfony server:start démarre symfony
- Web server listening
      The Web server is using PHP CGI 7.2.10
      https://127.0.0.1:8000 
-composer require --dev symfony/profiler-pack


Envoie des projets sur Git
- New référenciel
-  pousser un référentiel existant depuis la ligne de commande
git remote add origin https://github.com/wbensadoun/symfony-app.git
 DOC GIT A PLACER ICI

créé une première page : 
-créer une route qui lie une URL à un contrôleur (fonction php qui 
reçoit une requête en paramètre et renvoie une page)

créé un controleur

-Aller sur route.yaml et appeller la méthode

-un controle recoit un objet Request et reourne un objet Response : page html par exemple
télécharger les composant httpfondation avec la commande :
composer require symfony/http-foundation 

-Créé un nouveau fichier dans src >> controller >> NomDuFichier (il doit être le même que sur le fichier route.yaml
-
