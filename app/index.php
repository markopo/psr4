<?php
/**
 * Created by PhpStorm.
 * User: marko
 * Date: 20/04/2015
 * Time: 20:51
 */

use MarkosBlog\Repositories\UserRepository as UserRepository;
use MarkosBlog\Helpers\HelloHelper as HelloHelper;

require_once __DIR__. '/../vendor/autoload.php';

// $user = new UserRepository();


$helloHelper = new HelloHelper();

$helloHelper->sayHello(5);
