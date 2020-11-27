<?php
class Post{
    //Variables
    private $userID;
    private $subject;
    private $description;

    //Constructor
    public function __construct($userID, $subject, $description){
        $this->userID=$userID;
        $this->subject=$subject;
        $this->description=$description;
    }

    /**
     * @return string
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param string $subject
     */
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }


}