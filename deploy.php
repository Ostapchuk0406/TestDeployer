<?php
namespace Deployer;

require 'recipe/symfony.php';

// Config

set('repository', 'git@github.com:Ostapchuk0406/TestDeployer.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

//host('testdeployer-production-1')
//    ->hostname('testdeployer-production-1')
//    ->user('root')
//    ->identityFile('~/.ssh/id_rsa')
//    ->set('remote_user', 'deployer')
//    ->set('deploy_path', '/app');
//    ->set('alias', 'prod');

host('testdeployer-production-1')
    ->set('deploy_path', '/app');
//    ->set('sudo_password', 'Ostapchuk0406')
//    ->set('domain', 'localhost')
//    ->set('public_path', '')
//    ->set('php_version', '7.4')
//    ->set('db_type', '1')
//    ->set('db_user', 'root')
//    ->set('db_name', 'test')
//    ->set('db_password', '');


// Hooks

after('deploy:failed', 'deploy:unlock');
