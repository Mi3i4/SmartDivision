<?php

use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create([
            'photo' => '/site_img/service0.jpg',
            'title' => 'Проектирование',
            'text' => 'Проектирование - это обязательная часть в интеграции любых инженерных систем. Хороший проект помогает предотвратить неприятные неожиданности в дальнейшем. И оставляет возможности для безболезненного расширения функционала системы.
Мы готовы помочь в детальной проработке документации по интеграции :
• систем управления (включая разарботку индивидуального софта)
•автоматизации
•систем видео-отображения и проекционных систем
•домашних кинотеатров
•стерео-систем
•охранных систем и систем контроля доступа 
•систем видео наблюдения
•локально вычислительной сети и профессионального wifi',
        ]);

        Service::create([
            'photo' => '/site_img/service1.jpg',
            'title' => 'Монтаж',
            'text' => 'Монтаж - следующий шаг. Правильный монтаж оборудования и коммуникационных трасс исключает большое число ошибок в работе электронных систем.
Поможем с монтажем компонентов всех вышеуказанных систем.',
        ]);

        Service::create([
            'photo' => '/site_img/service2.jpg',
            'title' => 'Настройка',
            'text' => 'Настройка - завершающий шаг интеграции. Так же включает в себя программирование сценариев и уникальных функций.
Только точная настройка оборудования позволит пользователю получить максимальный функционал системы, а так же избавит от ошибок.',
        ]);

        Service::create([
            'photo' => '/site_img/service3.jpg',
            'title' => 'Аудит',
            'text' => 'Вы уже купили оборудование или только присматриваете себе систему?
Мы проконсультируем по брендам и стоимости оборудования. Поможем в решении технических вопросов. Мы готовы помочь на любом этапе реализации проекта.',
        ]);
    }
}