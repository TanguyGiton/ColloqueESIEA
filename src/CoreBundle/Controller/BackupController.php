<?php

namespace CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BackupController extends Controller
{
    public function indexAction()
    {
        $db = $this->getParameter('database_name');
        $user = $this->getParameter('database_user');
        $pass = $this->getParameter('database_password');
        $host = $this->getParameter('database_host');

        $file = 'backup_' . @date("Y-m-d-H_i_s") . '.gz';

        system("mysqldump --add-drop-table --create-options --skip-lock-tables --extended-insert --quick --set-charset --host=$host --user=$user --password=$pass $db | gzip > /home/hosting/pfh/colloque/backup/$file");

        return new Response("<html><body>Ok</body></html>");
    }
}
