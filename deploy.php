<?php
namespace Deployer;

require 'recipe/symfony4.php';

// Project name
set('application', 'my_project');

// Project repository
set('repository', 'git@github.com:Ostapchuk0406/TestDeployer.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
//add('writable_dirs', []);
set('allow_anonymous_stats', false);
set('http_user', 'nginx');
set('writable_dirs', ['/app/public']);
set('writable_mode', 'chmod');

// Hosts

host('prod')
    ->hostname('testdeployer-production-1')
    ->user('root')
    ->identityFile('~/.ssh/id_rsa')
    ->set('deploy_path', '/app');

// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

//task('my_task', function () {
//    $var = get('bin/composer');
//    writeln("var: " . $var);
//});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');

// Migrate database before symlink new release.

before('deploy:symlink', 'database:migrate');

