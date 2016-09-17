<?php
namespace UserBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as FOSSecurityController;

class SecurityController extends FOSSecurityController
{
    /**
     * @inheritdoc
     */
    protected function renderLogin(array $data)
    {
        return $this->render('UserBundle:Security:login.html.twig', $data);
    }
}
