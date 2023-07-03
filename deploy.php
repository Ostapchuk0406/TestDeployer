<?php
namespace Deployer;

require 'recipe/symfony.php';

// Config

set('repository', 'git@github.com:Ostapchuk0406/TestDeployer.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('production')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/TestDeployer');

// Hooks

after('deploy:failed', 'deploy:unlock');
