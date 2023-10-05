<?php

class LibraryItem {
    protected $title;
    protected $author;
    protected $isCheckedOut = false;

    public function __construct($title, $author) {
        $this->title = $title;
        $this->author = $author;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function isCheckedOut() {
        return $this->isCheckedOut;
    }

    public function checkOut() {
        $this->isCheckedOut = true;
    }

    public function checkIn() {
        $this->isCheckedOut = false;
    }
}

class Book extends LibraryItem {
    private $isbn;

    public function __construct($title, $author, $isbn) {
        parent::__construct($title, $author);
        $this->isbn = $isbn;
    }

    public function getISBN() {
        return $this->isbn;
    }
}

class DVD extends LibraryItem {
    private $runtime;

    public function __construct($title, $author, $runtime) {
        parent::__construct($title, $author);
        $this->runtime = $runtime;
    }

    public function getRuntime() {
        return $this->runtime;
    }
}

class Student {
    private $studentId;
    private $name;
    private $checkedOutItems = [];

    public function __construct($studentId, $name) {
        $this->studentId = $studentId;