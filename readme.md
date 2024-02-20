Pour l'exécution du projet en local

1) Récupération des fichiers :
   - Télécharger l'ensemble des fichiers sur votre ordinateur.

2) Installation d'un serveur :
   - Télécharger le serveur WAMP64 sur https://wampserver.aviatechno.net/
   - Exécuter "wampserver3.3.2_x64.exe"
   - Installer l'application dans le répertoire C:\ de votre ordinateur (et non pas dans C:\Program Files)

3) Configuration de l'environnement local :
    - Déplacer les fichiers du projet dans le dossier C:\wamp64\www, dans un dossier nommé "garagevparrot"
    - Modifier le fichier "httpd-vhosts.conf" situé dans C:\wamp64\bin\apache\apache2.4.58\conf\extra et ajouter les lignes suivantes :
        "<VirtualHost *:80>
            ServerName garagevparrot.local
            DocumentRoot "c:\wamp64\www\garagevparrot"
        </VirtualHost>"
    - Modifier le fichier "hosts" situé dans Window au répertoire C:\Windows\System32\drivers\etc et ajouter la ligne suivante :
        "127.0.0.1 garagevparrot.local" après "127.0.0.1 localhost ::1 localhost"

4) Lancement du site en local :
    - Lancer WAMP64 et vérifier que tous les services sont lancés.
    - Ouvrir le navigateur et écrire dans la barre d'adresse : garagevparrot.local
    - Le site apparaît dans votre navigateur.


Pour l'ajout d'un administrateur

1) Ouvrir l'invite de commande MYSQL
    - Cliquer sur l'icône Wamp64 
    - Allez sur MYSQL > Ouvrir l'invite de commande de MYSQL

2) Se connecter à la base de données
    - Ecrire dans l'invite de commande :
        "mysql -h alwaysdata.netmysql-pinaud.alwaysdata.net -u pinaud" 
        puis ENTRER
    - Le mot de passe est demandé, l'écrire puis ENTRER
    - Ecrire ensuite : 
        "INSERT INTO administrator (email_admin, password_admin)
        VALUES (**email choisi**, **mot de passe choisi**);"
        puis ENTRER

3) Le nouvel administrateur est créé dans la base de données, vous pouvez ainsi vous connecter via la page http://garagevparrot.local/login.php 
 
 



        

