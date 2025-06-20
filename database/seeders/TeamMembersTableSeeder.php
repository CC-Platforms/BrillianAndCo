<?php

namespace Database\Seeders;

use App\Models\TeamMember;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TeamMembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $teamMembers = [
            [
                'name' => 'Pah Brillian Beng',
                'slug' => 'pah-brillian-beng',
                'position' => 'CEO , BRICORE',
                'email' => 'bricore161@gmail.com',
                'phone' => null,
                'website' => null,
                'experience' => '8 Years',
                'availability' => 'Full Time',
                'description' => 'Pah Brillian Beng is a seasoned real estate agent with extensive experience in residential and commercial properties in Buea and Limbe.',
                'image' => 'assets/img/brillian/ceo_image.jpg',
                'social_links_json' => [
                    'facebook' => 'https://www.facebook.com/share/197AyYyroV/?mibextid=wwXIfr',
                    'tiktok' => 'https://www.tiktok.com/@agentbrillian1?_t=ZM-8w2zfFhyJ8P&_r=1',
                    'instagram' => 'https://www.instagram.com/agentbrillian1?igsh=NjVkMjQ4cGF2NXpp&utm_source=qr',
                    'linkedin' => 'https://cm.linkedin.com/in/pah-brillian-beng-a3908b1a6',
                ],
                'skills_json' => [
                    ['title' => 'Property Negotiation', 'value' => 85],
                    ['title' => 'Client Relations', 'value' => 90],
                    ['title' => 'Market Analysis (SW Region)', 'value' => 75],
                    ['title' => 'Contract Drafting', 'value' => 80]
                ],
                'is_active' => true,
            ],
            [
                'name' => 'Aporeke Chekore Marie',
                'slug' => 'aporeke-chekore-marie',
                'position' => 'Secretary, BRICORE',
                'email' => 'aporekemariechekore@gmail.com',
                'phone' => '+237 681239513',
                'website' => null,
                'experience' => '5 Years',
                'availability' => 'Part Time',
                'description' => 'Marie oversees property operations ensuring tenant satisfaction and property maintenance across Douala and Yaoundé portfolios.',
                'image' => 'assets/img/secretary.jpg',
                'social_links_json' => [
                    'facebook' => 'https://www.facebook.com/share/1JDa33kfks/?mibextid=wwXIfr',
                    'tiktok' => 'https://snapchat.com/t/hvnLLTI1',
                    'linkedin' => 'https://cm.linkedin.com/in/pah-brillian-beng-a3908b1a6',
                ],
                'skills_json' => [
                    ['title' => 'Maintenance Coordination', 'value' => 88],
                    ['title' => 'Budget Management', 'value' => 82],
                    ['title' => 'Conflict Resolution', 'value' => 80],
                    ['title' => 'Team Leadership', 'value' => 85]
                ],
                'is_active' => true,
            ],
        ];

        foreach ($teamMembers as $teamMember) {
            TeamMember::create($teamMember);
        }
    }
}
