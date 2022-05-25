<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;


class UploadController extends AbstractController
{
    /**
     * @Route("/uploader", name="uploader")
     */
    public function index(Request $request): Response
    {

//        ->add('dgppentrepriselogo', FileType::class, [
//        'label' => 'fichier',
//        'attr' => [
//            'class' => 'form-control',
//           // 'data-iconName' => 'glyphicon glyphicon-camera',
//            'data-buttonText' => null,
//            // 'accept' => '*',
//        ],
//       // 'data_class' => null,
//        'required' => false,
//        ])




//        $dgppentreprise = new Dgppentreprise();
//        $form = $this->createForm(DgppentrepriseType::class, $dgppentreprise);
//        $form->handleRequest($request);
//
//        $post = $request->get('dgppentreprise');
//        if ($form->isSubmitted() && $form->isValid()) {
//            $image= $request->files->get('dgppentreprise');
//            $image=$image['dgppentrepriselogo'];
//
//            $imageFile = $form->get('dgppentrepriselogo')->getData();
//            $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
//
//            $imageFile->move(
//                $this->getParameter('images_directory'),
//                $newFilename
//            );



//  }





        return $this->render('upload/new.html.twig', [
            'controller_name' => 'UploadController',
        ]);
    }


}
