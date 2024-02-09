<?php

/**
 * 
 *  Pour bien comprendre ce Design Pattern je vous l'ai mis dans un seul et même fichier, mais vous devez faire un fichier par classe, utiliser l'autoloading
 * 
 */

// Le sujet
class User implements SplSubject
{

    private int $id;
    private array $observers;
    /**
     * attache un observateur
     *
     * @param SplObserver $observer
     */
    public function attach(SplObserver $observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * Détache un observateur
     *
     * @param SplObserver $observer
     */
    public function detach(SplObserver $observer): void
    {

        $key = array_search($observer, $this->observers, true);
        if ($key) {
            unset($this->observers[$key]);
        }
    }

    /**
     * Notifier une action
     */
    public function notify(): void
    {

        foreach ($this->observers as $value) {

            $value->update($this);
        }
    }


    /**
     * Une méthode de la classe 
     * @param string $name
     * @param string $email
     */
    public function create(string $name, string $email): void
    {

        // method to insert data

        $this->id = uniqid(true);

        $this->notify();
    }

    /**
     * Une méthode de la classe 
     */
    public function last_id()
    {
        return $this->id;
    }
}

// Un Observeur
class Log implements SplObserver
{

    public function update(SplSubject $subject): void
    {
        echo "log :" . $subject->last_id() . "<br>";
    }
}

// Un Observeur
class Model implements SplObserver
{

    public function update(SplSubject $subject): void
    {
        echo "id : " .  $subject->last_id() . "<br>";
    }
}

// ...

// La classe observée
$subject = new User;

// Les observeurs attachés
$subject->attach(new Log);
$subject->attach(new Model);

// Une action qui déclenchera la notification aux observeurs
$subject->create('Alan', 'alan@alan.fr');
