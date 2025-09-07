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
          'entity_type' => null,
          'entity_id' => null,
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
            'value' => '+57 300 000 0000',
            'message' => 'Línea general',
          ],
          'en' => [
            'title' => 'Primary phone',
            'value' => '+57 300 000 0000',
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
        [
          'system_name' => 'linkedin',
          'type_id' => ItemType::LINKEDIN,
          'is_enable' => true,
          'country_code' => null,
          'es' => [
            'title' => 'LinkedIn',
            'value' => 'https://www.linkedin.com/company/example',
            'message' => null,
          ],
          'en' => [
            'title' => 'LinkedIn',
            'value' => 'https://www.linkedin.com/company/example',
            'message' => null,
          ],
        ],
        [
          'system_name' => 'google',
          'type_id' => ItemType::GOOGLE,
          'is_enable' => true,
          'country_code' => null,
          'es' => [
            'title' => 'Google',
            'value' => 'https://google.com/search?q=example',
            'message' => null,
          ],
          'en' => [
            'title' => 'Google',
            'value' => 'https://google.com/search?q=example',
            'message' => null,
          ],
        ],
        [
          'system_name' => 'pinterest',
          'type_id' => ItemType::PINTEREST,
          'is_enable' => true,
          'country_code' => null,
          'es' => [
            'title' => 'Pinterest',
            'value' => 'https://www.pinterest.com/example',
            'message' => null,
          ],
          'en' => [
            'title' => 'Pinterest',
            'value' => 'https://www.pinterest.com/example',
            'message' => null,
          ],
        ],
        [
          'system_name' => 'flickr',
          'type_id' => ItemType::FLICKR,
          'is_enable' => true,
          'country_code' => null,
          'es' => [
            'title' => 'Flickr',
            'value' => 'https://www.flickr.com/photos/example',
            'message' => null,
          ],
          'en' => [
            'title' => 'Flickr',
            'value' => 'https://www.flickr.com/photos/example',
            'message' => null,
          ],
        ]
      ];

      foreach ($items as $payload) {
        $payload['notebook_id'] = $notebook->id;
        $itemRepository->create($payload);
      }
    }
  }
}
