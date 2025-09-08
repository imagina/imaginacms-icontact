<?php

namespace Modules\Icontact\Models;

use Imagina\Icore\Models\CoreStaticModel;

class ItemType extends CoreStaticModel
{
  const PHONE = 0;
  const WHATSAPP = 1;
  const EMAIL = 2;
  const FACEBOOK = 3;
  const TWITTER = 4;
  const INSTAGRAM = 5;
  const TIKTOK = 6;
  const YOUTUBE = 7;
  const LINKEDIN = 8;
  const GOOGLE = 9;
  const PINTEREST = 10;
  const FLICKR = 11;

  public function __construct()
  {
    $this->records = [
      self::PHONE => [
        'id' => self::PHONE,
        'title' => itrans('icontact::itemType.phone'),
        'icon' => 'fa-solid fa-phone'
      ],
      self::WHATSAPP => [
        'id' => self::WHATSAPP,
        'title' => 'Whatsapp',
        'icon' => 'fa-brands fa-whatsapp'
      ],
      self::EMAIL => [
        'id' => self::EMAIL,
        'title' => itrans('icontact::itemType.email'),
        'icon' => 'fa-solid fa-envelope'
      ],
      self::FACEBOOK => [
        'id' => self::FACEBOOK,
        'title' => itrans('icontact::itemType.facebook'),
        'icon' => 'fa-brands fa-facebook'
      ],
      self::TWITTER => [
        'id' => self::TWITTER,
        'title' => itrans('icontact::itemType.twitter'),
        'icon' => 'fa-brands fa-x-twitter'
      ],
      self::INSTAGRAM => [
        'id' => self::INSTAGRAM,
        'title' => itrans('icontact::itemType.instagram'),
        'icon' => 'fa-brands fa-instagram'
      ],
      self::TIKTOK => [
        'id' => self::TIKTOK,
        'title' => itrans('icontact::itemType.tiktok'),
        'icon' => 'fa-brands fa-tiktok'
      ],
      self::YOUTUBE => [
        'id' => self::YOUTUBE,
        'title' => itrans('icontact::itemType.youtube'),
        'icon' => 'fa-brands fa-youtube'
      ],
      self::LINKEDIN => [
        'id' => self::LINKEDIN,
        'title' => itrans('icontact::itemType.linkedin'),
        'icon' => 'fa-brands fa-linkedin'
      ],
      self::GOOGLE => [
        'id' => self::GOOGLE,
        'title' => itrans('icontact::itemType.google'),
        'icon' => 'fa-brands fa-google'
      ],
      self::PINTEREST => [
        'id' => self::PINTEREST,
        'title' => itrans('icontact::itemType.pinterest'),
        'icon' => 'fa-brands fa-pinterest'
      ],
      self::FLICKR => [
        'id' => self::FLICKR,
        'title' => itrans('icontact::itemType.flickr'),
        'icon' => 'fa-brands fa-flickr'
      ],
    ];
  }
}
