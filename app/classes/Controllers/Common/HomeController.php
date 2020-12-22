<?php

namespace App\Controllers\Common;

use App\App;
use App\Views\BasePage;
use App\Views\Forms\Admin\Pizza\PizzaCreateForm;
use App\Views\Forms\Admin\Pizza\PizzaUpdateForm;
use Core\View;
use Core\Views\Link;

class HomeController
{
    protected $page;

    /**
     * Controller constructor.
     *
     * We can write logic common for all
     * other methods
     *
     * For example, create $page object,
     * set it's header/navigation
     * or check if user has a proper role
     *
     * Goal is to prepare $page
     */
    public function __construct()
    {
        $this->page = new BasePage([
            'title' => 'Home'
        ]);
    }

    /**
     * Home Controller Index
     *
     * @return string|null
     * @throws \Exception
     */
    public function index(): ?string
    {
        $ads = [
            'ad1' => [
                'title' => 'Boxing Club',
                'text' => 'Gentlemen\'s Sports Club offers an exclusive deal for YOU! If you fit the category and are over 65years old, for only 299.99$ you can enroll into our exclusive boxing program. With the coaching you will receive you are going to be able to protect yourself and your loved ones! Enroll now only 299.99$!',
                'image' => 'https://d2ebzu6go672f3.cloudfront.net/media/content/images/staying-active-exercise-boxing-seniorL1115_Boxing_TSk100137649.png'
            ],
            'ad2' => [
                'title' => 'Golf Club',
                'text' => 'Gentlemen\'s Sports Club is expanding it\'s facilities and opening a golf court right outside it\'s doors! For the first 200 customers we offer an exclusive deal only 499.99$ to golf once every week! Truly a deal to behold, enroll now and enjoy not only the golfing but the nature as well!',
                'image' => 'https://golf.com/wp-content/uploads/2020/08/foursome.jpg'
            ],
            'ad3' => [
                'title' => 'Basketball Club',
                'text' => 'Gentlemen\'s Sports Club happens to be known across the whole world for it\'s excellence, from the courts installed to the variety of trainers available at any moment to coach those willing to put in the effort (and money of course)! For just 699.99$ you too can become history, so wait no longer tie those laces up and hurry to enroll in our basketball program! Only 699.99$! ',
                'image' => 'https://s3.amazonaws.com/file.imleagues/Images/Teams/Uploaded/201701/20171111242352926f62270397e04ef26ac247647018a1ba.jpg'
            ]
        ];

        $maps = [
            'map1' => [
                'location' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2304.2196022783755!2d25.3356966158603!3d54.72335198029061!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46dd96e7d814e149%3A0xdd7887e198efd4c7!2sSaul%C4%97tekio%20al.%2015%2C%20Vilnius%2010224!5e0!3m2!1sen!2slt!4v1608658894042!5m2!1sen!2slt"'
            ]
        ];

        $content = (new View([
            'heading' => 'Gentlemen\'s Sports Club',
            'ads' => $ads ?? [],
            'maps' => $maps ?? [],
        ]))->render(ROOT . '/app/templates/content/index.tpl.php');

        $this->page->setContent($content);

        return $this->page->render();
    }
}

