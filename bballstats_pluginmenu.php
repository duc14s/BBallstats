<?php

echo '
<li class="dir">Statistik
        <ul>';
                  if (checkAdmin($_SESSION['username'])){
                          echo '<li class="last"><a href="http://' . $klubadresse . $klubpath . '/admin/plugins/bballstats/bballstats_config.php">Konfiguration</a></li>';
                  }
                  echo '
        </ul>
</li>';

?>