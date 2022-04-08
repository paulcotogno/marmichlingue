# marmichlingue

Solution CMS utilisé : https://github.com/adrien24/marmichlingue

Fork du projet avec scripts de déploiements : https://github.com/paulcotogno/marmichlingue

Scripts pour le déploiement et la sauvegarde : https://github.com/paulcotogno/marmichlingue/tree/main/.github/workflows

Environnement dev : http://185.189.159.104/
Environnement prod : http://20.199.107.35/

Redirection Apache2 du fichier de conf :
        `ProxyPass / http://localhost:2345/
        ProxyPassReverse / http://localhost:2345/
        ProxyPreserveHost On`

Utilisation de GitHub Action : 
    script pour connexion ssh : https://github.com/marketplace/actions/ssh-remote-commands
    scripts lors de la connexion ssh :
        `cd marmichlingue
        git fetch --all
        git reset --hard origin/develop
        docker-compose build
        sudo docker-compose exec -T php wp option update home 'http://185.189.159.104/' --allow-root
        sudo docker-compose exec -T php wp option update siteurl 'http://185.189.159.104/' --allow-root
        sudo docker-compose exec -T php wp search-replace 'http://localhost:2345/' 'http://185.189.159.104/' --allow-root`
    script pour backup de db :
        `$filename="backup.$(date +"%m-%d-%y_%T").sql"
        sudo docker-compose exec db mysqldump -uroot --password=password --databases data > home/groupe3/backup/$filename`