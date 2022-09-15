<x-tests.app>
  <x-slot name="header">
    ヘッダー1
  </x-slot>
  コンポーネント1
  <x-tests.card title="タイトル1" content="本文1" message="$message" />
  <x-tests.card title="タイトル2" content="本文2" message="$message" />
  <x-tests.card title="CSSを変更したい" class="bg-red-300" content="本文3" message="$message" />

</x-tests.app>