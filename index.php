<?php

require_once "controllers/template.controller.php";
require_once "controllers/route.controller.php";

require_once "controllers/user.controller.php";
require_once "controllers/casa.controller.php";

require_once "models/user.model.php";
require_once "models/casa.model.php";

$plantilla = new TemplateController();
$plantilla -> template();