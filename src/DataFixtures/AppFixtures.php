<?php

namespace App\DataFixtures;

use App\Entity\Choice;
use App\Entity\Question;
use App\Entity\Quiz;
use App\Enum\QuestionType;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $quiz = [
            'Symfony' => [
                'questions' => [
                    ['type' => QuestionType::BOOLEAN, 'title' => 'Symfony est un framework PHP ?', 'choice' => [
                        ['text' => 'true', 'isCorrect' => true],
                        ['text' => 'false', 'isCorrect' => false]
                    ]],
                    ['type' => QuestionType::BOOLEAN, 'title' => 'Symfony utilise Composer pour la gestion des dépendances ?', 'choice' => [
                        ['text' => 'true', 'isCorrect' => true],
                        ['text' => 'false', 'isCorrect' => false]
                    ]],
                    ['type' => QuestionType::BOOLEAN, 'title' => 'Symfony ne permet pas de gérer des routes facilement ?', 'choice' => [
                        ['text' => 'true', 'isCorrect' => false],
                        ['text' => 'false', 'isCorrect' => true]
                    ]],
                    ['type' => QuestionType::MULTIPLE, 'title' => 'Quel est le rôle principal du composant Symfony Console ?', 'choice' => [
                        ['text' => 'Créer des commandes CLI', 'isCorrect' => true],
                        ['text' => 'Gérer la base de données', 'isCorrect' => false],
                        ['text' => 'Servir de serveur HTTP', 'isCorrect' => false],
                        ['text' => 'Gérer les utilisateurs', 'isCorrect' => false]
                    ]],
                    ['type' => QuestionType::MULTIPLE, 'title' => 'Lequel de ces composants fait partie du Symfony Full Stack ?', 'choice' => [
                        ['text' => 'Twig', 'isCorrect' => true],
                        ['text' => 'Monolog', 'isCorrect' => true],
                        ['text' => 'Silex', 'isCorrect' => false],
                        ['text' => 'React', 'isCorrect' => false]
                    ]],
                    ['type' => QuestionType::MULTIPLE, 'title' => 'Comment appelle-t-on le fichier principal de configuration de Symfony ?', 'choice' => [
                        ['text' => 'config.yaml', 'isCorrect' => false],
                        ['text' => 'services.yaml', 'isCorrect' => false],
                        ['text' => 'framework.yaml', 'isCorrect' => true],
                        ['text' => 'app.yaml', 'isCorrect' => false]
                    ]],
                    ['type' => QuestionType::MULTIPLE, 'title' => 'Lequel des suivants est un gestionnaire d\'injections de dépendances dans Symfony ?', 'choice' => [
                        ['text' => 'Doctrine', 'isCorrect' => false],
                        ['text' => 'Twig', 'isCorrect' => false],
                        ['text' => 'DependencyInjection', 'isCorrect' => true],
                        ['text' => 'Monolog', 'isCorrect' => false]
                    ]],
                    ['type' => QuestionType::SHORT, 'title' => 'Quel est le système de routage utilisé par Symfony ?', 'choice' => [
                        ['text' => 'Annotations ou YAML', 'isCorrect' => true],
                    ]],
                    ['type' => QuestionType::SHORT, 'title' => 'Quel est l’outil utilisé pour gérer les migrations de base de données dans Symfony ?', 'choice' => [
                        ['text' => 'Doctrine Migrations', 'isCorrect' => true],
                    ]],
                    ['type' => QuestionType::SHORT, 'title' => 'Comment s\'appelle le composant Symfony permettant la gestion des formulaires ?', 'choice' => [
                        ['text' => 'Formulaire', 'isCorrect' => true],
                    ]],
                    ['type' => QuestionType::SHORT, 'title' => 'Quel est le fichier principal de configuration pour les routes dans Symfony ?', 'choice' => [
                        ['text' => 'config/routes.yaml', 'isCorrect' => true],
                    ]]
                ]
                    ],
            'React' => [
                'questions' => [
                    ['type' => QuestionType::BOOLEAN, 'title' => 'React est une bibliothèque JavaScript ?', 'choice' => [
                        ['text' => 'true', 'isCorrect' => true],
                        ['text' => 'false', 'isCorrect' => false],
                    ]],
                    ['type' => QuestionType::BOOLEAN, 'title' => 'React permet la gestion du routing en natif ?', 'choice' => [
                        ['text' => 'true', 'isCorrect' => false],
                        ['text' => 'false', 'isCorrect' => true],
                        ]],
                    ['type' => QuestionType::BOOLEAN, 'title' => 'React utilise JSX ?', 'choice' => [
                        ['text' => 'true', 'isCorrect' => true],
                        ['text' => 'false', 'isCorrect' => false],
                        ]],

                    ['type' => QuestionType::MULTIPLE, 'title' => 'Quel est l\'objectif principal de React ?', 'choice' => [
                        ['text' => 'Manipuler le DOM', 'isCorrect' => true],
                        ['text' => 'Gérer la base de données', 'isCorrect' => false],
                        ['text' => 'Servir des API', 'isCorrect' => false],
                        ['text' => 'Écrire du HTML', 'isCorrect' => false]
                    ]],
                    ['type' => QuestionType::MULTIPLE, 'title' => 'Quelle méthode permet d\'ajouter des composants dans React ?', 'choice' => [
                        ['text' => 'useEffect', 'isCorrect' => false],
                        ['text' => 'render()', 'isCorrect' => true],
                        ['text' => 'componentDidMount()', 'isCorrect' => false],
                        ['text' => 'appendChild()', 'isCorrect' => false]
                    ]],

                    ['type' => QuestionType::SHORT, 'title' => 'Quel est le hook permettant de gérer l\'état local dans React ?', 'choice' => [
                        ['text' => 'useState', 'isCorrect' => true],
                    ]],
                    ['type' => QuestionType::SHORT, 'title' => 'Quel est le nom de la méthode de cycle de vie qui s\'exécute après que le composant soit monté ?', 'choice' => [
                        ['text' => 'componentDidMount', 'isCorrect' => true],
                        ]],
                    ['type' => QuestionType::SHORT, 'title' => 'Quel est le composant de base pour l\'affichage d\'un élément dans React ?', 'choice' => [
                        ['text' => 'React.Fragment', 'isCorrect' => true],
                        ]]
                ]
            ],
            'SQL' => [
                'questions' => [
                    ['type' => QuestionType::BOOLEAN, 'title' => 'SQL est un langage de gestion de bases de données ?', 'choice' => [
                        ['text' => 'true', 'isCorrect' => true],
                        ['text' => 'false', 'isCorrect' => false],
                    ]],
                    ['type' => QuestionType::BOOLEAN, 'title' => 'Le SQL n\'utilise pas de clauses pour manipuler les données ?', 'choice' => [
                        ['text' => 'true', 'isCorrect' => false],
                        ['text' => 'false', 'isCorrect' => true],
                    ]],
                    ['type' => QuestionType::BOOLEAN, 'title' => 'SELECT est utilisé pour interroger une base de données ?', 'choice' => [
                        ['text' => 'true', 'isCorrect' => true],
                        ['text' => 'false', 'isCorrect' => false],
                    ]],

                    ['type' => QuestionType::MULTIPLE, 'title' => 'Quelle commande SQL permet de supprimer une table ?', 'choice' => [
                        ['text' => 'DROP', 'isCorrect' => true],
                        ['text' => 'DELETE', 'isCorrect' => false],
                        ['text' => 'REMOVE', 'isCorrect' => false],
                        ['text' => 'TRUNCATE', 'isCorrect' => false]
                    ]],

                    ['type' => QuestionType::MULTIPLE, 'title' => 'Quel mot-clé est utilisé pour définir une relation entre deux tables ?', 'choice' => [
                        ['text' => 'JOIN', 'isCorrect' => true],
                        ['text' => 'WHERE', 'isCorrect' => false],
                        ['text' => 'ON', 'isCorrect' => false],
                        ['text' => 'WITH', 'isCorrect' => false]
                    ]],

                    ['type' => QuestionType::SHORT, 'title' => 'Comment appelle-t-on la commande pour insérer une ligne dans une table ?', 'choice' => [
                        ['text' => 'INSERT INTO', 'isCorrect' => true],
                        
                    ]],
                    ['type' => QuestionType::SHORT, 'title' => 'Comment appelons-nous l\'opération qui permet de mettre à jour des données ?', 'choice' => [
                        ['text' =>  'UPDATE', 'isCorrect' => true],
                       
                    ]],
                    ['type' => QuestionType::SHORT, 'title' => 'Comment appelle-t-on la clause permettant de filtrer les résultats d\'une requête ?', 'choice' => [
                        ['text' =>  'WHERE', 'isCorrect' => true],
                    ]]
                ]
            ]
        ];
        foreach ($quiz as $quizName => $quizInfo) {
            $quizEntity = new Quiz();
            $quizEntity->setName($quizName);

            $manager->persist($quizEntity);
            
            foreach ($quizInfo['questions'] as $questionData) {
                $question = new Question();
                $question->setQuiz($quizEntity);
                $question->setType($questionData['type']);
                $question->setTitle($questionData['title']);

                foreach ($questionData['choice'] as $choiceData) {
                    $choice = new Choice();
                    $choice->setContent($choiceData['text']);
                    $choice->setIsCorrect($choiceData['isCorrect']);
                    $question->addChoice($choice);
                    $manager->persist($choice);
                }
                $manager->persist($question);
            }
        }
        $manager->flush();
    }
}
