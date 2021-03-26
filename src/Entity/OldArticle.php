<?php


namespace App\Entity;


use DateTime;

class OldArticle
{
   private string $title;
   private string $subtitle;
   private DateTime $createdAt;
   private string $author;
   private string $body;
   private string $image;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return OldArticle
     */
    public function setTitle(string $title): OldArticle
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getSubtitle(): string
    {
        return $this->subtitle;
    }

    /**
     * @param string $subtitle
     * @return OldArticle
     */
    public function setSubtitle(string $subtitle): OldArticle
    {
        $this->subtitle = $subtitle;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreatedAt(): DateTime
    {
        return $this->createdAt;
    }

    /**
     * @param DateTime $createdAt
     * @return OldArticle
     */
    public function setCreatedAt(DateTime $createdAt): OldArticle
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @param string $author
     * @return OldArticle
     */
    public function setAuthor(string $author): OldArticle
    {
        $this->author = $author;
        return $this;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return $this->body;
    }

    /**
     * @param string $body
     * @return OldArticle
     */
    public function setBody(string $body): OldArticle
    {
        $this->body = $body;
        return $this;
    }

    /**
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }

    /**
     * @param string $image
     * @return OldArticle
     */
    public function setImage(string $image): OldArticle
    {
        $this->image = $image;
        return $this;
    }


}