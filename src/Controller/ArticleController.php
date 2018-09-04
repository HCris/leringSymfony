<?php
/**
 * Created by PhpStorm.
 * User: Cristinca
 * Date: 9/4/2018
 * Time: 11:42 AM
 */

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;


class ArticleController
{
    /**
     * @Route("/")
     */
  public function test(){
      return new Response("test");
  }

    /**
     * @Route("/news/{slug}")
     */
  public function show($slug){
      return new Response(sprintf( 'test2:"%s"',
          $slug

      ));
  }

}