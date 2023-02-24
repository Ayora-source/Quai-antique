Voici les étapes à suivre pour exécuter une application en local avec MAMP :

	1-Télécharger et installer MAMP sur votre ordinateur en fonction de votre système d'exploitation depuis le site officiel : https://www.mamp.info/en/downloads/.

	2-Une fois que MAMP est installé, ouvrez l'application et cliquez sur le bouton "Démarrer les serveurs" pour lancer les serveurs Apache et MySQL.

	3-Placez votre application dans le dossier htdocs de MAMP. 

	4-Ouvrez Mamp cliquer sur Open webstart page. Si tout est configuré correctement, vous devriez voir la page d'accueil de MAMP.

	5-Cliqez sur My Website, votre nom d'application s'affiche, cliquez dessus pour l'executer en local

	6-Vous pouvez maintenant utiliser votre application en local avec MAMP.

	7- A fin de mettre en lien la base de donnée avec votre application vous pouvez utiliser phpMyAdmin, un outil de gestion de bases de données qui est inclus avec MAMP. Voici les étapes à suivre pour utiliser phpMyAdmin avec MAMP :

	8-Assurez-vous que les serveurs Apache et MySQL de MAMP sont en cours d'exécution.

	9-Ouvrez Mamp cliquer sur Open webstart page. Si tout est configuré correctement, vous devriez voir la page d'accueil de MAMP. 

	10-Cliquez sur  Tools -> phpMyAdmin -> le serveur s'ouvre

	11- Cliquez sur "Nouvelle base de données" dans le panneau de gauche pour créer une nouvelle base de données pour votre application. Donnez un nom à votre base de données et choisissez l'encodage de caractères approprié.

	11-2-Si votre application nécessite des tables dans la base de données, cliquez sur le nom de la base de données que vous venez de créer, puis cliquez sur "Nouvelle table" pour créer une nouvelle table. Vous pouvez spécifier les colonnes et les types de données pour votre table.

	11-3-Si vous avez déjà une base de données avec des tables, vous pouvez importer votre base de données existante en cliquant sur "Importer" dans le panneau de gauche. Sélectionnez le fichier de sauvegarde de votre base de données et cliquez sur le bouton "Exécuter" pour importer la base de données.

	12-Dans votre application, vous devrez modifier les informations de connexion à la base de données pour qu'elles correspondent à celles de votre base de données locale. Pour cela, vous devrez identifier l'adresse de l'hôte (généralement "localhost"), le nom de la base de données, le nom d'utilisateur et le mot de passe pour vous connecter à la base de données.

	12-1 <?php $host = 'localhost'; $username = 'root'; $password = 'root'; $dbname = 'nom de la table'; $connect = mysqli_connect($host, $username, $password, $dbname);

	13-Vous pouvez maintenant utiliser phpMyAdmin pour gérer votre base de données en local avec MAMP.

	14- Dans le cas de l'application concernant le restaurent Quai antique afin de crée un administrateur il faut importer dans la table users : 



