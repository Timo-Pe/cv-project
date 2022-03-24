<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Datas\CurriculumDatas;

class CurriculumController extends AbstractController
{
    /**
     * @Route("/curriculum", name="app_curriculum")
     */
    public function index(): Response
    {
        $objectDatas = new CurriculumDatas();

        $educationList = $objectDatas->getEducation();
        $skillsList = $objectDatas->getSkills();
        $experiencesList = $objectDatas->getExperience();
        $technologiesList = $objectDatas->getTechnologies();
        $hobbiesList = $objectDatas->getHobbies();
        $otherSkillsList = $objectDatas->getOtherSkills();
      
        return $this->render('curriculum/index.html.twig', [
            'controller_name' => 'CurriculumController',
            'educationList' => $educationList,
            'skillsList' => $skillsList,
            'experiencesList' => $experiencesList,
            'technologiesList' => $technologiesList,
            'hobbiesList' => $hobbiesList,
            'otherSkillsList' => $otherSkillsList,
        ]);
    }
}
