<?php
namespace App\Controllers;


class Visiteur extends BaseController
{
    public function Index()
    {
        $apiKey = "AIzaSyDqn-w9zwQ6Zai0wEcD8Fa82wg--jxKM7I";
$placeId = "ChIJAzHRAE39EUgR7rbgbnJdnqM";

$url = "https://maps.googleapis.com/maps/api/place/details/json?place_id=$placeId&language=fr&fields=reviews,rating,name&key=$apiKey";

$response = file_get_contents($url);
$data = json_decode($response, true);

$data['reviews'] = $data['result']['reviews'];
        return view('Templates/Header')
            .view('Visiteur/vue_acceuil',$data)
            .view('Templates/Footer');
    }

    public function Contact()
    {
        if (strtoupper($this->request->getMethod()) === 'POST') {
            try {
                // Récupère les données du formulaire
                $nom = $this->request->getPost('nom');
                $prenom = $this->request->getPost('prenom');
                $email = $this->request->getPost('email');
                $message = $this->request->getPost('message');

                // Charge le service d'email
                $email_service = \Config\Services::email();

                // Configure l'email
                $email_service->setFrom($email, $prenom . ' ' . $nom);
                $email_service->setTo('hugo.hamonic22@gmail.com');
                $email_service->setSubject('Nouveau message de contact - ' . $prenom . ' ' . $nom);

                // Prépare le corps du message
                $body = "Vous avez reçu un nouveau message de contact.\n\n";
                $body .= "Nom: " . $nom . "\n";
                $body .= "Prénom: " . $prenom . "\n";
                $body .= "Email: " . $email . "\n";
                $body .= "Message:\n" . $message;

                $email_service->setMessage($body);

                // Envoie l'email
                if ($email_service->send()) {
                    $data['success'] = 'Votre message a été envoyé avec succès !';
                } else {
                    $data['error'] = 'Erreur lors de l\'envoi du message. Veuillez réessayer.';
                    $data['debug'] = $email_service->printDebugger();
                }
            } catch (\Exception $e) {
                $data['error'] = 'Erreur: ' . $e->getMessage();
            }
        }

        return view('Templates/Header')
            .view('Visiteur/vue_contact', $data ?? [])
            .view('Templates/Footer');
    }
}