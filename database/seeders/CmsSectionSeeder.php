<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // ✅ Required!

class CmsSectionSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('cms_sections')->insert([
            //Hero Section
        ['section_name' => 'hero', 'key' => 'heading', 'value' => 'Stay Connected <br> Stay Social <br> Stay You!'],
        ['section_name' => 'hero', 'key' => 'subheading', 'value' => 'A place where friendships grow, communities thrive...'],
        ['section_name' => 'hero', 'key' => 'button_text', 'value' => 'Get Started'],
        ['section_name' => 'hero', 'key' => 'image_path', 'value' => './MyBindle/assets/images/hero.png'],

        //Features Section
        ['section_name' => 'features', 'key' => 'heading', 'value' => 'Features That Keep You Hooked!'],
        ['section_name' => 'features', 'key' => 'subheading', 'value' => 'Meet, Chat, Share – Anytime, Anywhere!'],
        ['section_name' => 'features', 'key' => 'card_1_title', 'value' => '🔥 Seamless Connections'],
        ['section_name' => 'features', 'key' => 'card_1_desc', 'value' => 'Upload photos, videos...'],
        ['section_name' => 'features', 'key' => 'card_2_title', 'value' => '📸 Share Your Story'],
        ['section_name' => 'features', 'key' => 'card_2_desc', 'value' => 'Stay in touch with friends...'],
        ['section_name' => 'features', 'key' => 'card_3_title', 'value' => '💬 Real-Time Chat'],
        ['section_name' => 'features', 'key' => 'card_3_desc', 'value' => 'DM or group conversation...'],
        ['section_name' => 'features', 'key' => 'card_4_title', 'value' => '💬 Real-Time Chat'],
        ['section_name' => 'features', 'key' => 'card_4_desc', 'value' => 'DM or group conversation...'],
        ['section_name' => 'features', 'key' => 'card_5_title', 'value' => '💬 Real-Time Chat'],
        ['section_name' => 'features', 'key' => 'card_5_desc', 'value' => 'DM or group conversation...'],
        ['section_name' => 'features', 'key' => 'card_6_title', 'value' => '💬 Real-Time Chat'],
        ['section_name' => 'features', 'key' => 'card_6_desc', 'value' => 'DM or group conversation...'],

        //About Section
        ['section_name' => 'about', 'key' => 'heading', 'value' => 'Where Every Click Sparks a Connection!'],
        ['section_name' => 'about', 'key' => 'desc', 'value' => 'A small act of kindness...'],
        ['section_name' => 'about', 'key' => 'image_path', 'value' => './MyBindle/assets/images/about.png'],
        ['section_name' => 'about', 'key' => 'card_1_title', 'value' => '🎥 Short Videos & Reels'],
        ['section_name' => 'about', 'key' => 'card_1_desc', 'value' => 'Share engaging, bite-sized content...'],
        ['section_name' => 'about', 'key' => 'card_2_title', 'value' => '🔔 Smart Notifications'],
        ['section_name' => 'about', 'key' => 'card_2_desc', 'value' => 'Stay updated...'],
        ['section_name' => 'about', 'key' => 'card_3_title', 'value' => '👥 Interest-Based Communities'],
        ['section_name' => 'about', 'key' => 'card_3_desc', 'value' => 'Join groups and discussions...'],

        //CTA Section
        ['section_name' => 'cta', 'key' => 'heading', 'value' => 'Be the Reason Someone Smiles Today!'],
        ['section_name' => 'cta', 'key' => 'desc', 'value' => 'Your generosity can change lives...'],
        ['section_name' => 'cta', 'key' => 'button_text', 'value' => 'Donate Now'],
        ['section_name' => 'cta', 'key' => 'button_url', 'value' => '/donate'],
        ['section_name' => 'cta', 'key' => 'image_path', 'value' => './MyBindle/assets/images/cta.png'],

        // Footer Section
        ['section_name' => 'footer', 'key' => 'heading', 'value' => 'Join the Fun – Download MyBindle Now!'],
        ['section_name' => 'footer', 'key' => 'desc', 'value' => 'Your Social Network, Your Way...'],
        ['section_name' => 'footer', 'key' => 'image_path', 'value' => './MyBindle/assets/images/footer.png'],
        ]);
    }
}
