<?php

use App\Models\Solution;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        Solution::create([
            'path'     => 'Для_дома/Управление',
            'for'      => 'Для дома',
            'title'    => 'Управление',
            'photos'   => '/site_img/smart-home.png /site_img/smart-home.png /site_img/smart-home.png',
            'text'    => 'В связи с неумолимо надвигающемся техническим прогрессом человечество получило немалое число систем для комфортной жизни. Но вместе с тем приобрело и кучу неприятностей, свзянных с управлением всеми системами комфорта и системами жизнеобеспечения. Посудите сами освещение, вентиляция, кондиционирование, отопление, охранные системы и системы видеонаблюдения, системы оповещения, wifi, система развлечений вот далеко неполный список того, что требует внимание пользователя, почти ежедневно. Как со всем этим справиться? Благодаря современным интегрированным системам управления уже сейчас можно сосредоточить контроль в одном смартфоне. Мы поможем выбрать решения, которые подходят именно вам.',
            'small_text'    => 'В связи с неумолимо надвигающемся техническим прогрессом человечество получило немалое число систем для комфортной жизни. Но вместе с тем приобрело и кучу неприятностей, свзянных с управлением всеми системами комфорта и системами жизнеобеспечения.',
        ]);
        Solution::create([
            'path'     => 'Для_дома/Домашние_кинотеатры',
            'for'      => 'Для дома',
            'title'    => 'Домашние кинотеатры',
            'photos'   => '/site_img/smart-home.png /site_img/smart-home.png /site_img/smart-home.png',
            'text'    => 'Представьте, что вы можете пригласить друзей на премьеру долгожданного кинофильма к себе домой, а не в очередной торговый центр. Вы рассаживаетесь по местам, в комнате гаснет свет и запускается фильм. Благодаря отличной картинке и детальному звуку вы становитесь участником истории на экране.
Мы поможем собрать кинотеатральную систему развлечений, согласно вашим требованиям.
',
            'small_text'    => 'Представьте, что вы можете пригласить друзей на премьеру долгожданного кинофильма к себе домой, а не в очередной торговый центр. Вы рассаживаетесь по местам, в комнате гаснет свет и запускается фильм.',
        ]);
        Solution::create([
            'path'     => 'Для_дома/Wifi',
            'for'      => 'Для дома',
            'title'    => 'Wifi',
            'photos'   => '/site_img/smart-home.png /site_img/smart-home.png /site_img/smart-home.png',
            'text'    => 'Наверняка вы уже страдали от плохого wifi. Множество проблем ждут пользователя, если система wifi в доме собрана не верно. Затухание сигнала, нестабильный сигнал, потеря сети устройствами, дублирование сети - вот лишь некоторые из огромногт числа проблем с радиосвязью.
Наши специалисты имеют уникальный опыт в инсталляции бесшовного wifi. Мы можем провести радио разведку в вашем доме и указать на наиболее проблемные места, а так же предложить решения на основе проверенного временем оборудования.',
            'small_text'    => 'Наверняка вы уже страдали от плохого wifi. Множество проблем ждут пользователя, если система wifi в доме собрана не верно.',
        ]);
        Solution::create([
            'path'     => 'Для_дома/Освещение',
            'for'      => 'Для дома',
            'title'    => 'Освещение',
            'photos'   => '/site_img/smart-home.png /site_img/smart-home.png /site_img/smart-home.png',
            'text'    => 'Управление системами освещения и затемнения поможет сэкономить электроэнергию, увеличить срок службы ламп, получить доступ к уникальным сценариям, разработанных вместе с вами. Сеть выключателей и датчиков движения обеспечит максимально удобную и стабильную эксплуатацию.
Системы затемнения позволят вам получить абсолютно темную комнату даже в яркий солнечный день, всего одним нажатием. 
Чтобы не щурится ночью от яркого света и не бродить в кромешной тьме можно создать режим ночной подсветки помещений, который будет автоматически включаться ночью по датчику.',
            'small_text'    => 'Управление системами освещения и затемнения поможет сэкономить электроэнергию, увеличить срок службы ламп, получить доступ к уникальным сценариям, разработанных вместе с вами. Сеть выключателей и датчиков движения обеспечит максимально удобную и стабильную эксплуатацию.',
        ]);
        Solution::create([
            'path'     => 'Для_дома/Мультирум',
            'for'      => 'Для дома',
            'title'    => 'Мультирум',
            'photos'   => '/site_img/smart-home.png /site_img/smart-home.png /site_img/smart-home.png',
            'text'    => 'Многие из нас слушают музыку. И иногда хочется, чтобы музыка сопровождала вас в повседневных делах, если это возможно. Вы переходите из комнаты в комнату, с этажа на этаж, продолжая слушать свой любимый плей-лист. 
Легкий джаз для встречи с друзьями, новости по утрам и спокойная музыка после работы, по одному нажатию, вот лишь несколько примеров того, как можно использовать возможности мультирум.
Доступ к стриминговым сервисам дает возможность получить огромный ассортимент музыки и подкастов в отличном качестве. 
Стерео комнаты и пластики - весь этот фетишь никто не отменял и вы сможете сравнить сами что лучше лампа или цифра?',
            'small_text'    => 'Многие из нас слушают музыку. И иногда хочется, чтобы музыка сопровождала вас в повседневных делах, если это возможно. Вы переходите из комнаты в комнату, с этажа на этаж, продолжая слушать свой любимый плей-лист. 
Легкий джаз для встречи с друзьями, новости по утрам и спокойная музыка после работы, по одному нажатию, вот лишь несколько примеров того, как можно использовать возможности мультирум.',
        ]);

    }
}
