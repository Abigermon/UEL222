<?php 
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\MenuPrincipal
;

class DefaultController extends AbstractController
{
    #[Route('/', name: 'index')]
    public function index(MenuPrincipal $menuPrincipal): Response
    {
        $menu = $menuPrincipal->generateMenu();
        
        return $this->render('index.html.twig', ['menu' => $menu]);
    }

    #[Route('/article', name: 'Articles')]
    public function articles(MenuPrincipal $menuPrincipal): Response
    {
        $menu = $menuPrincipal->generateMenu();
        
        return $this->render('article/index.html.twig', ['menu' => $menu]);
    }

    #[Route('/category', name: 'catégories')]
    public function categories(MenuPrincipal $menuPrincipal): Response
    {
        $menu = $menuPrincipal->generateMenu();
        
        return $this->render('category/index.html.twig', ['menu' => $menu]);
    }
}

?>

