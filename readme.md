Voici les étapes à suivre pour exécuter une application en local avec MAMP :

	1-Télécharger et installer MAMP sur votre ordinateur en fonction de votre système d'exploitation depuis le site officiel : https://www.mamp.info/en/downloads/.

	2-Une fois que MAMP est installé, ouvrez l'application et cliquez sur le bouton "Démarrer les serveurs" pour lancer les serveurs Apache et MySQL.

	3-Placez votre application dans le dossier htdocs de MAMP. 

	4-Ouvrez Mamp cliquer sur Open webstart page. Si tout est configuré correctement, vous devriez voir la page d'accueil de MAMP.

	5-Cliquez sur  Tools -> phpMyAdmin -> le serveur s'ouvre

	6- Cliquez sur "Nouvelle base de données" dans le panneau de gauche pour créer une nouvelle base de données pour votre application. Donnez un nom à votre base de données.

	7-Vous pouvez importer votre base de données existante en cliquant sur "Importer" dans le panneau de gauche. Sélectionnez le fichier sql fournis cliquez sur le bouton "Exécuter" pour importer la base de données.

	8-En inserent se fichier un compte administrateur est crée email: ... mdp: ppm.

	8- Sur la page d'acceuil Mamp vous avez les differents élement de connexion a la base de donnée, allez dans le fichier config2.php et modifier cette ligne avec les données fournit <?php $host = 'localhost'; $username = 'root'; $password = 'root'; $dbname = 'nom de la table'; $connect = mysqli_connect($host, $username, $password, $dbname);

    9- Retours sur la page d'acceuil manp, cliquez sur My Website, votre nom d'application s'affiche, cliquez dessus pour l'executer en local

	10-Vous pouvez maintenant utiliser votre application en local avec MAMP.
	
	12-Vous pouvez maintenant utiliser phpMyAdmin pour gérer votre base de données en local avec MAMP.




