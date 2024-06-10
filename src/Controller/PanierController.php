<?php

namespace App\Controller;

use App\Entity\Panier;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class PanierController extends AbstractController
{
    #[Route('/panier', name: 'app_panier')]
    public function index(SessionInterface $session): Response
    {
        $panier = $session->get('panier', new Panier());

        return $this->render('panier/index.html.twig', [
            'controller_name' => 'PanierController',
            'panier' => $panier->getPanier(),
        ]);
    }

    #[Route('/panier/add', name: 'app_panier_add')]
    public function add(Request $request, SessionInterface $session): Response
    {
        $panier = $session->get('panier', new Panier());

        $article = [
            'id' => $request->get('id'),
            'nom' => $request->get('nom'),
            'quantite' => $request->get('quantite', 1),
            'prix' => $request->get('prix'),
            'image' => $request->get('image')
        ];

        $panier->add($article);
        $session->set('panier', $panier);

        return $this->redirectToRoute('app_panier');
    }

    #[Route('/panier/delete', name: 'app_panier_delete')]
    public function delete(Request $request, SessionInterface $session): Response
    {
        $panier = $session->get('panier', new Panier());

        $article = [
            'id' => $request->get('id'),
            'nom' => $request->get('nom'),
            'quantite' => 1,
            'prix' => $request->get('prix'),
            'image' => $request->get('image')
        ];

        $panier->delete($article);
        $session->set('panier', $panier);

        return $this->redirectToRoute('app_panier');
    }

    #[Route('/panier/clear', name: 'app_panier_clear')]
    public function clear(SessionInterface $session): Response
    {
        $panier = new Panier();
        $session->set('panier', $panier);

        return $this->redirectToRoute('app_panier');
    }

    #[Route('/panier/recalculate', name: 'app_panier_recalculate', methods: ['POST'])]
    public function recalculate(Request $request, SessionInterface $session): RedirectResponse
    {
        $panier = $session->get('panier', new Panier());

        // Récupérer toutes les quantités transmises via la requête
        $quantities = $request->request->all('quantities');

        foreach ($quantities as $id => $quantity) {
            $panier->updateQuantity($id, (int)$quantity);
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('app_panier');
    }

    #[Route('/panier/update', name: 'app_panier_update', methods: ['POST'])]
    public function update(Request $request, SessionInterface $session): Response
    {
        $panier = $session->get('panier', new Panier());

        // Récupérer toutes les quantités transmises via la requête
        $quantities = $request->request->all('quantities');

        foreach ($quantities as $id => $quantity) {
            $panier->updateQuantity($id, (int)$quantity);
        }

        $session->set('panier', $panier);

        return $this->redirectToRoute('app_panier');
    }
}
