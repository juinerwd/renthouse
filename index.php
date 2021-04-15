<?php

require_once "controllers/template.controller.php";
require_once "controllers/route.controller.php";

require_once "models/user.model.php";
require_once "controllers/user.controller.php";

$plantilla = new TemplateController();
$plantilla -> template();