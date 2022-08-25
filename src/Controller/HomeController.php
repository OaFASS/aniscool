<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'menu'=>'home'
        ]);
    }

    /**
     * @Route("/about", name="app_about")
     */
    public function about(): Response
    {
        return $this->render('home/about.html.twig', [
            'menu'=>'about'
        ]);
    }
    #[Route('/contact', name: 'app_contact')]
    public function contact(): Response
    {
        return $this->render('home/contact.html.twig', [
            'menu'=>'contact'
        ]);
    }
    /**
     * @Route("/carrier", name="app_carrier")
     */
    public function carrier(): Response
    {
        return $this->render('home/carrier.html.twig', [
            'menu'=>'carrier'
        ]);
    }
    /**
     * @Route ("/carrier/job/", name="app_job")
     */
    public function job(){
        return $this->render('home/job.html.twig',[
            'menu'=>'job'
        ]);
    }
    /**
     * @Route ("/wheelchair/", name="app_wheelchair")
     */
    public function wheelchair(){
        return $this->render('home/wheelchair.html.twig',[
            'menu'=>'wheelchair'
        ]);
    }

    /**
     * @Route ("/stairschair/", name="app_stairschair")
     */
    public function stairschair(){
        return $this->render('home/stairschair.html.twig',[
            'menu'=>'stairschair'
        ]);
    }
     /**
     * @Route ("/stretcher", name="app_stretcher")
     */
    public function stretcher(){
        return $this->render('home/stretcher.html.twig',[
            'menu'=>'stretcher'
        ]);
    }
     /**
     * @Route ("/bls", name="app_bls")
     */
    public function bls(){
        return $this->render('home/bls.html.twig',[
            'menu'=>'bls'
        ]);
    }
     /**
     * @Route ("/bariatric ", name="app_bariatric")
     */
    public function bariatric(){
        return $this->render('home/bariatric.html.twig',[
            'menu'=>'bariatric'
        ]);
    }
     /**
     * @Route ("/ambulatory ", name="app_ambulatory")
     */
    public function ambulatory(){
        return $this->render('home/ambulatory.html.twig',[
            'menu'=>'ambulatory'
        ]);
    }



}
