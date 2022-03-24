<?php 

namespace App\Datas;

class CurriculumDatas {

    public function getEducation(){

        $training = [
            "2021 . 2022 |" => "Formation Développeur Web et Web Mobile Spécialisation Symfony (en préparation pour le Titre Professionnel)",
            "2020 |" => "Formation Autodidacte : HTML/CSS PHP/ SQL JavaScript",
            "2014 |" => "BAC Professionnel Technicien en chaudronnerie industrielle (Mention assez bien)",
            "2013 |" => "CAP Réalisation en chaudronnerie industrielle",
            "2010 |" => "Diplôme national du brevet des collèges"
        ];

        return $training;
    }

    public function getExperience(){

        $experiences = [
            "2015 . 2021" => [
                "Technicien en chaudronnerie (Entreprise Cedris à Bazougers)",
            ],
            "2014 . 2015" => [
                "Création d’utilitaires Windows (Autodidacte en développement logiciel)",
                "Technicien en chaudronnerie (STSM à Genest-Saint-Isle)"
            ],
            "2011 . 2014" => [
                "Réalisations Graphiques 3D (Pole Formation UIMM à Saint-Berthevin)",
                "Apprenti technicien chaudronnier (Jousse SAS à Parigné-sur Braye)"
            ],
            "2009 . 2010" => [
                "Création d’un serveur privé pour un jeu vidéo de type MMORPG (Autodidacte en gestion de projet informatique)",
                "Stage Maintenance Informatique (DELORME informatique à Laval)",
                "Stage en Maintenance informatique (CER France à Laval)"
            ]
        ];
        return $experiences;
    }

    public function getTechnologies(){
        
        $technologies = [
            "HTML et CSS",
            "PHP | Symfony",
            "JavaScript | React",
            "Laravel | Lumen",
            "Git, GitHub",
            "MySQL",
            "NPM",
            "Composer",
            "Visual Basic.net",
            "C++",
            "Bootstrap",
            "SASS"
        ];

        return $technologies;
    }

    public function getSkills(){
        
        $skills = [
            "Installation et administration de serveur NAS",
            "Installation d’environnement Windows ou GNU/Linux",
            "Réparation et montage d’ordinateur fixe ou portable",
            "Réparation de Smartphone",
            "Langage Machine G-CODE",
            "Création 3D Avec SolidWorks ainsi que 3DS MAX",
            "Installation de serveur UNIX FreeBSD",
        ];

        return $skills;
    }
    
    public function getOtherSkills(){

        $otherSkills = [
            "Anglais niveau A2",
            "Création de pièce en 3D et réalisation de plan CAO",
            "Mise en conception sur machine numérique CFAO",
            "Organisation et formation d’une équipe",
            "Prévention et sécurité dans un atelier dans le cadre de la mission de délégué du personnel",
        ];

        return $otherSkills;
    }

    public function getHobbies(){
        $hobbies = [
            "Développement personnel",
            "Bricolage",
            "Kung-fu Wing Chun",
            "Méditation et lecture",
        ];

        return $hobbies;
    }

}