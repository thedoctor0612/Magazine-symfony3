<?php
/**
 * Created by PhpStorm.
 * User: meher
 * Date: 02/07/2016
 * Time: 02:39
 */

namespace Mayssoun\MagazineBundle\Controller;


use Mayssoun\MagazineBundle\Entity\Blogger;
use Mayssoun\MagazineBundle\Form\BloggerType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class RegistrationController extends Controller
{
    /**
     * @Route("/registerBlogger", name="user_registration")
     */
    public function registerAction(Request $request)
    {
        // 1) build the form
        $blogger = new Blogger();
        $form = $this->createForm(BloggerType::class, $blogger);

        // 2) handle the submit (will only happen on POST)
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {

            // 3) Encode the password (you could also do this via Doctrine listener)
            /*$password = $this->get('security.password_encoder')
                ->encodePassword($blogger, $blogger->getPlainPassword());
            $blogger->setPassword($password);*/

            // 4) save the User!
            $em = $this->getDoctrine()->getManager();
            $em->persist($blogger);
            $em->flush();

            // ... do any other work - like sending them an email, etc
            // maybe set a "flash" success message for the user

            return $this->redirectToRoute('replace_with_some_route');
        }

        return $this->render(
            'MayssounMagazineBundle:Default:register.html.twig',
            array('form' => $form->createView())
        );
    }
}