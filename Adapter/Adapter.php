<?php

// we have a book interface
interface IBook
{
    public function open();
    public function rotate_page();
}


// and also we have a book that implements book interface
class Book implements IBook
{
    public function open()
    {
        echo "open the book \n";
    }

    public function rotate_page()
    {
        echo "go to next page of the book \n";
    }
}


// here we have a human who can read a book
class human
{
    public function read_book(IBook $Book)
    {
        $Book->open();
        $Book->rotate_page();
    }
}


// our human wants to read a book, so;
(new human)->read_book(new Book); // good , our human can read the book :>

// now we have an ebook interface
interface IeBook
{
    public function turn_screen_on();
    public function press_nextPage_button();
}


//and we have an ebook that implement ebook interface, too
class eBook implements IeBook
{
    public function turn_screen_on()
    {
        echo "screen turned on \n";
    }

    public function press_nextPage_button()
    {
        echo "next page button pressed \n";
    }
}


# now we have a human who wants to read an ebook, but our human just can read
# IBook , so what should we do?
# exactly ! here we need an adapter that implements IBook

class eBookAdapter implements IBook
{
    private IeBook $eBook;

    public function __construct(IeBook $eBook)
    {
        $this->eBook = $eBook;
    }


    public function open()
    {
        $this->eBook->turn_screen_on();
    }


    public function rotate_page()
    {
        $this->eBook->press_nextPage_button();
    }
}


# now our human with this adapter, can read Ebooks TOO (yeeeeeeeeeees)
(new human)->read_book(new eBookAdapter(new eBook));
