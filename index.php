<?php

require_once "controllers/template.controller.php";
require_once "controllers/route.controller.php";

require_once "models/rent.model.php";
require_once "controllers/rent.controller.php";

require_once "controllers/casa.controller.php";
require_once "models/casa.model.php";

// require_once "extensions/vendor/autoload";
require_once "controllers/form.controller.php";
require_once "models/form.model.php";

require_once "controllers/user.select.controllers.php";
require_once "models/user.select.model.php";

$plantilla = new TemplateController();
$plantilla -> template();