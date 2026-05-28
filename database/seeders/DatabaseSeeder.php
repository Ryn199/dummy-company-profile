<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;
use App\Models\Client;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'title' => 'Geothermal Technology Innovation',
            'slug' => 'geothermal-technology-innovation',
            'excerpt' => 'Innovation in geothermal industry.',
            'content' => 'PT Nurman Mitra Sentosa continues to innovate in geothermal engineering and industrial services.',
            'thumbnail' => 'articles/dummyarticlegallery.jpg',
        ]);

        Article::create([
            'title' => 'Industrial Maintenance Solutions',
            'slug' => 'industrial-maintenance-solutions',
            'excerpt' => 'Reliable maintenance solutions.',
            'content' => 'We provide maintenance services for industrial and energy sectors.',
        ]);

        Product::insert([
            [
                'name' => 'Liner Adapter Receptacle',
                'description' => 'Professional geothermal maintenance and engineering services.',
                'image' => 'products/liner-adapter-receptacle.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Rotatable Liner Adapter Receptacle',
                'description' => 'Industrial fabrication and engineering solutions.',
                'image' => 'products/engineering.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Liner Adapter',
                'description' => 'Preventive and corrective maintenance services.',
                'image' => 'products/mechanical.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Casing Head',
                'description' => 'Preventive and corrective maintenance services.',
                'image' => 'products/mechanical.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Double Studded Adapter',
                'description' => 'Preventive and corrective maintenance services.',
                'image' => 'products/mechanical.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tee Flange',
                'description' => 'Preventive and corrective maintenance services.',
                'image' => 'products/mechanical.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        Event::insert([
            [
                'title' => 'Industrial Safety Training',
                'description' => 'Internal company safety and engineering training.',
                'image' => 'events/event1.jpg',
                'event_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Geothermal Project Meeting',
                'description' => 'Project coordination and planning meeting.',
                'image' => 'events/event2.jpg',
                'event_date' => now(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        Gallery::insert([
            [
                'title' => 'Field Operation',
                'image' => 'gallery/gallery1.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Engineering Team',
                'image' => 'gallery/gallery2.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Maintenance Activity',
                'image' => 'gallery/gallery3.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        Client::insert([
            [
                'name' => 'Pertamina',
                'logo' => 'clients/pertamina.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'PLN',
                'logo' => 'clients/pln.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Chevron',
                'logo' => 'clients/chevron.png',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'Ridho',
                'email' => 'ridho@gmail.com',
                'password' => bcrypt('password')
            ],
            [
                'name' => 'wayan',
                'email' => 'wayan@gmail.com',
                'password' => bcrypt('password')
            ],

        ]);
    }
}
