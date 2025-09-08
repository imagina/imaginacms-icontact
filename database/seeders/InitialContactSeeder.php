<?php

namespace Modules\Icontact\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Icontact\Models\Notebook;
use Modules\Icontact\Models\ItemType;
use Modules\Icontact\Repositories\ItemRepository;
use Modules\Icontact\Repositories\NotebookRepository;

class InitialContactSeeder extends Seeder
{
  public function run(): void
  {
    if (Notebook::count() === 0) {
      $notebookRepository = app(NotebookRepository::class);
      $itemRepository = app(ItemRepository::class);
      $notebook = $notebookRepository->create(
        [
          'system_name' => 'main_contact',
          'is_enable' => true,
          'is_public' => true,
          'es' => ['title' => 'Libreta de contacto'],
          'en' => ['title' => 'Default Contact Book'],
        ]
      );

      $items = [
        [
          'system_name' => 'phone_primary',
          'type_id' => ItemType::PHONE,
          'is_enable' => true,
          'country_code' => 57,
          'es' => [
            'title' => 'Teléfono principal',
            'value' => '1000000000',
            'message' => 'Línea general',
          ],
          'en' => [
            'title' => 'Primary phone',
            'value' => '1000000000',
            'message' => 'General line',
          ],
        ],
        [
          'system_name' => 'whatsapp_primary',
          'type_id' => ItemType::WHATSAPP,
          'is_enable' => true,
          'country_code' => 57,
          'es' => [
            'title' => 'Whatsapp principal',
            'value' => '1000000000',
            'message' => 'Línea general',
          ],
          'en' => [
            'title' => 'Primary Whatsapp',
            'value' => '1000000000',
            'message' => 'General line',
          ],
        ],
        [
          'system_name' => 'email_main',
          'type_id' => ItemType::EMAIL,
          'is_enable' => true,
          'country_code' => null,
          'es' => [
            'title' => 'Correo principal',
            'value' => 'info@example.com',
            'message' => 'Atención general',
          ],
          'en' => [
            'title' => 'Main email',
            'value' => 'info@example.com',
            'message' => 'General inquiries',
          ],
        ],
        [
          'system_name' => 'facebook',
          'type_id' => ItemType::FACEBOOK,
          'is_enable' => true,
          'country_code' => null,
          'es' => [
            'title' => 'Facebook',
            'value' => 'https://facebook.com/example',
            'message' => null,
          ],
          'en' => [
            'title' => 'Facebook',
            'value' => 'https://facebook.com/example',
            'message' => null,
          ],
        ],
        [
          'system_name' => 'twitter',
          'type_id' => ItemType::TWITTER,
          'is_enable' => true,
          'country_code' => null,
          'es' => [
            'title' => 'X (Twitter)',
            'value' => 'https://x.com/example',
            'message' => null,
          ],
          'en' => [
            'title' => 'X (Twitter)',
            'value' => 'https://x.com/example',
            'message' => null,
          ],
        ],
        [
          'system_name' => 'instagram',
          'type_id' => ItemType::INSTAGRAM,
          'is_enable' => true,
          'country_code' => null,
          'es' => [
            'title' => 'Instagram',
            'value' => 'https://instagram.com/example',
            'message' => null,
          ],
          'en' => [
            'title' => 'Instagram',
            'value' => 'https://instagram.com/example',
            'message' => null,
          ],
        ],
        [
          'system_name' => 'tiktok',
          'type_id' => ItemType::TIKTOK,
          'is_enable' => true,
          'country_code' => null,
          'es' => [
            'title' => 'TikTok',
            'value' => 'https://www.tiktok.com/@example',
            'message' => null,
          ],
          'en' => [
            'title' => 'TikTok',
            'value' => 'https://www.tiktok.com/@example',
            'message' => null,
          ],
        ],
        [
          'system_name' => 'youtube',
          'type_id' => ItemType::YOUTUBE,
          'is_enable' => true,
          'country_code' => null,
          'es' => [
            'title' => 'YouTube',
            'value' => 'https://youtube.com/@example',
            'message' => null,
          ],
          'en' => [
            'title' => 'YouTube',
            'value' => 'https://youtube.com/@example',
            'message' => null,
          ],
        ],
      ];

      foreach ($items as $payload) {
        $payload['notebook_id'] = $notebook->id;
        $itemRepository->create($payload);
      }
    }
  }
}
