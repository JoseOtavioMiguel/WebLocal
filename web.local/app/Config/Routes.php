<?php

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Router\RouteCollection;


/**
 * @var RouteCollection $routes
 */

$routes->setAutoRoute(true);

$routes->post('/avaliar', 'Home::avaliar');
$routes->post('/avaliarProjetoPoster', 'Home::avaliarProjetoPoster');!

$routes->post('/cadastrar', 'Home::cadastrar');
$routes->post('/projetos/cadastrar', 'Home::cadastrar');
$routes->post('/editar', 'Home::editar');

$routes->post('/cadastrarAvaliador' , 'Avaliador::designarAvaliadores');
$routes->get('/listarAvaliador' ,  'Projetos::listarAvaliador');

$routes->get('/projetos/index', 'Projetos::index' );
$routes->get('/projetos/simposio', 'Home::simposio' );
$routes->get('/dadosAvaliador', 'Avaliador::index');
$routes->get('/projetos/excluir/(:num)', 'Home::excluir/$1');
$routes->get('/projetos/listar', 'Home::listar');
$routes->get('/projetos/listar(num)', 'Home::listar/$1');

$routes->get('projetos/listarProjeto/(:num)', 'Projetos::listarProjeto/$1');
$routes->get('projetos/designarAvaliadores' , 'Projetos::designarAvaliadores');
$routes->get('projetos/projetosAprovados' , 'Projetos::listarProjetosAprovados');
$routes->get('/', 'Login::index');

$routes->get('/login/paginaUsuario', 'Login::paginaUsuario');
$routes->get('/login/paginaAvaliador', 'Login::paginaAvaliador');

$routes->get('/Simposio', 'Simposio::cadastrarSimposio');

$routes->get('/email/sendEmail', 'Email::enviarEmail');

?>