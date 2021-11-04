<?php
namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Symfony\Component\DependencyInjection\ContainerInterface;

class SortOptredens extends AbstractExtension {

    public function getFunctions()
    {
        return [
            new \Twig\TwigFunction('showUpcomingDates',[$this, 'showUpcomingDates']),
        ];
    }

    public function showUpcomingDates($events){

        $optredens = [];
        $date_now = new \DateTime();


        foreach($events as $event) {

            if($event->getDatum() > $date_now) {
                $optredens[] = $event;
            }
        }

        return( $optredens );
    }    
}
