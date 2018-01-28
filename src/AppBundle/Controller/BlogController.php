<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Post;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class BlogController extends Controller
{
    /**
     * @Route("/{page}", defaults={"page"=0}, requirements={"page"="\d+"}, name="homepage")
     */
public function indexAction($page)
{
    $page++;
    $offset = $page*3-3;
    $repository = $this->getDoctrine()
		  ->getManager()
		  ->getRepository('AppBundle:Post');
    $qb = $repository->createQueryBuilder('post');
    $count = $qb->select('COUNT(post)')->getQuery()->getSingleScalarResult();
    $posts = $repository->findBy(array(), array('published' => 'desc'),3, $offset);

return $this->render('Blog/homepage.html.twig', array('posts' => $posts,'page' => $page,'totalPostCount' => $count));
}
 /**
* @Route("/post/{postid}", name="blog_post")
*/

public function postAction($postid)
{
    
$post = $this->getDoctrine()
	->getRepository('AppBundle:Post')
	->findOneBy(['id' => $postid]);

return $this->render('Blog/post.html.twig', array('post' => $post));

}

 /**
* @Route("/new", name="blog_new")
*/

public function NewAction(Request $request)
{
    $securityContext = $this->container->get('security.authorization_checker');
    if (!($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED'))) {
          $request->getSession()->getFlashBag()->add('notice', 'Vous devez être connecté pour poster un article');

         return $this->redirectToRoute('fos_user_security_login');
    }

    $post = new Post();
    
    $user = $this->getUser();
    $post->setAuteur($user->getUsername());
   
    $form = $this->createFormBuilder($post)
            ->add('Titre', TextType::class)
            ->add('Description',TextType::class)
            ->add('Content',TextareaType::class)
            ->add('Enregistrer',SubmitType::class)
            ->getForm();
    
    if ($request->isMethod('POST')) {
      $form->handleRequest($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();

        return $this->redirectToRoute('blog_post', array('postid' => $post->getId()));
      }
    }
    
    return $this->render('Blog/new.html.twig', array('form' => $form->createView()));

}

/**
* @Route("/edit/{postid}", name="blog_edit")
*/

public function EditAction($postid,Request $request )
{
    
$post = $this->getDoctrine()
	->getRepository('AppBundle:Post')
	->findOneBy(['id' => $postid]);

$securityContext = $this->container->get('security.authorization_checker');
    if (!($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED'))) {
          $request->getSession()->getFlashBag()->add('notice', 'Vous devez être connecté pour éditer un article');

         return $this->redirectToRoute('fos_user_security_login');
    }
   
    $form = $this->createFormBuilder($post)
            ->add('titre', TextType::class)
            ->add('description',TextType::class)
            ->add('content',TextareaType::class)
            ->add('Enregistrer',SubmitType::class)
            ->getForm();
    
    if ($request->isMethod('POST')) {
      $form->handleRequest($request);

      if ($form->isValid()) {
        $em = $this->getDoctrine()->getManager();
        $em->flush();

        return $this->redirectToRoute('blog_post', array('postid' => $post->getId()));
      }
    }
    
    return $this->render('Blog/edit.html.twig', array('form' => $form->createView()));


}

/**
* @Route("/delete/{postid}", name="blog_delete")
*/

public function DeleteAction($postid, Request $request ){
    
    $securityContext = $this->container->get('security.authorization_checker');
    if (!($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED'))) {
          $request->getSession()->getFlashBag()->add('notice', 'Vous devez être connecté pour supprimer un article');

         return $this->redirectToRoute('fos_user_security_login');
    }
    
    
     $em = $this->getDoctrine()->getManager();
     $entry = $em->getRepository('AppBundle:Post')->find($postid);
     $em->remove($entry);
     $em->flush($entry);

    return $this->redirectToRoute('homepage');

}
 }
