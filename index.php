<?php

/*
 * So, what every MVC framework has?
 * Model, View, Controller
 * First of all, request going to entry script (index.php)
 * Web server (apache or nginx) redirect all requests to index.php
 * So, when we got a request, we route it
 * Request are: site.com/controller/action
 * So we split uri, and calling controller::action();
 * That's how we works
 * So, what's next? What we do in action?
 * We create model (if needed) and choosing view to generate, and passing model to view
 * View generates
 * Profit!
 * Well, folder structure:
 * site.com
 * |
 * |-img
 * |
 * |-css
 * | |
 * | -bootstrap.min.css
 * | -user.css
 * |
 * |-js
 * | |
 * | -bootstrap.min.js
 * | -jquery.js
 * | -user.js
 * |
 * |-controllers
 * | |
 * | -controller.php
 * | -site.php
 * |
 * |-views
 * | |
 * | -view.php
 * |
 * |-models
 * | |
 * | -model.php
 * |
 * |-config.php
 * |
 * |-index.php
 * |
 * |-route.php
 * |
 * |-.htaccess
 */

require_once 'autoload.php';
require_once 'route.php';

Route::route();

