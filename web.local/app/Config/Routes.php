<?php

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);

$routes->post('/avaliar', 'Home::avaliar');
$routes->post('/cadastrar', 'Home::cadastrar');
$routes->post('/projetos/cadastrar', 'Home::cadastrar');
$routes->post('/editar', 'Home::editar');

$routes->post('/cadastrarAvaliador' , 'Projetos::cadastrarAvaliador');
$routes->get('/listarAvaliador' ,  'Projetos::listarAvaliador');

$routes->get('/projetos/index', 'Projetos::index' );
$routes->get('/dadosAvaliador', 'Avaliador::index');
$routes->get('/projetos/excluir/(:num)', 'Home::excluir/$1');
$routes->get('/projetos/listar', 'Home::listar');
//$routes->get('/projetos/listarProjetos/(:num)', 'Home::listarProjetos/$1');
$routes->get('projetos/listarProjeto/(:num)', 'Projetos::listarProjeto/$1');
$routes->get('projetos/designarAvaliadores' , 'Projetos::designarAvaliadores');
$routes->get('/', 'Login::index');

