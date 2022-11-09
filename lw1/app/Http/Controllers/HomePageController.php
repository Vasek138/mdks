<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class HomePageController extends Controller
{
    public function index(): View
    {
        return view('home', [

        'filmone' => 'Офис (сериал 2005 – 2013)',
        'descriptionone' => '"Сериал о трудовых буднях небольшого регионального офиса крупной компании, обитатели которого целыми днями должны терпеть закидоны своего непутевого босса. Первый сезон был снят в настоящем офисе. В течение второго сезона NBC переместила съемки в специальную студию, копирующую окружающую среду первого сезона...',
        'filmtwo' => 'Друзья (сериал 1994 – 2004)',
        'descriptiontwo' => 'Шестеро  друзей  –  Рейчел,  Моника,  Фиби,  Джоуи, Чендлер и Росс – живут по соседству, вместе убивают время, делятся секретами и иногда очень сильно влюбляются. Полные имена друзей таковы: Рэйчел Кэрен Грин, Моника Е. Геллер, Фиби Буффе, Джозеф Фрэнсис Триббиани-младший,  Чендлер  Мюриэл  Бинг,  Росс  Юстас  Геллер...',
        'filmthree' => ' Игра престолов (сериал 2011 – 2019)',
        'descriptionthree' => 'К концу подходит время благоденствия, и лето, длившееся почти десятилетие, угасает. Вокруг средоточия власти Семи королевств, Железного трона, зреет заговор, и в это непростое время король решает искать поддержки у друга юности Эддарда Старка. ',
        'filmfour' => ' Как я встретил вашу маму (сериал 2005 – 2014)',
        'descriptionfour' => 'Теперь и в озвучке «Кураж-Бамбей» Романтик Тед с помощью друзей ищет девушку своей мечты. Один из лучших и самых трогательных ситкомов XXI века',
        
        ]);
    }
}
