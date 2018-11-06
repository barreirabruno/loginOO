<?php
require_once 'global.php';

unset($_SESSION['logado']);
session_destroy();
header('Location: formulario-login.php?logout=' . urlencode(base64_encode("Volte logo, sentiremos sua falta!")));


