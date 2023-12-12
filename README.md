# ecfgaragetoulouse

Pour exécuter l'application en localhost : 

- Avoir XAMPP d'installé
- Démarrez Apache et MySQL
- Cliquer sur "admin" dans la partie "MySQL"
- Dans la section "importer" importez le fichier create_table.sql et insert_into.sql
- Extraire le zip du projet dans le dossier que vous voulez
- Le projet utilise la réécriture d'URL, pour ce faire vous devrez créer un virtual host (pour Windows, si vous avez un Mac ou Linux regardez sur internet)
- Allez dans C:\xampp\apache\conf\extra
- Ouvrez le fichier httpd-vhosts
- Rajoutez ces lignes à la fin du document :

<VirtualHost *:80>
  ServerName garagetoulouseparrot.localhost
  DocumentRoot "lien_du_projet"
  <Directory "lien_du_projet">
      AllowOverride All
      Require all granted
  </Directory>
</VirtualHost>

- Remplacez "lien_du_projet" par le lien où vous avez mit le dossier du projet, ATTENTION il doit cibler le dossier \www du projet. Exemple : C:\Users\teosa\Desktop\ECOLE\ecf\app\www
- Allez dans C:\Windows\System32\drivers\etc
- Ouvrez le fichier hosts avec un éditeur de texte
- Insérez cette ligne à la fin du document

  127.0.0.1       garagetoulouseparrot.localhost

- Redémarrez XAMPP, Apache et MySQL
- Vous pouvez accéder au projet en tapant dans votre navigateur l'adresse suivante : garagetoulouseparrot.localhost

IDENTIFIANTS DE L'ADMINISTRATEUR :
- E-mail : garagevparrot@gmail.com
- Mot de passe : GarageVPARROT84!

- Si vous souhaitez créer un autre administrateur, il faut insérer un nouvel administrateur dans MySQL. Pour ce faire, aidez vous de REPL.IT avec PHP WEB SERVER pour générer les données adéquates :
- Pour l'ID de l'administrateur, faites un "echo uniqid("", true);" dans REPL.IT et récupérez la chaîne de caractères puis insérez la dans la colonne ID
- Pour l'E-mail, mettez ce que vous voulez dans la colonne email
- Pour le mot de passe, faites un "echo password_hash("votre_mot_de_passe", PASSWORD_BCRYPT);" et récupérez la chaîne de caractères puis insérez la dans la colonne password
- Pour la colonne "manages" mettez la valeur 1

  
