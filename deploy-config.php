<?php
define('TOKEN', 'imadweb'); // This TOKEN put in Payload URL in GitLab or GitHub, Example: http://mydomain.com/deploy.php?token=mytoken
define('REMOTE_REPOSITORY', 'git@github.com:alexzer0/imad-web.git');
define('DIR','/home/imad/public_html/'); // It's important that the path ends with '/'
define('BRANCH','refs/heads/master'); // (Gitlab branch Route)
define('LOGFILE', "log.txt"); // Log File Name
define('GIT', '/usr/local/git/libexec/git-core/git'); // Uni